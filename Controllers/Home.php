<?php 

    class Home extends Controller{
        function __construct()
        {
            parent::__construct();
            echo "<p>Controlador 'Home'...</p>";
        }   

        function saludo(){
            echo "<p>ejecutaste el metodo Saludo()</p>";
        }
    }