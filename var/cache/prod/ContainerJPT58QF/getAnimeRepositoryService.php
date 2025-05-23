<?php

namespace ContainerJPT58QF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimeRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\AnimeRepository' shared autowired service.
     *
     * @return \App\Repository\AnimeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\AnimeRepository'] = new \App\Repository\AnimeRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
