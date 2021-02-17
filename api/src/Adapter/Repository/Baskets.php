<?php

namespace App\Adapter\Repository;

use App\Domain\Model\Basket;
use App\Domain\Model\Identifier;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;
use App\Domain\Repository\Baskets as BasketsInterface;
use Doctrine\Common\Persistence\ManagerRegistry;

final class Baskets implements BasketsInterface
{
    private ObjectManager $objectManager;

    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->objectManager = $managerRegistry->getManager();
    }

    /**
     * {@inheritDoc}
     */
    public function findAll(): array
    {
        return $this->getRepository()->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function find(Identifier $id): ?Basket
    {
        return $this->getRepository()->find($id);
    }

    /**
     * {@inheritDoc}
     */
    public function add(Basket $basket): void
    {
        $this->objectManager->persist($basket);
    }

    public function remove(Basket $basket): void
    {
        $this->objectManager->remove($basket);
    }

    private function getRepository(): ObjectRepository
    {
        return $this->objectManager->getRepository(Basket::class);
    }
}
