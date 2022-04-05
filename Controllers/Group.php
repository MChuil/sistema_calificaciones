<?php 


class Group extends Controller{

    function __construct()
    {   
        parent::__construct();
        $this->view->title = "Listado de grupos";
        $this->view->render('group/index');
    }
}