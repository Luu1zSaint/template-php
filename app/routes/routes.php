<?php
return [
    'GET' => [
        '/' => 'HomeController@index',
        '/login' => 'HomeController@index'

    ],
    'POST' => [
        '/login' => 'LoginController@store'
    ]
];