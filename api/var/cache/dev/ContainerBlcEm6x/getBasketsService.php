<?php

namespace ContainerBlcEm6x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBasketsService extends App_Symfony_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Adapter\Repository\Baskets' shared autowired service.
     *
     * @return \App\Adapter\Repository\Baskets
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Domain/Repository/Baskets.php';
        include_once \dirname(__DIR__, 4).'/src/Adapter/Repository/Baskets.php';

        return $container->privates['App\\Adapter\\Repository\\Baskets'] = new \App\Adapter\Repository\Baskets(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
