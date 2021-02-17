<?php

namespace App\Symfony\Controller\Api;

use App\Domain\Command\CreateBasketCommand;
use App\Domain\CommandBus;
use App\Domain\Model\Basket;
use App\Domain\Repository\Baskets;
use App\Domain\Repository\Books;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Exception;

final class BasketController extends AbstractController
{
    private CommandBus $commandBus;
    private Baskets $baskets;
    private Books $books;

    public function __construct(CommandBus $commandBus, Baskets $baskets, Books $books)
    {
        $this->commandBus = $commandBus;
        $this->baskets = $baskets;
        $this->books = $books;
    }

    public function getBaskets(): JsonResponse
    {
        $baskets = array_map(
            fn (Basket $basket): array => $basket->toArray(),
            $this->baskets->findAll()
        );

        return new JsonResponse([
            'payload' => $baskets,
            'count' => count($baskets)
        ]);
    }

    public function postBaskets(Request $request): JsonResponse
    {
        $content = json_decode($request->getContent(), true);

        if (!array_key_exists('data', $content)) {
            throw new Exception('Required data content is not defined');
        }

        $data = $content['data'];

        $command = new CreateBasketCommand($data);
        
        $this->commandBus->dispatch($command);

        return new JsonResponse([]);
    }
}
