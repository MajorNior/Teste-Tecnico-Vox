<?php

namespace ContainerIub22nN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PRI1W04Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pRI1W04' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pRI1W04'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'socioRepository' => ['privates', 'App\\Repository\\SociosRepository', 'getSociosRepositoryService', true],
        ], [
            'em' => '?',
            'socioRepository' => 'App\\Repository\\SociosRepository',
        ]);
    }
}
