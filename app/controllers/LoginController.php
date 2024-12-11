<?php

namespace app\controllers;

use app\classes\Session;

class LoginController
{
    public function index() {
        viewExecuter('login');
    }

    public function store() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($email) || empty($password))
        {
            Session::set('emptyFields', 'Complete all fields!');
            redirect('/');
            exit;
        }
    }


}