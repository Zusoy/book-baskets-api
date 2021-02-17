<?php

namespace ContainerBlcEm6x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_Controller_SwaggerUiService extends App_Symfony_KernelDevDebugContainer
{
    /**
     * Gets the public 'nelmio_api_doc.controller.swagger_ui' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Controller\SwaggerUiController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Controller/SwaggerUiController.php';

        return $container->services['nelmio_api_doc.controller.swagger_ui'] = new \Nelmio\ApiDocBundle\Controller\SwaggerUiController(($container->privates['nelmio_api_doc.generator_locator'] ?? $container->load('getNelmioApiDoc_GeneratorLocatorService')), ($container->services['twig'] ?? $container->getTwigService()));
    }
}
