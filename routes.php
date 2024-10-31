<?php
//definim les rutes
return [
    '/' => 'App/Controllers/FilmController@index',
    '/index.php' => 'App/Controllers/FilmController@index',
    '/index' => 'App/Controllers/FilmController@index',
    '/home' => 'App/Controllers/FilmController@index',
    '/create' => 'App/Controllers/FilmController@create',
    '/store' => 'App/Controllers/FilmController@store',
    '/edit' => 'App/Controllers/FilmController@edit',
    '/update' => 'App/Controllers/FilmController@update',
    '/delete' => 'App/Controllers/FilmController@delete',
    '/destroy' => 'App/Controllers/FilmController@destroy',
    '/metal' => 'App/Controllers/MetalController@index',
    '/metal/create' => 'App/Controllers/MetalController@create',
    '/metal/store' => 'App/Controllers/MetalController@store',
    '/metal/edit' => 'App/Controllers/MetalController@edit',
    '/metal/update' => 'App/Controllers/MetalController@update',
    '/metal/delete' => 'App/Controllers/MetalController@delete',
    '/metal/destroy' => 'App/Controllers/MetalController@destroy',
];