<?php
//PROTEGER...
class User{
    protected $Id;
    protected $Nombres;
    protected $Apellidos;
    protected $Ciudad;
    protected $Email;
    protected $Edad;
    protected $Celular;
    protected $Direccion;
    protected $Contrasena;



//BASE DE DATOS
public function GuardarUserEnBD()
{
    //LLAMAR CONEXION
    include_once '../Config/Conexion.php';
    $conexion = new Conexion();
    //DATOS DE LA BASE DE DATOS----- VALUES EVITAR HACKERS
    $sql = "INSERT INTO users(Nombres,Apellidos,Ciudad,Email,Edad,Celular,Direccion,Contrasena)VALUES(?,?,?,?,?,?,?,?)";
    //PREPARAR BASE DE DATOS
    $insertar = $conexion->stm->prepare($sql);
    //EXPLICAR QUE ES EL VALOR DE VALUE
    $insertar -> bindParam(1,$this->Nombres);
    $insertar -> bindParam(2,$this->Apellidos);
    $insertar -> bindParam(3,$this->Ciudad);
    $insertar -> bindParam(4,$this->Email);
    $insertar -> bindParam(5,$this->Edad);
    $insertar -> bindParam(6,$this->Celular);
    $insertar -> bindParam(7,$this->Direccion);
    $insertar -> bindParam(8,$this->Contrasena);
    //INSERTAR RESULTADO
    $insertar -> execute();
}
public function TraerUsuarioDeLaBd()
{
    //LLAMAR CONEXION
    include_once '../Config/Conexion.php';
    $conexion = new Conexion();
    //VERIFICAR DATOS Y MOSTRAR TODOS LOS DATOS
    $sql = "SELECT * FROM users WHERE Email='$this->Email'";
    $consultar = $conexion->stm->prepare($sql);
    $consultar->execute();
    $usuarioobjeto = $consultar->fetchAll(PDO::FETCH_OBJ);
    return $usuarioobjeto;
}


//NUEVA FUNCION PARA SELECCCIONAR LA TABLA DE LA BASE DE DATOS Y QUE VAYA AL LISTADO
protected function SearchAll()
{
include_once '../Config/Conexion.php';
$conexion = new Conexion();
$sql= "SELECT* FROM users";
$mostrar = $conexion->stm->prepare($sql);
$mostrar->execute();
 $objetoretornado = $mostrar->fetchAll(PDO::FETCH_OBJ);
 return $objetoretornado;
}



//ELIMINAR DE LA BASE DE DATOS POR MEDIO DEL ID 
protected function borrar()
{
   include_once '../Config/Conexion.php'; 
    $conexion= new Conexion();
    $sql ="DELETE FROM users WHERE Id='$this->Id'";
    $delete=$conexion->stm->prepare($sql);
    $delete->execute();
}


//ACTUALIZAR
protected function SearchAll2()
{
include_once '../Config/Conexion.php';
$conexion = new Conexion();
$sql= "SELECT* FROM users WHERE Id='$this->Id'";
$mostrar = $conexion->stm->prepare($sql);
$mostrar->execute();
 $objetoretornado = $mostrar->fetchAll(PDO::FETCH_OBJ);
 return $objetoretornado;
}


//ACTUALIZAR
protected function update()
{
  include_once '../Config/Conexion.php';
$conexion = new Conexion();
$sql= "UPDATE users SET Nombres ='$this->Nombres',Apellidos ='$this->Apellidos',Ciudad ='$this->Ciudad',Email ='$this->Email', Edad ='$this->Edad', Celular ='$this->Celular' , Direccion ='$this->Direccion', Contrasena ='$this->Contrasena' WHERE Id='$this->Id'";
$update = $conexion->stm->prepare($sql);
$update->execute();

}
}

?>