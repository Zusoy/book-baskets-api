<?php

namespace App\Domain\Model;

use App\Domain\Model\Identifier;

class Basket
{
    private Identifier $id;

    /**
     * @var string[]
     */
    private array $books;

    public function __construct()
    {
        $this->id = Identifier::generate();
        $this->books = [];
    }

    public function getId(): Identifier
    {
        return $this->id;
    }

    public function addBook(string $bookId): self
    {
        $this->books[] = $bookId;

        return $this;
    }

    public function removeBook(string $bookId): self
    {
        if ($key = array_search($bookId, $this->books) !== false) {
            unset($this->books[$key]);
        }

        return $this;
    }

    /**
     * @return string[]
     */
    public function getBooks(): array
    {
        return $this->books;
    }

    public function toArray(): array
    {
        return [
            'id' => (string) $this->id,
            'books' => $this->books
        ];
    }
}
