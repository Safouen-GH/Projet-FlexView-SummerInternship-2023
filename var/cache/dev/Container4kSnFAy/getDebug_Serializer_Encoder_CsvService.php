<?php

namespace Container4kSnFAy;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Serializer_Encoder_CsvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.serializer.encoder.csv' shared service.
     *
     * @return \Symfony\Component\Serializer\Debug\TraceableEncoder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'EncoderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'DecoderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'TraceableEncoder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'CsvEncoder.php';

        return $container->privates['debug.serializer.encoder.csv'] = new \Symfony\Component\Serializer\Debug\TraceableEncoder(($container->privates['debug.serializer.encoder.csv.inner'] ?? ($container->privates['debug.serializer.encoder.csv.inner'] = new \Symfony\Component\Serializer\Encoder\CsvEncoder())), ($container->privates['serializer.data_collector'] ?? ($container->privates['serializer.data_collector'] = new \Symfony\Component\Serializer\DataCollector\SerializerDataCollector())));
    }
}
