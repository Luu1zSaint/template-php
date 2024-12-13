<?php

namespace app\controllers;

use app\classes\Session;

class LogoutController
{
    public function logout()
    {
       Session::desdroy();
       redirect('/'); 
    }
}