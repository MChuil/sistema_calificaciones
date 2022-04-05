<?php 


class Materia extends Controller{

    function __construct()
    {   
        parent::__construct();
        $this->view->title = "Listado de materias";
        $this->view->render('materia/index');
    }

}