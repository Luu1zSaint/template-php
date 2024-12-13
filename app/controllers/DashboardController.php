<?php

namespace app\controllers;

class DashboardController
{
    public function index()
    {
        viewExecuter('dash');
    }
    
}