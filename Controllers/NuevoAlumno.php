<?php

class NuevoAlumno extends Controller{


    function __construct()
    {   
        parent::__construct();
        $this->view->title = "Nuevo alumno";
        $this->view->render('student/new');
    }

}