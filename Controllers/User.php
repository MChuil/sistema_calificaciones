<?php 


class User extends Controller{

    function __construct()
    {   
        parent::__construct();
        $this->view->title = "Listado de usuarios";
        $this->view->render('user/index');
    }

}