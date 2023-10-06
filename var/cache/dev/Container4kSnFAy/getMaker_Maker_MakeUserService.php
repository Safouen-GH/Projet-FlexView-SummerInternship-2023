<?php

namespace Container4kSnFAy;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_Maker_MakeUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.maker.make_user' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Maker\MakeUser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeUser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'UserClassBuilder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'SecurityConfigUpdater.php';

        return $container->privates['maker.maker.make_user'] = new \Symfony\Bundle\MakerBundle\Maker\MakeUser(($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), ($container->privates['maker.user_class_builder'] ?? ($container->privates['maker.user_class_builder'] = new \Symfony\Bundle\MakerBundle\Security\UserClassBuilder())), ($container->privates['maker.security_config_updater'] ?? ($container->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater())), ($container->privates['maker.entity_class_generator'] ?? $container->load('getMaker_EntityClassGeneratorService')), ($container->privates['maker.doctrine_helper'] ?? $container->load('getMaker_DoctrineHelperService')));
    }
}
