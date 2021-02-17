<?php

namespace App\Domain\Command;

final class CreateBasketCommand
{
    /**
     * @var string[]
     */
    private array $bookLabels;

    /**
     * @param string[] $bookLabels
     */
    public function __construct(array $bookLabels)
    {
        $this->bookLabels = $bookLabels;
    }

    /**
     * @return string[]
     */
    public function getBookLabels(): array
    {
        return $this->bookLabels;
    }
}
