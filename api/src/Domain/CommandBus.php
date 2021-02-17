<?php

namespace App\Domain;

use App\Domain\Exception\CommandHandlerNotFoundException;
use Throwable;

class CommandBus
{
    /**
     * @var iterable<\App\Domain\CommandHandler>
     */
    private iterable $handlers;

    private Transaction $transaction;

    /**
     * @param iterable<\App\Domain\CommandHandler> $handlers
     */
    public function __construct(iterable $handlers, Transaction $transaction)
    {
        $this->handlers = $handlers;
        $this->transaction = $transaction;
    }

    /**
     * @return mixed
     */
    public function dispatch(object $command)
    {
        foreach ($this->handlers as $handler)
        {
            if ($handler->supports($command))
            {
                $this->transaction->begin();

                try
                {
                    $output = $handler->handle($command);
                } catch (Throwable $error) {
                    $this->transaction->rollback();
                    throw $error;
                }

                $this->transaction->commit();

                return $output;
            }
        }

        throw new CommandHandlerNotFoundException($command);
    }
}
