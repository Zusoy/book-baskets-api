<?php

namespace App\Domain\Repository;

use App\Domain\Model\Basket;
use App\Domain\Model\Identifier;

interface Baskets
{
    /**
     * @return array<\App\Domain\Model\Basket>
     */
    public function findAll(): array;

    public function find(Identifier $id): ?Basket;

    public function add(Basket $basket): void;

    public function remove(Basket $basket): void;
}
