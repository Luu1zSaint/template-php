<?php
return [
    'GET' => [
        '/' => 'HomeController@index',
        '/dashboard' => 'DashboardController@index'

    ],
    'POST' => [
        '/login' => 'LoginController@store'
    ]
];