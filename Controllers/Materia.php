<?php 


class Materia extends Controller{

    function __construct()
    {   
        parent::__construct();
        $this->view->render('materia/index');
    }

}