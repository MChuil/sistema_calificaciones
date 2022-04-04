<?php 


abstract class Model{

    public abstract function insert();

    public abstract function edit();

    public function __construct()
    {
        $this->db = new DataBase();
    }

    function selectAll($table){
        $stmt = $this->db->prepare("SELECT * FROM $table");
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
    }


    function selectById($table, $id){
        $stmt =  $this->db->prepare("SELECT * FROM $table WHERE id =:id");
        $stmt -> bindParam(":id", $id, PDO::PARAM_INT);
        $stmt-> execute();
        return $stmt->fetch();
        $stmt->close();
    }


    public function selectBy($table, $column, $value){
        $stmt =  $this->db->prepare("SELECT * FROM $table WHERE $column = :value");
        $stmt -> bindParam(":value", $value, PDO::PARAM_STR);
        $stmt-> execute();
        return $stmt->fetchAll();
        $stmt->close();

    }

    function deleteById($table, $id){
        $stmt =  $this->db->prepare("DELETE FROM $table WHERE id =:id");
        $stmt -> bindParam(":id", $id, PDO::PARAM_INT);
        $stmt-> execute();
        if($stmt -> execute()){ 
            return true; 
        }else{ 
            return false; 
        } 
    }

}