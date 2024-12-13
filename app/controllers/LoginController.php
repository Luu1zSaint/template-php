<?php

namespace app\controllers;

use app\classes\AuthService;
use app\classes\Session;

class LoginController
{
    public function index() {
        viewExecuter('login');
    }

    public function store() {
        $email = AuthService::sanitizeString($_POST['email']);
        $password = $_POST['password'];

        if(empty($email) || empty($password))
        {
            Session::set('emptyFields', 'Complete all fields!');
            redirect('/');
            exit;
        }
        
        $user = AuthService::authenticate($email, md5($password));

        if($user){
            
            Session::set('login', true);
            unset($user->password);
            Session::set('id', $user->id);
            
            return redirect('/dashboard');

        }else{
            Session::set('invalidUser', 'User not found!');
            redirect('/');
            exit;
        }
    }


}