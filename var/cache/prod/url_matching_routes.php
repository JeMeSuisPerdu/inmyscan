<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/anime/upload/season' => [
            [['_route' => 'anime_season_upload_form', '_controller' => 'App\\Controller\\AnimeUploadController::showForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'anime_season_upload', '_controller' => 'App\\Controller\\AnimeUploadController::uploadSeason'], null, ['POST' => 0], null, false, false, null],
        ],
        '/manga/search' => [[['_route' => 'search_manga', '_controller' => 'App\\Controller\\CoverController::searchManga'], null, null, null, false, false, null]],
        '/manga/search/ajax' => [[['_route' => 'ajax_search_manga', '_controller' => 'App\\Controller\\CoverController::ajaxSearchManga'], null, null, null, false, false, null]],
        '/episode/upload' => [
            [['_route' => 'episode_upload_form', '_controller' => 'App\\Controller\\EpisodeUploadController::showForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'episode_upload', '_controller' => 'App\\Controller\\EpisodeUploadController::upload'], null, ['POST' => 0], null, false, false, null],
        ],
        '/404' => [[['_route' => 'error_404', '_controller' => 'App\\Controller\\ErrorController::notFound'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\ErrorController::showError'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/catalogue' => [[['_route' => 'catalogue', '_controller' => 'App\\Controller\\MangaController::catalogue'], null, null, null, true, false, null]],
        '/creation_manga' => [
            [['_route' => 'manga_create_form', '_controller' => 'App\\Controller\\MangaUploadController::showForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'manga_create', '_controller' => 'App\\Controller\\MangaUploadController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/creation_scan' => [[['_route' => 'scan_create_form', '_controller' => 'App\\Controller\\ScanController::showCreateScanForm'], null, ['GET' => 0], null, false, false, null]],
        '/scan/ajouter' => [[['_route' => 'ajouter_scan', '_controller' => 'App\\Controller\\ScanController::ajouterScan'], null, ['POST' => 0], null, false, false, null]],
        '/sitemap' => [[['_route' => 'app_sitemap', '_format' => 'xml', '_controller' => 'App\\Controller\\SitemapController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/manga/([^/]++)(?'
                    .'|(*:25)'
                    .'|/scans(*:38)'
                .')'
                .'|/anime/([^/]++)/([^/]++)(*:70)'
                .'|/scan/([^/]++)/ajout(?'
                    .'|_chapitre_form(*:114)'
                    .'|er\\-chapitre(*:134)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'manga_profile', '_controller' => 'App\\Controller\\CoverController::mangaProfile'], ['id'], null, null, false, true, null]],
        38 => [[['_route' => 'manga_scans', '_controller' => 'App\\Controller\\CoverController::showScans'], ['id'], null, null, false, false, null]],
        70 => [[['_route' => 'voir_anime', '_controller' => 'App\\Controller\\CoverController::voirAnime'], ['mangaId', 'saison'], null, null, false, true, null]],
        114 => [[['_route' => 'scan_ajout_chapitre_form', '_controller' => 'App\\Controller\\ScanController::showAddChapitreForm'], ['id'], ['GET' => 0], null, false, false, null]],
        134 => [
            [['_route' => 'ajouter_chapitre', '_controller' => 'App\\Controller\\ScanController::ajouterChapitre'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
