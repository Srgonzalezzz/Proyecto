<?php 

//Recibiendo los datos del formulario

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


//Agregando la información enviada del formulario a la BD

$Sql ="INSERT INTO datospersonalizacion(ProductoDeInteres,CantidadQueDesea,AnchoDeProducto,
LargorDeproducto,TelaQueDesea,ColorDeTela,ColorDelProducto,PrototipoDeReferencia,Descripcion,
FechaSolicitud)
VALUES ('$ProductoDeInteres', '$CantidadQueDesea', '$AnchoDeProducto', '$LargorDeproducto','$TelaQueDesea', '$ColorDeTela',
'$ColorDelProducto','$PrototipoDeReferencia','$Descripcion','$FechaSolicitud')";

$insertar = $conexion->stm->prepare($Sql);
$insertar->execute();    


header("location:  ProcesoEliminar.php");

?>