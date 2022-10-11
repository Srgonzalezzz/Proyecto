<?php

class conexion{
            //statement
    public $stm;

    public function BdConect()
    {
        try{
            $this->stm = new PDO("mysql:host=localhost;
            dbname=diego",'root','');

        }catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
}

?>