<?php
return [
    'GET' => [
        '/' => 'HomeController@index',
        '/dashboard' => 'DashboardController@index:auth',
        '/logout' => 'LogoutController@logout:auth'

    ],
    'POST' => [
        '/login' => 'LoginController@store'
    ]
];