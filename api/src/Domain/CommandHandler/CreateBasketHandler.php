<?php

namespace App\Domain\CommandHandler;

use App\Domain\Command\CreateBasketCommand;
use App\Domain\CommandHandler;
use App\Domain\Model\Basket;
use App\Domain\Repository\Baskets;
use App\Domain\Repository\Books;

final class CreateBasketHandler implements CommandHandler
{
    private Baskets $baskets;
    private Books $books;

    public function __construct(Baskets $baskets, Books $books)
    {
        $this->baskets = $baskets;
        $this->books = $books;
    }

    /**
     * {@inheritDoc}
     */
    public function supports(object $command): bool
    {
        return $command instanceof CreateBasketCommand;
    }

    /**
     * @param CreateBasketCommand $command
     */
    public function handle(object $command): void
    {
        $bookLabels = $command->getBookLabels();
        $basket = new Basket();

        foreach ($bookLabels as $bookLabel)
        {
            $book = $this->books->withLabel($bookLabel);

            if ($book !== null) {
                $basket->addBook($book->getId());
            }
        }

        $this->baskets->add($basket);
    }
}
