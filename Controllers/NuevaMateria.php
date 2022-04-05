<?php 

class NuevaMateria extends Controller{


    function __construct()
    {
        parent::__construct();
        $this->view->title = "Nueva materia";
        $this->view->render('materia/new');
    }
}