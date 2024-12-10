<?php

namespace app\controllers;


class HomeController
{
    public function index()
    {
        viewExecuter('home', [
            'userName' => 'Luizin',
            'userEmail' => 'luizin@gmail.com'
        ]);
    }
}