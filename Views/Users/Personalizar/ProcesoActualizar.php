<?php
include_once '../Inc/Header.php';

include '../Config/conexion.php'; 

$conexion = new conexion();
$conexion-> BdConect();
$sql = "SELECT * FROM datospersonalizacion where Id=". $_GET['Id'];
$datospersonalizacion = $conexion->stm->prepare($sql);
$datospersonalizacion->execute(); 
$personalizacion = $datospersonalizacion->fetchAll(PDO::FETCH_OBJ);


foreach ($personalizacion as $a) {}


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
    <title>Actualizar</title>
</head>
<div class="ui container">
    <br>
    <h1 style="text-align:center;">ACTUALIZA TU PERSONALIZACIÓN</h1>

    <body>
        <form action="Actualizar.php" class="ui form" method="POST">
            <!-- Fila numero uno ¡-->
            <div class="two fields">
                <div class="field">
                    <label for="">Producto que le interesa:</label>
                    <input type="hidden" name="Id" value="<?php echo $a->Id; ?>">
                    <input type="text" name="ProductoDeInteres" value="<?php echo $a->ProductoDeInteres; ?>"
                        placeholder="Basecama,espaldar,etc">
                </div>
                <div class="field">
                    <label for="">Cantidad que desea:</label>
                    <input type="text" name="CantidadQueDesea" value="<?php echo $a->CantidadQueDesea; ?>"
                        placeholder="1 o más">
                </div>
            </div>

            <!-- Fila numero dos ¡-->
            <h4>Tamaño del producto</h4>
            <div class="two fields">
                <div class="field">
                    <label for="">Ancho del producto:</label>
                    <input type="text" name="AnchoDeProducto" value="<?php echo $a->AnchoDeProducto; ?>"
                        placeholder="120cm">
                </div>
                <div class="field">
                    <label for="">Largor del producto:</label>
                    <input type="text" name="LargorDeproducto" value="<?php echo $a->LargorDeproducto; ?>"
                        placeholder="190cm">
                </div>
            </div>


            <!-- Fila numero tres ¡-->
            <div class="two fields">
                <div class="field">
                    <label for="">Escoja la tela que desea:</label>
                    <select name="TelaQueDesea" value="<?php echo $a->TelaQueDesea; ?>" id="">
                        <option value="Capitoniada">Capitoniada</option>
                        <option value="Anti-Rasguño">Anti-Rasguño</option>
                        <option value="Lisa">Lisa</option>
                        <option value="Cuerina">Cuerina</option>
                    </select>
                </div>
                <div class="field">
                    <label for="">Color de la tela:</label>
                    <input type="text" name="ColorDeTela" value="<?php echo $a->ColorDeTela; ?>"
                        placeholder="Gris,Negro,Blanco,etc">
                </div>
            </div>

            <br>

            <!-- Fila numero cuatro ¡-->
            <div class="two fields">
                <div class="field">
                    <label for="">Color del producto si no coincide con lo que deseas:</label>
                    <input type="text" name="ColorDelProducto" value="<?php echo $a->ColorDelProducto; ?>">
                </div>

                <div class="field">
                    <!-- Fila numero cinco ¡-->
                    <label for="">Coloque aquí si tiene un prototipo como referencia (Opcional):</label>
                    <input type="file" name="PrototipoDeReferencia" value="<?php echo $a->PrototipoDeReferencia; ?>">
                </div>
            </div>
            <br><br>

            <!-- Fila numero seis ¡-->
            <div class="field">
                <div class="field">
                    <label for="">Si la información anterior no coincide con lo que necesitas
                        escribe una descripción de lo que quieres:
                    </label>
                    <br>
                    <div class="ui message">
                        <textarea name="Descripcion" rows="2" cols="30"
                            placeholder="Si Deseas Cambiar Tu Descripcion Acá Lo Puedes Hacer"></textarea>
                    </div>
                    <br>
                    <div class="field">
                        <label for="">Fecha de de solicitud:</label>
                        <input type="date" name="FechaSolicitud" value="<?php echo $a->FechaSolicitud; ?>">
                    </div>
                </div>
                <br><br>

                <!-- Fila numero siete BOTONES ¡-->
                <div class="ui  center aligned container">
                    <div class="large ui buttons">
                        <button type="submit" class="ui inverted primary button">Actualizar Datos</button>
                        <button type="reset" class="ui red button">Eliminar Datos Escritos</button>
                    </div>
                </div>
                <br>
        </form>
    </body>
    <!-- Div que esta en el principio(con UI CONTAINER)¡-->
</div>

</html>