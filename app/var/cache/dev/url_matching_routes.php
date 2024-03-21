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
        '/api/tracks' => [[['_route' => 'api.tracks.index', '_controller' => 'App\\Controller\\API\\TrackController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/albums' => [[['_route' => 'admin.albums.index', '_controller' => 'App\\Controller\\Admin\\AlbumController::index'], null, null, null, false, false, null]],
        '/admin/albums/create' => [[['_route' => 'admin.albums.create', '_controller' => 'App\\Controller\\Admin\\AlbumController::create'], null, null, null, false, false, null]],
        '/admin/artists' => [[['_route' => 'admin.artists.index', '_controller' => 'App\\Controller\\Admin\\ArtistController::index'], null, null, null, false, false, null]],
        '/admin/artists/create' => [[['_route' => 'admin.artists.create', '_controller' => 'App\\Controller\\Admin\\ArtistController::create'], null, null, null, false, false, null]],
        '/admin/genres' => [[['_route' => 'admin.genres.index', '_controller' => 'App\\Controller\\Admin\\GenreController::index'], null, null, null, false, false, null]],
        '/admin/genres/create' => [[['_route' => 'admin.genres.create', '_controller' => 'App\\Controller\\Admin\\GenreController::create'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\HomeController::index'], null, null, null, false, false, null]],
        '/admin/playlists' => [[['_route' => 'admin.playlists.index', '_controller' => 'App\\Controller\\Admin\\PlaylistController::index'], null, null, null, false, false, null]],
        '/admin/playlists/create' => [[['_route' => 'admin.playlists.create', '_controller' => 'App\\Controller\\Admin\\PlaylistController::create'], null, null, null, false, false, null]],
        '/admin/tracks' => [[['_route' => 'admin.tracks.index', '_controller' => 'App\\Controller\\Admin\\TrackController::index'], null, null, null, false, false, null]],
        '/admin/tracks/create' => [[['_route' => 'admin.tracks.create', '_controller' => 'App\\Controller\\Admin\\TrackController::create'], null, null, null, false, false, null]],
        '/albums' => [[['_route' => 'albums.index', '_controller' => 'App\\Controller\\AlbumController::index'], null, null, null, false, false, null]],
        '/artists' => [[['_route' => 'artists.index', '_controller' => 'App\\Controller\\ArtistController::index'], null, null, null, false, false, null]],
        '/genres' => [[['_route' => 'genres.index', '_controller' => 'App\\Controller\\GenreController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/web/tracks' => [[['_route' => 'web.tracks.index', '_controller' => 'App\\Controller\\Web\\TrackController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tracks' => [[['_route' => 'tracks.index', '_controller' => 'App\\Controller\\TrackController::index'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|utocomplete/([^/]++)(*:227)'
                    .'|pi/tracks/([0-9]+)(*:253)'
                    .'|dmin/(?'
                        .'|a(?'
                            .'|lbums/([1-9][0-9]*)(?'
                                .'|(*:295)'
                            .')'
                            .'|rtists/([1-9][0-9]*)(?'
                                .'|(*:327)'
                            .')'
                        .')'
                        .'|genres/([1-9][0-9]*)(?'
                            .'|(*:360)'
                        .')'
                        .'|playlists/([1-9][0-9]*)(?'
                            .'|(*:395)'
                        .')'
                        .'|tracks/([1-9][0-9]*)(?'
                            .'|(*:427)'
                        .')'
                    .')'
                    .'|lbums/([A-Za-z0-9]+(?:-[A-Za-z0-9]+)*)\\-([0-9]+)(*:485)'
                    .'|rtists/([A-Za-z0-9]+(?:-[A-Za-z0-9]+)*)\\-([0-9]+)(*:542)'
                .')'
                .'|/genres/([A-Za-z0-9]+(?:-[A-Za-z0-9]+)*)\\-([0-9]+)(*:601)'
                .'|/playlists/([A-Za-z0-9]+(?:-[A-Za-z0-9]+)*)\\-([0-9]+)(*:662)'
                .'|/web/tracks/([A-Za-z0-9]+(?:-[A-Za-z0-9]+)*)\\-([0-9]+)(*:724)'
                .'|/tracks/([A-Za-z0-9]+(?:-[A-Za-z0-9]+)*)\\-([0-9]+)(*:782)'
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
        227 => [[['_route' => 'ux_entity_autocomplete', '_controller' => 'ux.autocomplete.entity_autocomplete_controller'], ['alias'], null, null, false, true, null]],
        253 => [[['_route' => 'api.tracks.single', '_controller' => 'App\\Controller\\API\\TrackController::single'], ['id'], ['GET' => 0], null, false, true, null]],
        295 => [
            [['_route' => 'admin.albums.update', '_controller' => 'App\\Controller\\Admin\\AlbumController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin.albums.delete', '_controller' => 'App\\Controller\\Admin\\AlbumController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        327 => [
            [['_route' => 'admin.artists.update', '_controller' => 'App\\Controller\\Admin\\ArtistController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin.artists.delete', '_controller' => 'App\\Controller\\Admin\\ArtistController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        360 => [
            [['_route' => 'admin.genres.update', '_controller' => 'App\\Controller\\Admin\\GenreController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin.genres.delete', '_controller' => 'App\\Controller\\Admin\\GenreController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        395 => [
            [['_route' => 'admin.playlists.update', '_controller' => 'App\\Controller\\Admin\\PlaylistController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin.playlists.delete', '_controller' => 'App\\Controller\\Admin\\PlaylistController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        427 => [
            [['_route' => 'admin.tracks.update', '_controller' => 'App\\Controller\\Admin\\TrackController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin.tracks.delete', '_controller' => 'App\\Controller\\Admin\\TrackController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        485 => [[['_route' => 'albums.single', '_controller' => 'App\\Controller\\AlbumController::single'], ['slug', 'id'], null, null, false, true, null]],
        542 => [[['_route' => 'artists.single', '_controller' => 'App\\Controller\\ArtistController::single'], ['slug', 'id'], null, null, false, true, null]],
        601 => [[['_route' => 'genres.single', '_controller' => 'App\\Controller\\GenreController::single'], ['slug', 'id'], null, null, false, true, null]],
        662 => [[['_route' => 'playlists.single', '_controller' => 'App\\Controller\\PlaylistController::single'], ['slug', 'id'], null, null, false, true, null]],
        724 => [[['_route' => 'web.tracks.single', '_controller' => 'App\\Controller\\Web\\TrackController::single'], ['slug', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        782 => [
            [['_route' => 'tracks.single', '_controller' => 'App\\Controller\\TrackController::single'], ['slug', 'id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
