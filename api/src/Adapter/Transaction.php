<?php

namespace App\Adapter;

use Doctrine\ORM\EntityManagerInterface;
use App\Domain\Transaction as TransactionInterface;

final class Transaction implements TransactionInterface
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function begin(): void
    {
        $this->entityManager->beginTransaction();
    }

    public function commit(): void
    {
        $this->entityManager->flush();
        $this->entityManager->commit();
    }

    public function rollback(): void
    {
        $this->entityManager->close();
        $this->entityManager->rollback();
    }
}
