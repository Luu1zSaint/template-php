<?php

namespace app\controllers;

class LoginController
{
    public function index() {
        viewExecuter('login', ['userName' => 'Luiz']);
    }
}