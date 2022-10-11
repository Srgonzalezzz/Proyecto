<?php

include_once '../Inc/Header.php';

include '../Config/conexion.php'; 

$conexion = new conexion();
$conexion->BdConect();


$sql = "SELECT * FROM datospersonalizacion";
$datospersonalizacion = $conexion->stm->prepare($sql);
$datospersonalizacion->execute(); 
$personalizacion = $datospersonalizacion->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Css/semantic.css">
    <script src="../Public/Js/jquery-3.1.1.min.js"></script>
    <script src="../Public/Js/semantic.js"></script>
    <title>Información De las Personalizaciones</title>
</head>

<body>
    <br>
    <h1 style="text-align:center;font-size:4em;">Información Personalización</h1>
    <br>
    <div>
        <table class="ui selectable inverted table">   
            <thead class="">
                <tr>
                    <th>ProductoDeInteres</th>
                    <th>CantidadQueDesea</th>
                    <th>AnchoDeProducto</th>
                    <th>LargorDeproducto</th>
                    <th>TelaQueDesea</th>
                    <th>ColorDeTela</th>
                    <th>ColorDelProducto</th>
                    <th>PrototipoDeReferencia</th>
                    <th>Descripcion</th>
                    <th>FechaSolicitud</th>
                    <th style="text-align:right;">Acción a realizar</th>
                </tr>
            </thead>

            <?php foreach($personalizacion as $a) {  ?>
            <tr>
                <td><?php echo $a->ProductoDeInteres; ?></td>
                <td><?php echo $a->CantidadQueDesea; ?></td>
                <td><?php echo $a->AnchoDeProducto; ?></td>
                <td><?php echo $a->LargorDeproducto; ?></td>
                <td><?php echo $a->TelaQueDesea; ?></td>
                <td><?php echo $a->ColorDeTela; ?></td>
                <td><?php echo $a->ColorDelProducto; ?></td>
                <td><?php echo $a->PrototipoDeReferencia; ?></td>
                <td><?php echo $a->Descripcion; ?></td>
                <td><?php echo $a->FechaSolicitud; ?></td>
                <td style="text-align:right;"><button class="ui inverted red button"
                        onclick="borrar1('<?php echo $a->Id; ?>')">Eliminar</button>

                    <a href="ProcesoActualizar.php?Id=<?php echo $a->Id; ?>"><button
                            class="ui inverted primary button">Actualizar</button></a>
                </td>
            </tr>
            <?php
      }
     ?>
        </table>
        <script src="../sweetalert.min.js"></script>
        <script>
        function borrar1(Id) {
            swal({
                    title: "¿Esta seguro de Eliminar?",
                    text: "El registro se eliminará permanentemente!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("El registro se elimino correctamente!", {
                            icon: "success",
                        });

                        location.href = "Eliminar.php?Id=" + Id
                    } else {
                        swal("Eliminación CANCELADA!");
                    }
                });


        }
        </script>

       <p style="text-align:center; margin-top:5em;"> <a href="Personalizacion.php"><button class=" huge ui inverted blue button">Volver al Formulario</button></a></p>

</body>

</html>