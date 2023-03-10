<?php

namespace ContainerEGtu14v;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B3ICMDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B3ICMD_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B3ICMD_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\ActualiteRepository', 'getActualiteRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\ActualiteRepository',
        ]);
    }
}
