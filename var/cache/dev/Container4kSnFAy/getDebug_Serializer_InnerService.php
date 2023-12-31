<?php

namespace Container4kSnFAy;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Serializer_InnerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.serializer.inner' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'SerializerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'ContextAwareNormalizerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'ContextAwareDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'EncoderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'ContextAwareEncoderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'DecoderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'ContextAwareDecoderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Serializer.php';

        $a = ($container->privates['debug.serializer.normalizer.mime_message'] ?? $container->load('getDebug_Serializer_Normalizer_MimeMessageService'));

        if (isset($container->privates['debug.serializer.inner'])) {
            return $container->privates['debug.serializer.inner'];
        }
        $b = ($container->privates['debug.serializer.normalizer.object'] ?? $container->load('getDebug_Serializer_Normalizer_ObjectService'));

        if (isset($container->privates['debug.serializer.inner'])) {
            return $container->privates['debug.serializer.inner'];
        }

        return $container->privates['debug.serializer.inner'] = new \Symfony\Component\Serializer\Serializer([0 => ($container->privates['debug.serializer.denormalizer.unwrapping'] ?? $container->load('getDebug_Serializer_Denormalizer_UnwrappingService')), 1 => ($container->privates['debug.serializer.normalizer.flatten_exception'] ?? $container->load('getDebug_Serializer_Normalizer_FlattenExceptionService')), 2 => ($container->privates['debug.serializer.normalizer.problem'] ?? $container->load('getDebug_Serializer_Normalizer_ProblemService')), 3 => ($container->privates['debug.serializer.normalizer.uid'] ?? $container->load('getDebug_Serializer_Normalizer_UidService')), 4 => ($container->privates['debug.serializer.normalizer.datetime'] ?? $container->load('getDebug_Serializer_Normalizer_DatetimeService')), 5 => ($container->privates['debug.serializer.normalizer.constraint_violation_list'] ?? $container->load('getDebug_Serializer_Normalizer_ConstraintViolationListService')), 6 => $a, 7 => ($container->privates['debug.serializer.normalizer.datetimezone'] ?? $container->load('getDebug_Serializer_Normalizer_DatetimezoneService')), 8 => ($container->privates['debug.serializer.normalizer.dateinterval'] ?? $container->load('getDebug_Serializer_Normalizer_DateintervalService')), 9 => ($container->privates['debug.serializer.normalizer.form_error'] ?? $container->load('getDebug_Serializer_Normalizer_FormErrorService')), 10 => ($container->privates['debug.serializer.normalizer.backed_enum'] ?? $container->load('getDebug_Serializer_Normalizer_BackedEnumService')), 11 => ($container->privates['debug.serializer.normalizer.data_uri'] ?? $container->load('getDebug_Serializer_Normalizer_DataUriService')), 12 => ($container->privates['debug.serializer.normalizer.json_serializable'] ?? $container->load('getDebug_Serializer_Normalizer_JsonSerializableService')), 13 => ($container->privates['debug.serializer.denormalizer.array'] ?? $container->load('getDebug_Serializer_Denormalizer_ArrayService')), 14 => $b], [0 => ($container->privates['debug.serializer.encoder.xml'] ?? $container->load('getDebug_Serializer_Encoder_XmlService')), 1 => ($container->privates['debug.serializer.encoder.json'] ?? $container->load('getDebug_Serializer_Encoder_JsonService')), 2 => ($container->privates['debug.serializer.encoder.yaml'] ?? $container->load('getDebug_Serializer_Encoder_YamlService')), 3 => ($container->privates['debug.serializer.encoder.csv'] ?? $container->load('getDebug_Serializer_Encoder_CsvService'))]);
    }
}
