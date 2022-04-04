<?php 

    class Home extends Controller{
        function __construct()
        {
            parent::__construct();
            $this->view->render('home/index');
            // echo "<p>Controlador 'Home'...</p>";
        }   

        function saludo(){
            echo "<p>ejecutaste el metodo Saludo()</p>";
        }
    }