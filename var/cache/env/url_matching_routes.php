<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/anime/upload' => [
            [['_route' => 'anime_upload_form', '_controller' => 'App\\Controller\\AnimeUploadController::showForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'anime_upload', '_controller' => 'App\\Controller\\AnimeUploadController::upload'], null, ['POST' => 0], null, false, false, null],
        ],
        '/manga/search' => [[['_route' => 'search_manga', '_controller' => 'App\\Controller\\CoverController::searchManga'], null, null, null, false, false, null]],
        '/manga/search/ajax' => [[['_route' => 'ajax_search_manga', '_controller' => 'App\\Controller\\CoverController::ajaxSearchManga'], null, null, null, false, false, null]],
        '/404' => [[['_route' => 'error_404', '_controller' => 'App\\Controller\\ErrorController::notFound'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\ErrorController::showError'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/catalogue' => [[['_route' => 'catalogue', '_controller' => 'App\\Controller\\MangaController::catalogue'], null, null, null, true, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/manga/(?'
                    .'|scan/([^/]++)/(\\d+)/(\\d+)(*:42)'
                    .'|([^/]++)(?'
                        .'|(*:60)'
                        .'|/scans(*:73)'
                    .')'
                .')'
                .'|/anime/([^/]++)/([^/]++)(*:106)'
                .'|/download/chapter/([^/]++)(*:140)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        42 => [[['_route' => 'chapter_cover', '_controller' => 'App\\Controller\\CoverController::getCover'], ['name', 'chapter', 'page'], null, null, false, true, null]],
        60 => [[['_route' => 'manga_profile', '_controller' => 'App\\Controller\\CoverController::mangaProfile'], ['id'], null, null, false, true, null]],
        73 => [[['_route' => 'manga_scans', '_controller' => 'App\\Controller\\CoverController::mangaScans'], ['id'], null, null, false, false, null]],
        106 => [[['_route' => 'voir_anime', '_controller' => 'App\\Controller\\CoverController::voirAnime'], ['mangaId', 'saison'], null, null, false, true, null]],
        140 => [
            [['_route' => 'download_chapter', '_controller' => 'App\\Controller\\DownloadController::downloadChapter'], ['chapter'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
