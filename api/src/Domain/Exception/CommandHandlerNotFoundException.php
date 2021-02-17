<?php

namespace App\Domain\Exception;

use Exception;

final class CommandHandlerNotFoundException extends Exception
{
    public function __construct(object $command)
    {
        parent::__construct("Command handler not found for the command " . get_class($command));
    }
}
