<?php 

require_once 'Controllers/Errores.php';

class App{

    function __construct()
    {
        // echo "<p>Nueva App</p>";

        $url = !empty($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url. '/');
        $url = explode('/', $url);
        // var_dump($url);
        if(empty($url[0])){
            $defaultController = 'Controllers/home.php';
            require_once $defaultController;
            $controller = new Home();
            return false;
        }
        
        $selectController = 'Controllers/'. $url[0] . '.php';
        if(file_exists($selectController)){
            
            require_once $selectController;
            $controller = new $url[0];
            
            if(!empty($url[1])){
                $controller->{$url[1]}();
            }
            
        }else{
            
            $error = new Errores();
            return;

        }
    }

}