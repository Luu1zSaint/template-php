<?php
return [
    'GET' => [
        '/' => 'HomeController@index',
        '/dashboard' => 'DashboardController@index:auth'

    ],
    'POST' => [
        '/login' => 'LoginController@store'
    ]
];