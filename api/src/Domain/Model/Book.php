<?php

namespace App\Domain\Model;

final class Book
{
    private string $id;
    private string $label;
    private string $authorId;

    public function __construct(string $id, string $label, string $authorId)
    {
        $this->id = $id;
        $this->label = $label;
        $this->authorId = $authorId;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getAuthorId(): string
    {
        return $this->authorId;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'label' => $this->label,
            'authorId' => $this->authorId
        ];
    }
}
