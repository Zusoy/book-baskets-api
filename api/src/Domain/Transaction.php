<?php

namespace App\Domain;

interface Transaction
{
    public function begin(): void;

    public function commit(): void;

    public function rollback(): void;
}
