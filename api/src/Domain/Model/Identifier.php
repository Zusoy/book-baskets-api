<?php

namespace App\Domain\Model;

use Assert\Assert;
use Ramsey\Uuid\Nonstandard\Uuid;

final class Identifier
{
    private string $id;

    public static function generate(): self
    {
        return new self(Uuid::uuid4()->toString());
    }

    public static function fromString(string $id): self
    {
        Assert::that($id)->uuid();

        return new self($id);
    }

    private function __construct(string $id)
    {
        Assert::that($id)->notEmpty();

        $this->id = $id;
    }

    public function __toString(): string
    {
        return $this->id;
    }
}
