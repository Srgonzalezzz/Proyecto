<?php 

include_once '../Inc/Header.php';

foreach ($objetoretornado as $a) {}
    

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    


    <link rel="stylesheet" href="../Public/Css/Registro.css">
    <script src="../Public/Js/Registro.js"></script>




 <div class="ui container">
    <form action="UsersController.php" class="ui form" method="POST">
        <div class="three fields">
        <div class="field">
            <input type="hidden" name="action" value="update">
            <label for="">Nombres</label>
            <input type="hidden" name="Id" value="<?php echo $a->Id; ?>">
            <input type="text" name="nombres" value="<?php echo $a->Nombres; ?>" required>
        </div>

        <div class="field">
            <label for="">Apellidos</label>
            <input type="text" name="apellidos"  value="<?php echo $a->Apellidos; ?>" required>
        </div>

        <div class="field">
            <label for="">Ciudad</label>
            <input type="text" name="ciudad"  value="<?php echo $a->Ciudad; ?>"  required>
        </div>

        <div class="field">
            <label for="">Email</label>
            <input type="email" name="email" required value="<?php echo $a->Email; ?>" >
        </div>

        <div class="field">
            <label for="">Edad</label>
            <input type="number" name="edad" required value="<?php echo $a->Edad; ?>" >
        </div>

        <div class="field">
            <label for="">Celular</label>
            <input type="number" name="celular" required value="<?php echo $a->Celular; ?>" >
        </div>

        <div class="field">
            <label for="">Direccion</label>
            <input type="text" name="direccion" required value="<?php echo $a->Direccion; ?>" >
        </div>

        <div class="field">
            <label for="">Contraseña</label>
            <input type="password" name="contrasena" required value="<?php echo $a->Contrasena; ?>" >
        </div>

        </div>
        <div style="color:orange; text-align: center;">
        <button type="submit" class="ui black button">ACTUALIZAR</button>
        </div>
    </form>
</div> 







<?php 

include_once '../Inc/Footer.php';


?>

