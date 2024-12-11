<?php

use app\classes\Router;
use app\classes\Session;
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
function flash(string $index)
{
    $msg = Session::getFlash($index);

    return "<p>{$msg}</p>";
}
function redirect(string $to)
{
    return header('Location: '.$to);
}