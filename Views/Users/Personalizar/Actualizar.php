<?php 

$Id=$_POST['Id'];
$ProductoDeInteres=$_POST['ProductoDeInteres'];
$CantidadQueDesea=$_POST['CantidadQueDesea'];
$AnchoDeProducto=$_POST['AnchoDeProducto'];
$LargorDeproducto=$_POST['LargorDeproducto'];
$TelaQueDesea=$_POST['TelaQueDesea'];
$ColorDeTela=$_POST['ColorDeTela'];
$ColorDelProducto=$_POST['ColorDelProducto'];
$PrototipoDeReferencia=$_POST['PrototipoDeReferencia'];
$Descripcion=$_POST['Descripcion'];
$FechaSolicitud=$_POST['FechaSolicitud'];


include '../Config/conexion.php'; 

$conexion = new conexion();
$conexion-> BdConect();


$Sql  ="UPDATE datospersonalizacion SET ProductoDeInteres='$ProductoDeInteres', CantidadQueDesea='$CantidadQueDesea', AnchoDeProducto='$AnchoDeProducto',
 LargorDeproducto='$LargorDeproducto',TelaQueDesea='$TelaQueDesea',ColorDeTela='$ColorDeTela',ColorDelProducto='$ColorDelProducto',
 PrototipoDeReferencia='$PrototipoDeReferencia',Descripcion='$Descripcion',FechaSolicitud='$FechaSolicitud'
  WHERE Id='$Id'";



$insertar = $conexion->stm->prepare($Sql);
$insertar->execute();    

header("Location: ProcesoEliminar.php");

?>