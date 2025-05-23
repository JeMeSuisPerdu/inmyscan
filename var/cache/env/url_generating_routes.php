<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'anime_upload_form' => [[], ['_controller' => 'App\\Controller\\AnimeUploadController::showForm'], [], [['text', '/anime/upload']], [], [], []],
    'anime_upload' => [[], ['_controller' => 'App\\Controller\\AnimeUploadController::upload'], [], [['text', '/anime/upload']], [], [], []],
    'chapter_cover' => [['name', 'chapter', 'page'], ['_controller' => 'App\\Controller\\CoverController::getCover'], ['chapter' => '\\d+', 'page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['variable', '/', '\\d+', 'chapter', true], ['variable', '/', '[^/]++', 'name', true], ['text', '/manga/scan']], [], [], []],
    'search_manga' => [[], ['_controller' => 'App\\Controller\\CoverController::searchManga'], [], [['text', '/manga/search']], [], [], []],
    'ajax_search_manga' => [[], ['_controller' => 'App\\Controller\\CoverController::ajaxSearchManga'], [], [['text', '/manga/search/ajax']], [], [], []],
    'manga_profile' => [['id'], ['_controller' => 'App\\Controller\\CoverController::mangaProfile'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/manga']], [], [], []],
    'manga_scans' => [['id'], ['_controller' => 'App\\Controller\\CoverController::mangaScans'], [], [['text', '/scans'], ['variable', '/', '[^/]++', 'id', true], ['text', '/manga']], [], [], []],
    'voir_anime' => [['mangaId', 'saison'], ['_controller' => 'App\\Controller\\CoverController::voirAnime'], [], [['variable', '/', '[^/]++', 'saison', true], ['variable', '/', '[^/]++', 'mangaId', true], ['text', '/anime']], [], [], []],
    'download_chapter' => [['chapter'], ['_controller' => 'App\\Controller\\DownloadController::downloadChapter'], [], [['variable', '/', '[^/]++', 'chapter', true], ['text', '/download/chapter']], [], [], []],
    'error_404' => [[], ['_controller' => 'App\\Controller\\ErrorController::notFound'], [], [['text', '/404']], [], [], []],
    'error' => [[], ['_controller' => 'App\\Controller\\ErrorController::showError'], [], [['text', '/error']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'catalogue' => [[], ['_controller' => 'App\\Controller\\MangaController::catalogue'], [], [['text', '/catalogue/']], [], [], []],
    'profile' => [[], ['_controller' => 'App\\Controller\\ProfileController::index'], [], [['text', '/profile']], [], [], []],
    'App\Controller\AnimeUploadController::showForm' => [[], ['_controller' => 'App\\Controller\\AnimeUploadController::showForm'], [], [['text', '/anime/upload']], [], [], []],
    'App\Controller\AnimeUploadController::upload' => [[], ['_controller' => 'App\\Controller\\AnimeUploadController::upload'], [], [['text', '/anime/upload']], [], [], []],
    'App\Controller\CoverController::getCover' => [['name', 'chapter', 'page'], ['_controller' => 'App\\Controller\\CoverController::getCover'], ['chapter' => '\\d+', 'page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['variable', '/', '\\d+', 'chapter', true], ['variable', '/', '[^/]++', 'name', true], ['text', '/manga/scan']], [], [], []],
    'App\Controller\CoverController::searchManga' => [[], ['_controller' => 'App\\Controller\\CoverController::searchManga'], [], [['text', '/manga/search']], [], [], []],
    'App\Controller\CoverController::ajaxSearchManga' => [[], ['_controller' => 'App\\Controller\\CoverController::ajaxSearchManga'], [], [['text', '/manga/search/ajax']], [], [], []],
    'App\Controller\CoverController::mangaProfile' => [['id'], ['_controller' => 'App\\Controller\\CoverController::mangaProfile'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/manga']], [], [], []],
    'App\Controller\CoverController::mangaScans' => [['id'], ['_controller' => 'App\\Controller\\CoverController::mangaScans'], [], [['text', '/scans'], ['variable', '/', '[^/]++', 'id', true], ['text', '/manga']], [], [], []],
    'App\Controller\CoverController::voirAnime' => [['mangaId', 'saison'], ['_controller' => 'App\\Controller\\CoverController::voirAnime'], [], [['variable', '/', '[^/]++', 'saison', true], ['variable', '/', '[^/]++', 'mangaId', true], ['text', '/anime']], [], [], []],
    'App\Controller\DownloadController::downloadChapter' => [['chapter'], ['_controller' => 'App\\Controller\\DownloadController::downloadChapter'], [], [['variable', '/', '[^/]++', 'chapter', true], ['text', '/download/chapter']], [], [], []],
    'App\Controller\ErrorController::notFound' => [[], ['_controller' => 'App\\Controller\\ErrorController::notFound'], [], [['text', '/404']], [], [], []],
    'App\Controller\ErrorController::showError' => [[], ['_controller' => 'App\\Controller\\ErrorController::showError'], [], [['text', '/error']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\LoginController::login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\LoginController::logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\MangaController::catalogue' => [[], ['_controller' => 'App\\Controller\\MangaController::catalogue'], [], [['text', '/catalogue/']], [], [], []],
    'App\Controller\ProfileController::index' => [[], ['_controller' => 'App\\Controller\\ProfileController::index'], [], [['text', '/profile']], [], [], []],
];
