<?php 


class Controller{

    function __construct()
    {   
        // echo "<p>Controlador base...</p>";
        $this->view = new View();
        
    }

    function loadModel($model){

        $url = 'Models/' . $model  . 'Model.php';
        if(file_exists($url)){
            require $url;
            $modelName = $model . 'Model.php';
            $this->model = new $modelName();
        }
    }
    
}