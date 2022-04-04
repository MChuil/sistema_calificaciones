<?php 


class DataBase{

    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }

    function conect(){
        try{
            $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db .";charset=" . $this->charset, $this->user, $this->password);
            return $pdo;
        }catch (PDOException $e){
            print_r('Error de conexión: ' . $e->getMessage());
        }
    }

}