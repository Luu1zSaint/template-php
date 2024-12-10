<?php

use app\classes\Router;
use app\views\view;

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
function viewExecuter(string $view, array $data = [])
{
    try
    {
        $obView= new view;
        echo $obView->render($view, $data);
    }
    catch(Throwable $th)
    {
        var_dump($th->getMessage());
    }
}