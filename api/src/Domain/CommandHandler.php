<?php

namespace App\Domain;

interface CommandHandler
{
    public function supports(object $command): bool;

    /**
     * @return mixed
     */
    public function handle(object $command);
}
