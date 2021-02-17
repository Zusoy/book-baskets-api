<?php

namespace App\Adapter\Repository;

use App\Domain\Model\Identifier;
use App\Domain\Model\Book;
use App\Domain\Repository\Books as BooksInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class Books implements BooksInterface
{
    private HttpClientInterface $http;

    public function __construct(HttpClientInterface $bookClient)
    {
        $this->http = $bookClient;
    }

    /**
     * {@inheritDoc}
     */
    public function findAll(): array
    {
        $result = $this->http->request('GET', '/books');

        $books = array_map(
            fn (array $bookData): Book => new Book($bookData['_id'], $bookData['label'], $bookData['author_id']),
            json_decode($result->getContent(), true)
        );

        return $books;
    }

    /**
     * {@inheritDoc}
     */
    public function find(Identifier $id): ?Book
    {
        $books = $this->findAll();

        foreach ($books as $book)
        {
            if ($book->getId() === (string) $id) {
                return $book;
            }
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function withLabel(string $label): ?Book
    {
        $books = $this->findAll();

        foreach ($books as $book)
        {
            if ($book->getLabel() === $label) {
                return $book;
            }
        }

        return null;
    }
}
