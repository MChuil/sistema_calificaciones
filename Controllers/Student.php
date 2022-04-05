<?php 


class Student extends Controller{

    function __construct()
    {   
        parent::__construct();
        $this->view->title = "Listado de alumnos";
        $this->view->render('student/index');
    }
}