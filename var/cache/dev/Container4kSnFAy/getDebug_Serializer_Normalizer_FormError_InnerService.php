<?php

namespace Container4kSnFAy;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Serializer_Normalizer_FormError_InnerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.serializer.normalizer.form_error.inner' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\FormErrorNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'FormErrorNormalizer.php';

        return $container->privates['debug.serializer.normalizer.form_error.inner'] = new \Symfony\Component\Serializer\Normalizer\FormErrorNormalizer();
    }
}
