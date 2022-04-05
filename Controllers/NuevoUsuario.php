<?php

class NuevoUsuario extends Controller{


    function __construct()
    {   
        parent::__construct();
        $this->view->title = "Nuevo usuario";
        $this->view->render('user/new');
    }

}