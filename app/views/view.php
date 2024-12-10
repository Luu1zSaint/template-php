<?php

namespace app\views;

use Exception;

class view
{

    private function viewFound(string $view)
    {
        $viewPath = dirname(__FILE__)."/pages/{$view}.php";

        if(!file_exists($viewPath))
        {
            throw new Exception("View '{$view}' not found!");
        }

        return $viewPath;
    }


    public function render(string $view, array $data)
    {
        $viewPath = self::viewFound($view);

        ob_start();
        extract($data);

        require $viewPath;

        $content = ob_get_contents();
        ob_end_clean();

        return $content;
        
    }
}