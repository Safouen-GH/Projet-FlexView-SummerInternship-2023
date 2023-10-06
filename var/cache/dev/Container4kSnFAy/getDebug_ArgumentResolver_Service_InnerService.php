<?php

namespace Container4kSnFAy;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_ArgumentResolver_Service_InnerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.argument_resolver.service.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'ServiceValueResolver.php';

        $a = ($container->privates['.service_locator.83wt11C'] ?? $container->load('get_ServiceLocator_83wt11CService'));

        if (isset($container->privates['debug.argument_resolver.service.inner'])) {
            return $container->privates['debug.argument_resolver.service.inner'];
        }

        return $container->privates['debug.argument_resolver.service.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver($a);
    }
}