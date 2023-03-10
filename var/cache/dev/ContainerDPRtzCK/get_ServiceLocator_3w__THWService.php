<?php

namespace ContainerDPRtzCK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3w__THWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3w..THW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3w..THW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AbonnementController::delete' => ['privates', '.service_locator.VhSGKsA', 'get_ServiceLocator_VhSGKsAService', true],
            'App\\Controller\\AbonnementController::edit' => ['privates', '.service_locator.VhSGKsA', 'get_ServiceLocator_VhSGKsAService', true],
            'App\\Controller\\AbonnementController::index' => ['privates', '.service_locator.sV3RnT7', 'get_ServiceLocator_SV3RnT7Service', true],
            'App\\Controller\\AbonnementController::new' => ['privates', '.service_locator.8b.I63C', 'get_ServiceLocator_8b_I63CService', true],
            'App\\Controller\\AbonnementController::show' => ['privates', '.service_locator.sum3bff', 'get_ServiceLocator_Sum3bffService', true],
            'App\\Controller\\AdController::confirmUser' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\AdController::rejectUser' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.FqRpgES', 'get_ServiceLocator_FqRpgESService', true],
            'App\\Controller\\SecurityController::forgotPassword' => ['privates', '.service_locator.i8cNKNy', 'get_ServiceLocator_I8cNKNyService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController::resetPassword' => ['privates', '.service_locator.Isyi.eu', 'get_ServiceLocator_Isyi_EuService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController::indexx' => ['privates', '.service_locator.Sfu.weJ', 'get_ServiceLocator_Sfu_WeJService', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController::pdf' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\AbonnementController:delete' => ['privates', '.service_locator.VhSGKsA', 'get_ServiceLocator_VhSGKsAService', true],
            'App\\Controller\\AbonnementController:edit' => ['privates', '.service_locator.VhSGKsA', 'get_ServiceLocator_VhSGKsAService', true],
            'App\\Controller\\AbonnementController:index' => ['privates', '.service_locator.sV3RnT7', 'get_ServiceLocator_SV3RnT7Service', true],
            'App\\Controller\\AbonnementController:new' => ['privates', '.service_locator.8b.I63C', 'get_ServiceLocator_8b_I63CService', true],
            'App\\Controller\\AbonnementController:show' => ['privates', '.service_locator.sum3bff', 'get_ServiceLocator_Sum3bffService', true],
            'App\\Controller\\AdController:confirmUser' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\AdController:rejectUser' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.FqRpgES', 'get_ServiceLocator_FqRpgESService', true],
            'App\\Controller\\SecurityController:forgotPassword' => ['privates', '.service_locator.i8cNKNy', 'get_ServiceLocator_I8cNKNyService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController:resetPassword' => ['privates', '.service_locator.Isyi.eu', 'get_ServiceLocator_Isyi_EuService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController:indexx' => ['privates', '.service_locator.Sfu.weJ', 'get_ServiceLocator_Sfu_WeJService', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController:pdf' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\AbonnementController::delete' => '?',
            'App\\Controller\\AbonnementController::edit' => '?',
            'App\\Controller\\AbonnementController::index' => '?',
            'App\\Controller\\AbonnementController::new' => '?',
            'App\\Controller\\AbonnementController::show' => '?',
            'App\\Controller\\AdController::confirmUser' => '?',
            'App\\Controller\\AdController::rejectUser' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::forgotPassword' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::resetPassword' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::indexx' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::pdf' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AbonnementController:delete' => '?',
            'App\\Controller\\AbonnementController:edit' => '?',
            'App\\Controller\\AbonnementController:index' => '?',
            'App\\Controller\\AbonnementController:new' => '?',
            'App\\Controller\\AbonnementController:show' => '?',
            'App\\Controller\\AdController:confirmUser' => '?',
            'App\\Controller\\AdController:rejectUser' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:forgotPassword' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:resetPassword' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:indexx' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:pdf' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
