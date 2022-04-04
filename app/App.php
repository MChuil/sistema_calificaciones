<?php 

require_once 'Controllers/Errores.php';

class App{

    function __construct()
    {
        echo "<p>Nueva App</p>";

        $url = $_GET['url'];
        $url = rtrim($url. '/');
        $url = explode('/', $url);
        // var_dump($url);

        $homeController = 'Controllers/'. $url[0] . '.php';
        if(file_exists($homeController)){
            
            require_once $homeController;
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