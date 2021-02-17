<?php

namespace ContainerBlcEm6x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBasketControllerService extends App_Symfony_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Symfony\Controller\Api\BasketController' shared autowired service.
     *
     * @return \App\Symfony\Controller\Api\BasketController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Symfony/Controller/Api/BasketController.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/CommandBus.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Transaction.php';
        include_once \dirname(__DIR__, 4).'/src/Adapter/Transaction.php';

        $container->services['App\\Symfony\\Controller\\Api\\BasketController'] = $instance = new \App\Symfony\Controller\Api\BasketController(new \App\Domain\CommandBus(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Domain\\CommandHandler\\CreateBasketHandler'] ?? $container->load('getCreateBasketHandlerService'));
        }, 1), new \App\Adapter\Transaction(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')))), ($container->privates['App\\Adapter\\Repository\\Baskets'] ?? $container->load('getBasketsService')), ($container->privates['App\\Adapter\\Repository\\Books'] ?? $container->load('getBooksService')));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'session' => ['services', 'session', 'getSessionService', true],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'doctrine' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'session' => '?',
            'twig' => '?',
        ]))->withContext('App\\Symfony\\Controller\\Api\\BasketController', $container));

        return $instance;
    }
}
