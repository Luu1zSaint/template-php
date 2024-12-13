<?php

namespace app\controllers;

use app\classes\Session;
use app\models\UserModel;

class DashboardController
{
    public function index()
    {
        $userData = UserModel::findById(Session::has('id'));
        $dataArray = [];

        foreach ($userData as $key => $value) {
            $dataArray[$key] = $value;
        }
         
        viewExecuter('dash', $dataArray);
    }
    
}