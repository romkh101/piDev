<?php

namespace ContainerEGtu14v;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JNHbgZRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jNHbgZR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jNHbgZR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AbonnementController::delete' => ['privates', '.service_locator.VhSGKsA', 'get_ServiceLocator_VhSGKsAService', true],
            'App\\Controller\\AbonnementController::edit' => ['privates', '.service_locator.VhSGKsA', 'get_ServiceLocator_VhSGKsAService', true],
            'App\\Controller\\AbonnementController::index' => ['privates', '.service_locator.sV3RnT7', 'get_ServiceLocator_SV3RnT7Service', true],
            'App\\Controller\\AbonnementController::new' => ['privates', '.service_locator.8b.I63C', 'get_ServiceLocator_8b_I63CService', true],
            'App\\Controller\\AbonnementController::show' => ['privates', '.service_locator.sum3bff', 'get_ServiceLocator_Sum3bffService', true],
            'App\\Controller\\ActualiteController::Afficher' => ['privates', '.service_locator.gguI4mF', 'get_ServiceLocator_GguI4mFService', true],
            'App\\Controller\\ActualiteController::Afficherfront' => ['privates', '.service_locator.gguI4mF', 'get_ServiceLocator_GguI4mFService', true],
            'App\\Controller\\ActualiteController::Modifier' => ['privates', '.service_locator.B3ICMD_', 'get_ServiceLocator_B3ICMDService', true],
            'App\\Controller\\ActualiteController::Supprimer' => ['privates', '.service_locator.B3ICMD_', 'get_ServiceLocator_B3ICMDService', true],
            'App\\Controller\\ActualiteController::afficherActualite' => ['privates', '.service_locator.B3ICMD_', 'get_ServiceLocator_B3ICMDService', true],
            'App\\Controller\\AdController::confirmUser' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\AdController::rejectUser' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\AthleteController::delete' => ['privates', '.service_locator.B2JC1HM', 'get_ServiceLocator_B2JC1HMService', true],
            'App\\Controller\\AthleteController::edit' => ['privates', '.service_locator.B2JC1HM', 'get_ServiceLocator_B2JC1HMService', true],
            'App\\Controller\\AthleteController::index' => ['privates', '.service_locator.kpvCfyB', 'get_ServiceLocator_KpvCfyBService', true],
            'App\\Controller\\AthleteController::neeew' => ['privates', '.service_locator.q9gMP9.', 'get_ServiceLocator_Q9gMP9_Service', true],
            'App\\Controller\\AthleteController::new' => ['privates', '.service_locator.kpvCfyB', 'get_ServiceLocator_KpvCfyBService', true],
            'App\\Controller\\AthleteController::participerEvenement' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\AthleteController::show' => ['privates', '.service_locator.q9gMP9.', 'get_ServiceLocator_Q9gMP9_Service', true],
            'App\\Controller\\BackController::delete' => ['privates', '.service_locator.xIIsolt', 'get_ServiceLocator_XIIsoltService', true],
            'App\\Controller\\BackController::edit' => ['privates', '.service_locator.xIIsolt', 'get_ServiceLocator_XIIsoltService', true],
            'App\\Controller\\BackController::index' => ['privates', '.service_locator.P_GR57z', 'get_ServiceLocator_PGR57zService', true],
            'App\\Controller\\BackController::new' => ['privates', '.service_locator.P_GR57z', 'get_ServiceLocator_PGR57zService', true],
            'App\\Controller\\BackController::search' => ['privates', '.service_locator.P_GR57z', 'get_ServiceLocator_PGR57zService', true],
            'App\\Controller\\BackController::show' => ['privates', '.service_locator.i74Me30', 'get_ServiceLocator_I74Me30Service', true],
            'App\\Controller\\CategorieController::Afficher' => ['privates', '.service_locator.Q2NRsw7', 'get_ServiceLocator_Q2NRsw7Service', true],
            'App\\Controller\\CategorieController::Modifier' => ['privates', '.service_locator.Q2NRsw7', 'get_ServiceLocator_Q2NRsw7Service', true],
            'App\\Controller\\CategorieController::Supprimer' => ['privates', '.service_locator.Q2NRsw7', 'get_ServiceLocator_Q2NRsw7Service', true],
            'App\\Controller\\CompetitionController::delete' => ['privates', '.service_locator.5KifnRw', 'get_ServiceLocator_5KifnRwService', true],
            'App\\Controller\\CompetitionController::edit' => ['privates', '.service_locator.5KifnRw', 'get_ServiceLocator_5KifnRwService', true],
            'App\\Controller\\CompetitionController::index' => ['privates', '.service_locator.4LxtSay', 'get_ServiceLocator_4LxtSayService', true],
            'App\\Controller\\CompetitionController::neeew' => ['privates', '.service_locator.q9gMP9.', 'get_ServiceLocator_Q9gMP9_Service', true],
            'App\\Controller\\CompetitionController::new' => ['privates', '.service_locator.4LxtSay', 'get_ServiceLocator_4LxtSayService', true],
            'App\\Controller\\CompetitionController::show' => ['privates', '.service_locator.tz_cB8j', 'get_ServiceLocator_TzCB8jService', true],
            'App\\Controller\\EquipeController::delete' => ['privates', '.service_locator.eehxy7O', 'get_ServiceLocator_Eehxy7OService', true],
            'App\\Controller\\EquipeController::edit' => ['privates', '.service_locator.eehxy7O', 'get_ServiceLocator_Eehxy7OService', true],
            'App\\Controller\\EquipeController::index' => ['privates', '.service_locator.f9VcekH', 'get_ServiceLocator_F9VcekHService', true],
            'App\\Controller\\EquipeController::liste' => ['privates', '.service_locator.pLVL3Y0', 'get_ServiceLocator_PLVL3Y0Service', true],
            'App\\Controller\\EquipeController::new' => ['privates', '.service_locator.f9VcekH', 'get_ServiceLocator_F9VcekHService', true],
            'App\\Controller\\EquipeController::show' => ['privates', '.service_locator.z6oxR2C', 'get_ServiceLocator_Z6oxR2CService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.FqRpgES', 'get_ServiceLocator_FqRpgESService', true],
            'App\\Controller\\SecurityController::forgotPassword' => ['privates', '.service_locator.i8cNKNy', 'get_ServiceLocator_I8cNKNyService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController::resetPassword' => ['privates', '.service_locator.Isyi.eu', 'get_ServiceLocator_Isyi_EuService', true],
            'App\\Controller\\TournoiController::assignAthlete' => ['privates', '.service_locator.sRNl6dN', 'get_ServiceLocator_SRNl6dNService', true],
            'App\\Controller\\TournoiController::delete' => ['privates', '.service_locator.BIaGlRI', 'get_ServiceLocator_BIaGlRIService', true],
            'App\\Controller\\TournoiController::edit' => ['privates', '.service_locator.BIaGlRI', 'get_ServiceLocator_BIaGlRIService', true],
            'App\\Controller\\TournoiController::index' => ['privates', '.service_locator.tMTQGj4', 'get_ServiceLocator_TMTQGj4Service', true],
            'App\\Controller\\TournoiController::new' => ['privates', '.service_locator.5lo.Jgc', 'get_ServiceLocator_5lo_JgcService', true],
            'App\\Controller\\TournoiController::pdf' => ['privates', '.service_locator.sRNl6dN', 'get_ServiceLocator_SRNl6dNService', true],
            'App\\Controller\\TournoiController::show' => ['privates', '.service_locator.sRNl6dN', 'get_ServiceLocator_SRNl6dNService', true],
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
            'App\\Controller\\ActualiteController:Afficher' => ['privates', '.service_locator.gguI4mF', 'get_ServiceLocator_GguI4mFService', true],
            'App\\Controller\\ActualiteController:Afficherfront' => ['privates', '.service_locator.gguI4mF', 'get_ServiceLocator_GguI4mFService', true],
            'App\\Controller\\ActualiteController:Modifier' => ['privates', '.service_locator.B3ICMD_', 'get_ServiceLocator_B3ICMDService', true],
            'App\\Controller\\ActualiteController:Supprimer' => ['privates', '.service_locator.B3ICMD_', 'get_ServiceLocator_B3ICMDService', true],
            'App\\Controller\\ActualiteController:afficherActualite' => ['privates', '.service_locator.B3ICMD_', 'get_ServiceLocator_B3ICMDService', true],
            'App\\Controller\\AdController:confirmUser' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\AdController:rejectUser' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\AthleteController:delete' => ['privates', '.service_locator.B2JC1HM', 'get_ServiceLocator_B2JC1HMService', true],
            'App\\Controller\\AthleteController:edit' => ['privates', '.service_locator.B2JC1HM', 'get_ServiceLocator_B2JC1HMService', true],
            'App\\Controller\\AthleteController:index' => ['privates', '.service_locator.kpvCfyB', 'get_ServiceLocator_KpvCfyBService', true],
            'App\\Controller\\AthleteController:neeew' => ['privates', '.service_locator.q9gMP9.', 'get_ServiceLocator_Q9gMP9_Service', true],
            'App\\Controller\\AthleteController:new' => ['privates', '.service_locator.kpvCfyB', 'get_ServiceLocator_KpvCfyBService', true],
            'App\\Controller\\AthleteController:participerEvenement' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\AthleteController:show' => ['privates', '.service_locator.q9gMP9.', 'get_ServiceLocator_Q9gMP9_Service', true],
            'App\\Controller\\BackController:delete' => ['privates', '.service_locator.xIIsolt', 'get_ServiceLocator_XIIsoltService', true],
            'App\\Controller\\BackController:edit' => ['privates', '.service_locator.xIIsolt', 'get_ServiceLocator_XIIsoltService', true],
            'App\\Controller\\BackController:index' => ['privates', '.service_locator.P_GR57z', 'get_ServiceLocator_PGR57zService', true],
            'App\\Controller\\BackController:new' => ['privates', '.service_locator.P_GR57z', 'get_ServiceLocator_PGR57zService', true],
            'App\\Controller\\BackController:search' => ['privates', '.service_locator.P_GR57z', 'get_ServiceLocator_PGR57zService', true],
            'App\\Controller\\BackController:show' => ['privates', '.service_locator.i74Me30', 'get_ServiceLocator_I74Me30Service', true],
            'App\\Controller\\CategorieController:Afficher' => ['privates', '.service_locator.Q2NRsw7', 'get_ServiceLocator_Q2NRsw7Service', true],
            'App\\Controller\\CategorieController:Modifier' => ['privates', '.service_locator.Q2NRsw7', 'get_ServiceLocator_Q2NRsw7Service', true],
            'App\\Controller\\CategorieController:Supprimer' => ['privates', '.service_locator.Q2NRsw7', 'get_ServiceLocator_Q2NRsw7Service', true],
            'App\\Controller\\CompetitionController:delete' => ['privates', '.service_locator.5KifnRw', 'get_ServiceLocator_5KifnRwService', true],
            'App\\Controller\\CompetitionController:edit' => ['privates', '.service_locator.5KifnRw', 'get_ServiceLocator_5KifnRwService', true],
            'App\\Controller\\CompetitionController:index' => ['privates', '.service_locator.4LxtSay', 'get_ServiceLocator_4LxtSayService', true],
            'App\\Controller\\CompetitionController:neeew' => ['privates', '.service_locator.q9gMP9.', 'get_ServiceLocator_Q9gMP9_Service', true],
            'App\\Controller\\CompetitionController:new' => ['privates', '.service_locator.4LxtSay', 'get_ServiceLocator_4LxtSayService', true],
            'App\\Controller\\CompetitionController:show' => ['privates', '.service_locator.tz_cB8j', 'get_ServiceLocator_TzCB8jService', true],
            'App\\Controller\\EquipeController:delete' => ['privates', '.service_locator.eehxy7O', 'get_ServiceLocator_Eehxy7OService', true],
            'App\\Controller\\EquipeController:edit' => ['privates', '.service_locator.eehxy7O', 'get_ServiceLocator_Eehxy7OService', true],
            'App\\Controller\\EquipeController:index' => ['privates', '.service_locator.f9VcekH', 'get_ServiceLocator_F9VcekHService', true],
            'App\\Controller\\EquipeController:liste' => ['privates', '.service_locator.pLVL3Y0', 'get_ServiceLocator_PLVL3Y0Service', true],
            'App\\Controller\\EquipeController:new' => ['privates', '.service_locator.f9VcekH', 'get_ServiceLocator_F9VcekHService', true],
            'App\\Controller\\EquipeController:show' => ['privates', '.service_locator.z6oxR2C', 'get_ServiceLocator_Z6oxR2CService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.FqRpgES', 'get_ServiceLocator_FqRpgESService', true],
            'App\\Controller\\SecurityController:forgotPassword' => ['privates', '.service_locator.i8cNKNy', 'get_ServiceLocator_I8cNKNyService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController:resetPassword' => ['privates', '.service_locator.Isyi.eu', 'get_ServiceLocator_Isyi_EuService', true],
            'App\\Controller\\TournoiController:assignAthlete' => ['privates', '.service_locator.sRNl6dN', 'get_ServiceLocator_SRNl6dNService', true],
            'App\\Controller\\TournoiController:delete' => ['privates', '.service_locator.BIaGlRI', 'get_ServiceLocator_BIaGlRIService', true],
            'App\\Controller\\TournoiController:edit' => ['privates', '.service_locator.BIaGlRI', 'get_ServiceLocator_BIaGlRIService', true],
            'App\\Controller\\TournoiController:index' => ['privates', '.service_locator.tMTQGj4', 'get_ServiceLocator_TMTQGj4Service', true],
            'App\\Controller\\TournoiController:new' => ['privates', '.service_locator.5lo.Jgc', 'get_ServiceLocator_5lo_JgcService', true],
            'App\\Controller\\TournoiController:pdf' => ['privates', '.service_locator.sRNl6dN', 'get_ServiceLocator_SRNl6dNService', true],
            'App\\Controller\\TournoiController:show' => ['privates', '.service_locator.sRNl6dN', 'get_ServiceLocator_SRNl6dNService', true],
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
            'App\\Controller\\ActualiteController::Afficher' => '?',
            'App\\Controller\\ActualiteController::Afficherfront' => '?',
            'App\\Controller\\ActualiteController::Modifier' => '?',
            'App\\Controller\\ActualiteController::Supprimer' => '?',
            'App\\Controller\\ActualiteController::afficherActualite' => '?',
            'App\\Controller\\AdController::confirmUser' => '?',
            'App\\Controller\\AdController::rejectUser' => '?',
            'App\\Controller\\AthleteController::delete' => '?',
            'App\\Controller\\AthleteController::edit' => '?',
            'App\\Controller\\AthleteController::index' => '?',
            'App\\Controller\\AthleteController::neeew' => '?',
            'App\\Controller\\AthleteController::new' => '?',
            'App\\Controller\\AthleteController::participerEvenement' => '?',
            'App\\Controller\\AthleteController::show' => '?',
            'App\\Controller\\BackController::delete' => '?',
            'App\\Controller\\BackController::edit' => '?',
            'App\\Controller\\BackController::index' => '?',
            'App\\Controller\\BackController::new' => '?',
            'App\\Controller\\BackController::search' => '?',
            'App\\Controller\\BackController::show' => '?',
            'App\\Controller\\CategorieController::Afficher' => '?',
            'App\\Controller\\CategorieController::Modifier' => '?',
            'App\\Controller\\CategorieController::Supprimer' => '?',
            'App\\Controller\\CompetitionController::delete' => '?',
            'App\\Controller\\CompetitionController::edit' => '?',
            'App\\Controller\\CompetitionController::index' => '?',
            'App\\Controller\\CompetitionController::neeew' => '?',
            'App\\Controller\\CompetitionController::new' => '?',
            'App\\Controller\\CompetitionController::show' => '?',
            'App\\Controller\\EquipeController::delete' => '?',
            'App\\Controller\\EquipeController::edit' => '?',
            'App\\Controller\\EquipeController::index' => '?',
            'App\\Controller\\EquipeController::liste' => '?',
            'App\\Controller\\EquipeController::new' => '?',
            'App\\Controller\\EquipeController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::forgotPassword' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::resetPassword' => '?',
            'App\\Controller\\TournoiController::assignAthlete' => '?',
            'App\\Controller\\TournoiController::delete' => '?',
            'App\\Controller\\TournoiController::edit' => '?',
            'App\\Controller\\TournoiController::index' => '?',
            'App\\Controller\\TournoiController::new' => '?',
            'App\\Controller\\TournoiController::pdf' => '?',
            'App\\Controller\\TournoiController::show' => '?',
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
            'App\\Controller\\ActualiteController:Afficher' => '?',
            'App\\Controller\\ActualiteController:Afficherfront' => '?',
            'App\\Controller\\ActualiteController:Modifier' => '?',
            'App\\Controller\\ActualiteController:Supprimer' => '?',
            'App\\Controller\\ActualiteController:afficherActualite' => '?',
            'App\\Controller\\AdController:confirmUser' => '?',
            'App\\Controller\\AdController:rejectUser' => '?',
            'App\\Controller\\AthleteController:delete' => '?',
            'App\\Controller\\AthleteController:edit' => '?',
            'App\\Controller\\AthleteController:index' => '?',
            'App\\Controller\\AthleteController:neeew' => '?',
            'App\\Controller\\AthleteController:new' => '?',
            'App\\Controller\\AthleteController:participerEvenement' => '?',
            'App\\Controller\\AthleteController:show' => '?',
            'App\\Controller\\BackController:delete' => '?',
            'App\\Controller\\BackController:edit' => '?',
            'App\\Controller\\BackController:index' => '?',
            'App\\Controller\\BackController:new' => '?',
            'App\\Controller\\BackController:search' => '?',
            'App\\Controller\\BackController:show' => '?',
            'App\\Controller\\CategorieController:Afficher' => '?',
            'App\\Controller\\CategorieController:Modifier' => '?',
            'App\\Controller\\CategorieController:Supprimer' => '?',
            'App\\Controller\\CompetitionController:delete' => '?',
            'App\\Controller\\CompetitionController:edit' => '?',
            'App\\Controller\\CompetitionController:index' => '?',
            'App\\Controller\\CompetitionController:neeew' => '?',
            'App\\Controller\\CompetitionController:new' => '?',
            'App\\Controller\\CompetitionController:show' => '?',
            'App\\Controller\\EquipeController:delete' => '?',
            'App\\Controller\\EquipeController:edit' => '?',
            'App\\Controller\\EquipeController:index' => '?',
            'App\\Controller\\EquipeController:liste' => '?',
            'App\\Controller\\EquipeController:new' => '?',
            'App\\Controller\\EquipeController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:forgotPassword' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:resetPassword' => '?',
            'App\\Controller\\TournoiController:assignAthlete' => '?',
            'App\\Controller\\TournoiController:delete' => '?',
            'App\\Controller\\TournoiController:edit' => '?',
            'App\\Controller\\TournoiController:index' => '?',
            'App\\Controller\\TournoiController:new' => '?',
            'App\\Controller\\TournoiController:pdf' => '?',
            'App\\Controller\\TournoiController:show' => '?',
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
