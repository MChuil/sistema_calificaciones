<?php

class NuevoGrupo extends Controller{


    function __construct()
    {   
        parent::__construct();
        $this->view->title = "Nuevo grupo";
        $this->view->render('group/new');
    }

}