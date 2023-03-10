<?php

namespace ContainerOBu5y1j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VhSGKsAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VhSGKsA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VhSGKsA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'abonnement' => ['privates', '.errored..service_locator.VhSGKsA.App\\Entity\\Abonnement', NULL, 'Cannot autowire service ".service_locator.VhSGKsA": it references class "App\\Entity\\Abonnement" but no such service exists.'],
            'abonnementRepository' => ['privates', 'App\\Repository\\AbonnementRepository', 'getAbonnementRepositoryService', true],
        ], [
            'abonnement' => 'App\\Entity\\Abonnement',
            'abonnementRepository' => 'App\\Repository\\AbonnementRepository',
        ]);
    }
}
