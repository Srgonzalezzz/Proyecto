<?php

$Id = $_GET['Id'];

include '../Config/conexion.php'; 


$conexion = new conexion();
$conexion-> BdConect();

$sql  = "DELETE FROM datospersonalizacion WHERE Id=". $Id;
$borrar = $conexion->stm->prepare($sql);
$borrar->execute(); 

header("location:  ProcesoEliminar.php");


?>