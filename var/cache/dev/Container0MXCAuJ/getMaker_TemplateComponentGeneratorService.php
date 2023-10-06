<?php

namespace Container0MXCAuJ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_TemplateComponentGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.template_component_generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Util\TemplateComponentGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'TemplateComponentGenerator.php';

        return $container->privates['maker.template_component_generator'] = new \Symfony\Bundle\MakerBundle\Util\TemplateComponentGenerator();
    }
}
