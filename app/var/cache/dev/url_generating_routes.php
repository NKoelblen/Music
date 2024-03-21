<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'ux_entity_autocomplete' => [['alias'], ['_controller' => 'ux.autocomplete.entity_autocomplete_controller'], [], [['variable', '/', '[^/]++', 'alias', true], ['text', '/autocomplete']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'api.tracks.index' => [[], ['_controller' => 'App\\Controller\\API\\TrackController::index'], [], [['text', '/api/tracks']], [], [], []],
    'api.tracks.single' => [['id'], ['_controller' => 'App\\Controller\\API\\TrackController::single'], ['id' => '[0-9]+'], [['variable', '/', '[0-9]+', 'id', true], ['text', '/api/tracks']], [], [], []],
    'admin.albums.index' => [[], ['_controller' => 'App\\Controller\\Admin\\AlbumController::index'], [], [['text', '/admin/albums']], [], [], []],
    'admin.albums.create' => [[], ['_controller' => 'App\\Controller\\Admin\\AlbumController::create'], [], [['text', '/admin/albums/create']], [], [], []],
    'admin.albums.update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AlbumController::update'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/albums']], [], [], []],
    'admin.albums.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AlbumController::delete'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/albums']], [], [], []],
    'admin.artists.index' => [[], ['_controller' => 'App\\Controller\\Admin\\ArtistController::index'], [], [['text', '/admin/artists']], [], [], []],
    'admin.artists.create' => [[], ['_controller' => 'App\\Controller\\Admin\\ArtistController::create'], [], [['text', '/admin/artists/create']], [], [], []],
    'admin.artists.update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArtistController::update'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/artists']], [], [], []],
    'admin.artists.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArtistController::delete'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/artists']], [], [], []],
    'admin.genres.index' => [[], ['_controller' => 'App\\Controller\\Admin\\GenreController::index'], [], [['text', '/admin/genres']], [], [], []],
    'admin.genres.create' => [[], ['_controller' => 'App\\Controller\\Admin\\GenreController::create'], [], [['text', '/admin/genres/create']], [], [], []],
    'admin.genres.update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GenreController::update'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/genres']], [], [], []],
    'admin.genres.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GenreController::delete'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/genres']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\HomeController::index'], [], [['text', '/admin']], [], [], []],
    'admin.playlists.index' => [[], ['_controller' => 'App\\Controller\\Admin\\PlaylistController::index'], [], [['text', '/admin/playlists']], [], [], []],
    'admin.playlists.create' => [[], ['_controller' => 'App\\Controller\\Admin\\PlaylistController::create'], [], [['text', '/admin/playlists/create']], [], [], []],
    'admin.playlists.update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\PlaylistController::update'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/playlists']], [], [], []],
    'admin.playlists.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\PlaylistController::delete'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/playlists']], [], [], []],
    'admin.tracks.index' => [[], ['_controller' => 'App\\Controller\\Admin\\TrackController::index'], [], [['text', '/admin/tracks']], [], [], []],
    'admin.tracks.create' => [[], ['_controller' => 'App\\Controller\\Admin\\TrackController::create'], [], [['text', '/admin/tracks/create']], [], [], []],
    'admin.tracks.update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\TrackController::update'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/tracks']], [], [], []],
    'admin.tracks.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\TrackController::delete'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/tracks']], [], [], []],
    'albums.index' => [[], ['_controller' => 'App\\Controller\\AlbumController::index'], [], [['text', '/albums']], [], [], []],
    'albums.single' => [['slug', 'id'], ['_controller' => 'App\\Controller\\AlbumController::single'], ['slug' => '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'id' => '[0-9]+'], [['variable', '-', '[0-9]+', 'id', true], ['variable', '/', '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'slug', true], ['text', '/albums']], [], [], []],
    'artists.index' => [[], ['_controller' => 'App\\Controller\\ArtistController::index'], [], [['text', '/artists']], [], [], []],
    'artists.single' => [['slug', 'id'], ['_controller' => 'App\\Controller\\ArtistController::single'], ['slug' => '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'id' => '[0-9]+'], [['variable', '-', '[0-9]+', 'id', true], ['variable', '/', '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'slug', true], ['text', '/artists']], [], [], []],
    'genres.index' => [[], ['_controller' => 'App\\Controller\\GenreController::index'], [], [['text', '/genres']], [], [], []],
    'genres.single' => [['slug', 'id'], ['_controller' => 'App\\Controller\\GenreController::single'], ['slug' => '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'id' => '[0-9]+'], [['variable', '-', '[0-9]+', 'id', true], ['variable', '/', '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'slug', true], ['text', '/genres']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'playlists.single' => [['slug', 'id'], ['_controller' => 'App\\Controller\\PlaylistController::single'], ['slug' => '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'id' => '[0-9]+'], [['variable', '-', '[0-9]+', 'id', true], ['variable', '/', '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'slug', true], ['text', '/playlists']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'web.tracks.index' => [[], ['_controller' => 'App\\Controller\\Web\\TrackController::index'], [], [['text', '/web/tracks']], [], [], []],
    'web.tracks.single' => [['slug', 'id'], ['_controller' => 'App\\Controller\\Web\\TrackController::single'], ['slug' => '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'id' => '[0-9]+'], [['variable', '-', '[0-9]+', 'id', true], ['variable', '/', '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'slug', true], ['text', '/web/tracks']], [], [], []],
    'tracks.index' => [[], ['_controller' => 'App\\Controller\\TrackController::index'], [], [['text', '/tracks']], [], [], []],
    'tracks.single' => [['slug', 'id'], ['_controller' => 'App\\Controller\\TrackController::single'], ['slug' => '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'id' => '[0-9]+'], [['variable', '-', '[0-9]+', 'id', true], ['variable', '/', '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'slug', true], ['text', '/tracks']], [], [], []],
    'App\Controller\API\TrackController::index' => [[], ['_controller' => 'App\\Controller\\API\\TrackController::index'], [], [['text', '/api/tracks']], [], [], []],
    'App\Controller\API\TrackController::single' => [['id'], ['_controller' => 'App\\Controller\\API\\TrackController::single'], ['id' => '[0-9]+'], [['variable', '/', '[0-9]+', 'id', true], ['text', '/api/tracks']], [], [], []],
    'App\Controller\Admin\AlbumController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\AlbumController::index'], [], [['text', '/admin/albums']], [], [], []],
    'App\Controller\Admin\AlbumController::create' => [[], ['_controller' => 'App\\Controller\\Admin\\AlbumController::create'], [], [['text', '/admin/albums/create']], [], [], []],
    'App\Controller\Admin\AlbumController::update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AlbumController::update'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/albums']], [], [], []],
    'App\Controller\Admin\AlbumController::delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AlbumController::delete'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/albums']], [], [], []],
    'App\Controller\Admin\ArtistController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\ArtistController::index'], [], [['text', '/admin/artists']], [], [], []],
    'App\Controller\Admin\ArtistController::create' => [[], ['_controller' => 'App\\Controller\\Admin\\ArtistController::create'], [], [['text', '/admin/artists/create']], [], [], []],
    'App\Controller\Admin\ArtistController::update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArtistController::update'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/artists']], [], [], []],
    'App\Controller\Admin\ArtistController::delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArtistController::delete'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/artists']], [], [], []],
    'App\Controller\Admin\GenreController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\GenreController::index'], [], [['text', '/admin/genres']], [], [], []],
    'App\Controller\Admin\GenreController::create' => [[], ['_controller' => 'App\\Controller\\Admin\\GenreController::create'], [], [['text', '/admin/genres/create']], [], [], []],
    'App\Controller\Admin\GenreController::update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GenreController::update'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/genres']], [], [], []],
    'App\Controller\Admin\GenreController::delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GenreController::delete'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/genres']], [], [], []],
    'App\Controller\Admin\HomeController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\HomeController::index'], [], [['text', '/admin']], [], [], []],
    'App\Controller\Admin\PlaylistController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\PlaylistController::index'], [], [['text', '/admin/playlists']], [], [], []],
    'App\Controller\Admin\PlaylistController::create' => [[], ['_controller' => 'App\\Controller\\Admin\\PlaylistController::create'], [], [['text', '/admin/playlists/create']], [], [], []],
    'App\Controller\Admin\PlaylistController::update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\PlaylistController::update'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/playlists']], [], [], []],
    'App\Controller\Admin\PlaylistController::delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\PlaylistController::delete'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/playlists']], [], [], []],
    'App\Controller\Admin\TrackController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\TrackController::index'], [], [['text', '/admin/tracks']], [], [], []],
    'App\Controller\Admin\TrackController::create' => [[], ['_controller' => 'App\\Controller\\Admin\\TrackController::create'], [], [['text', '/admin/tracks/create']], [], [], []],
    'App\Controller\Admin\TrackController::update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\TrackController::update'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/tracks']], [], [], []],
    'App\Controller\Admin\TrackController::delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\TrackController::delete'], ['id' => '[1-9][0-9]*'], [['variable', '/', '[1-9][0-9]*', 'id', true], ['text', '/admin/tracks']], [], [], []],
    'App\Controller\AlbumController::index' => [[], ['_controller' => 'App\\Controller\\AlbumController::index'], [], [['text', '/albums']], [], [], []],
    'App\Controller\AlbumController::single' => [['slug', 'id'], ['_controller' => 'App\\Controller\\AlbumController::single'], ['slug' => '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'id' => '[0-9]+'], [['variable', '-', '[0-9]+', 'id', true], ['variable', '/', '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'slug', true], ['text', '/albums']], [], [], []],
    'App\Controller\ArtistController::index' => [[], ['_controller' => 'App\\Controller\\ArtistController::index'], [], [['text', '/artists']], [], [], []],
    'App\Controller\ArtistController::single' => [['slug', 'id'], ['_controller' => 'App\\Controller\\ArtistController::single'], ['slug' => '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'id' => '[0-9]+'], [['variable', '-', '[0-9]+', 'id', true], ['variable', '/', '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'slug', true], ['text', '/artists']], [], [], []],
    'App\Controller\GenreController::index' => [[], ['_controller' => 'App\\Controller\\GenreController::index'], [], [['text', '/genres']], [], [], []],
    'App\Controller\GenreController::single' => [['slug', 'id'], ['_controller' => 'App\\Controller\\GenreController::single'], ['slug' => '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'id' => '[0-9]+'], [['variable', '-', '[0-9]+', 'id', true], ['variable', '/', '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'slug', true], ['text', '/genres']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\PlaylistController::single' => [['slug', 'id'], ['_controller' => 'App\\Controller\\PlaylistController::single'], ['slug' => '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'id' => '[0-9]+'], [['variable', '-', '[0-9]+', 'id', true], ['variable', '/', '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'slug', true], ['text', '/playlists']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\Web\TrackController::index' => [[], ['_controller' => 'App\\Controller\\Web\\TrackController::index'], [], [['text', '/web/tracks']], [], [], []],
    'App\Controller\Web\TrackController::single' => [['slug', 'id'], ['_controller' => 'App\\Controller\\Web\\TrackController::single'], ['slug' => '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'id' => '[0-9]+'], [['variable', '-', '[0-9]+', 'id', true], ['variable', '/', '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'slug', true], ['text', '/web/tracks']], [], [], []],
    'App\Controller\TrackController::index' => [[], ['_controller' => 'App\\Controller\\TrackController::index'], [], [['text', '/tracks']], [], [], []],
    'App\Controller\TrackController::single' => [['slug', 'id'], ['_controller' => 'App\\Controller\\TrackController::single'], ['slug' => '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'id' => '[0-9]+'], [['variable', '-', '[0-9]+', 'id', true], ['variable', '/', '[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*', 'slug', true], ['text', '/tracks']], [], [], []],
];
