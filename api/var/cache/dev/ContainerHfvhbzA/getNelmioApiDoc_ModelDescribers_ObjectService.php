<?php

namespace ContainerHfvhbzA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_ModelDescribers_ObjectService extends App_Symfony_KernelDevDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.model_describers.object' shared service.
     *
     * @return \Nelmio\ApiDocBundle\ModelDescriber\ObjectModelDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/ModelDescriber/ModelDescriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Describer/ModelRegistryAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/Describer/ModelRegistryAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/ModelDescriber/ObjectModelDescriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyDescriptionExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyListExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInfoExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInitializableExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInfoExtractor.php';

        return $container->privates['nelmio_api_doc.model_describers.object'] = new \Nelmio\ApiDocBundle\ModelDescriber\ObjectModelDescriber(new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['property_info.reflection_extractor'] ?? ($container->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
            yield 1 => ($container->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $container->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService'));
        }, 2), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $container->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService'));
            yield 1 => ($container->privates['property_info.php_doc_extractor'] ?? ($container->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
            yield 2 => ($container->privates['property_info.reflection_extractor'] ?? ($container->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 3), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['property_info.php_doc_extractor'] ?? ($container->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
        }, 1), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $container->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService'));
            yield 1 => ($container->privates['property_info.reflection_extractor'] ?? ($container->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 2), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['property_info.reflection_extractor'] ?? ($container->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1)), ($container->privates['annotations.cached_reader'] ?? $container->load('getAnnotations_CachedReaderService')), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['nelmio_api_doc.object_model.property_describers.array'] ?? $container->load('getNelmioApiDoc_ObjectModel_PropertyDescribers_ArrayService'));
            yield 1 => ($container->privates['nelmio_api_doc.object_model.property_describers.boolean'] ?? ($container->privates['nelmio_api_doc.object_model.property_describers.boolean'] = new \Nelmio\ApiDocBundle\PropertyDescriber\BooleanPropertyDescriber()));
            yield 2 => ($container->privates['nelmio_api_doc.object_model.property_describers.float'] ?? ($container->privates['nelmio_api_doc.object_model.property_describers.float'] = new \Nelmio\ApiDocBundle\PropertyDescriber\FloatPropertyDescriber()));
            yield 3 => ($container->privates['nelmio_api_doc.object_model.property_describers.integer'] ?? ($container->privates['nelmio_api_doc.object_model.property_describers.integer'] = new \Nelmio\ApiDocBundle\PropertyDescriber\IntegerPropertyDescriber()));
            yield 4 => ($container->privates['nelmio_api_doc.object_model.property_describers.string'] ?? ($container->privates['nelmio_api_doc.object_model.property_describers.string'] = new \Nelmio\ApiDocBundle\PropertyDescriber\StringPropertyDescriber()));
            yield 5 => ($container->privates['nelmio_api_doc.object_model.property_describers.date_time'] ?? ($container->privates['nelmio_api_doc.object_model.property_describers.date_time'] = new \Nelmio\ApiDocBundle\PropertyDescriber\DateTimePropertyDescriber()));
            yield 6 => ($container->privates['nelmio_api_doc.object_model.property_describers.object'] ?? ($container->privates['nelmio_api_doc.object_model.property_describers.object'] = new \Nelmio\ApiDocBundle\PropertyDescriber\ObjectPropertyDescriber()));
        }, 7));
    }
}
