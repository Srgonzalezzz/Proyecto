<?php 
class Conexion{
        
    //stament
    public $stm;
    //metodos magicos get and set, contructores, destructores
    public function __construct()
    {
        try {
           $this->stm = new PDO("mysql:host=localhost;dbname=producto",'root','');
        } catch (PDOException $error) {
            echo $error->getMessage();
           
        }
    }
}

?>
