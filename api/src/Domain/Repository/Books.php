<?php

namespace App\Domain\Repository;

use App\Domain\Model\Book;
use App\Domain\Model\Identifier;

interface Books
{
    /**
     * @return array<\App\Domain\Model\Book>
     */
    public function findAll(): array;

    public function find(Identifier $id): ?Book;

    public function withLabel(string $label): ?Book;
}
