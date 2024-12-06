<?php

use app\classes\Router;

function routerExecute()
    {
        try
        {
            $routes = require __DIR__.'/../routes/routes.php';
            $obRouter = new Router;
            $obRouter->execute($routes);
        }
        catch(Throwable $th)
        {
            var_dump($th->getMessage());
        }
    }