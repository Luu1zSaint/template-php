<?php

namespace app\controllers;

use app\classes\Session;
use app\models\UserModel;

class DashboardController
{
    public function index()
    {
        viewExecuter('dash');
    }
    
}