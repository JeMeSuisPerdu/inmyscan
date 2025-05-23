<?php

namespace ContainerV3xE2Ct;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HUNVR_IService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.HUNVR.i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HUNVR.i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\CoverController::searchManga' => ['privates', '.service_locator.P.blNFL.App\\Controller\\CoverController::searchManga()', 'getCoverControllersearchMangaService', true],
            'App\\Controller\\CoverController::ajaxSearchManga' => ['privates', '.service_locator.P.blNFL.App\\Controller\\CoverController::ajaxSearchManga()', 'getCoverControllerajaxSearchMangaService', true],
            'App\\Controller\\CoverController::voirAnime' => ['privates', '.service_locator.P.blNFL.App\\Controller\\CoverController::voirAnime()', 'getCoverControllervoirAnimeService', true],
            'App\\Controller\\ErrorController::showError' => ['privates', '.service_locator..QZb1Mm.App\\Controller\\ErrorController::showError()', 'getErrorControllershowErrorService', true],
            'App\\Controller\\LoginController::login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\LoginController::login()', 'getLoginControllerloginService', true],
            'App\\Controller\\MangaController::catalogue' => ['privates', '.service_locator.q5OPPft.App\\Controller\\MangaController::catalogue()', 'getMangaControllercatalogueService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\CoverController:searchManga' => ['privates', '.service_locator.P.blNFL.App\\Controller\\CoverController::searchManga()', 'getCoverControllersearchMangaService', true],
            'App\\Controller\\CoverController:ajaxSearchManga' => ['privates', '.service_locator.P.blNFL.App\\Controller\\CoverController::ajaxSearchManga()', 'getCoverControllerajaxSearchMangaService', true],
            'App\\Controller\\CoverController:voirAnime' => ['privates', '.service_locator.P.blNFL.App\\Controller\\CoverController::voirAnime()', 'getCoverControllervoirAnimeService', true],
            'App\\Controller\\ErrorController:showError' => ['privates', '.service_locator..QZb1Mm.App\\Controller\\ErrorController::showError()', 'getErrorControllershowErrorService', true],
            'App\\Controller\\LoginController:login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\LoginController::login()', 'getLoginControllerloginService', true],
            'App\\Controller\\MangaController:catalogue' => ['privates', '.service_locator.q5OPPft.App\\Controller\\MangaController::catalogue()', 'getMangaControllercatalogueService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\CoverController::searchManga' => '?',
            'App\\Controller\\CoverController::ajaxSearchManga' => '?',
            'App\\Controller\\CoverController::voirAnime' => '?',
            'App\\Controller\\ErrorController::showError' => '?',
            'App\\Controller\\LoginController::login' => '?',
            'App\\Controller\\MangaController::catalogue' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\CoverController:searchManga' => '?',
            'App\\Controller\\CoverController:ajaxSearchManga' => '?',
            'App\\Controller\\CoverController:voirAnime' => '?',
            'App\\Controller\\ErrorController:showError' => '?',
            'App\\Controller\\LoginController:login' => '?',
            'App\\Controller\\MangaController:catalogue' => '?',
        ]);
    }
}
