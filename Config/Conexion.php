<?php


class Conexion{
     //statement
    public $stm;
    //METODOS MAGICOS GET, SET, METODOS CONTRUCTORES, METODOS DESTRUCTORES
    public function __construct()
    {
        try{
            $this->stm = new PDO("mysql:host=localhost;dbname=colven",'root','');

        }catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
}


?>