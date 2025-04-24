<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
        '/films_catalogue' => [[['_route' => 'films_catalogue', '_controller' => 'App\\Controller\\FilmController::catalogue'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/catalogue' => [[['_route' => 'catalogue', '_controller' => 'App\\Controller\\MangaController::catalogue'], null, null, null, true, false, null]],
        '/creation_manga' => [
            [['_route' => 'manga_create_form', '_controller' => 'App\\Controller\\MangaUploadController::showForm'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'manga_create', '_controller' => 'App\\Controller\\MangaUploadController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/mylist' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/creation_scan' => [[['_route' => 'scan_create_form', '_controller' => 'App\\Controller\\ScanController::showCreateScanForm'], null, ['GET' => 0], null, false, false, null]],
        '/scan/ajouter' => [[['_route' => 'ajouter_scan', '_controller' => 'App\\Controller\\ScanController::ajouterScan'], null, ['POST' => 0], null, false, false, null]],
        '/serie_catalogue' => [[['_route' => 'serie_catalogue', '_controller' => 'App\\Controller\\SerieController::catalogue'], null, null, null, false, false, null]],
        '/sitemap' => [[['_route' => 'app_sitemap', '_format' => 'xml', '_controller' => 'App\\Controller\\SitemapController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/manga/([^/]++)(?'
                    .'|(*:220)'
                    .'|/scans(*:234)'
                .')'
                .'|/anime/([^/]++)/([^/]++)(*:267)'
                .'|/s(?'
                    .'|erie(?'
                        .'|s/([^/]++)(*:297)'
                        .'|/([^/]++)/([^/]++)(*:323)'
                    .')'
                    .'|can/([^/]++)/ajout(?'
                        .'|_chapitre_form(*:367)'
                        .'|er\\-chapitre(*:387)'
                    .')'
                .')'
                .'|/film(?'
                    .'|s/([^/]++)(*:415)'
                    .'|/id/([^/]++)(*:435)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        220 => [[['_route' => 'manga_profile', '_controller' => 'App\\Controller\\CoverController::mangaProfile'], ['id'], null, null, false, true, null]],
        234 => [[['_route' => 'manga_scans', '_controller' => 'App\\Controller\\CoverController::showScans'], ['id'], null, null, false, false, null]],
        267 => [[['_route' => 'voir_anime', '_controller' => 'App\\Controller\\CoverController::voirAnime'], ['mangaId', 'saison'], null, null, false, true, null]],
        297 => [[['_route' => 'series_profile', '_controller' => 'App\\Controller\\CoverController::seriesProfile'], ['id'], null, null, false, true, null]],
        323 => [[['_route' => 'voir_series', '_controller' => 'App\\Controller\\CoverController::serieAnime'], ['serieId', 'saison'], null, null, false, true, null]],
        367 => [[['_route' => 'scan_ajout_chapitre_form', '_controller' => 'App\\Controller\\ScanController::showAddChapitreForm'], ['id'], ['GET' => 0], null, false, false, null]],
        387 => [[['_route' => 'ajouter_chapitre', '_controller' => 'App\\Controller\\ScanController::ajouterChapitre'], ['id'], ['POST' => 0], null, false, false, null]],
        415 => [[['_route' => 'films_profile', '_controller' => 'App\\Controller\\CoverController::filmsProfile'], ['id'], null, null, false, true, null]],
        435 => [
            [['_route' => 'voir_film', '_controller' => 'App\\Controller\\CoverController::voirFilm'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
