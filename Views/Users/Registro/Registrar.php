 <!-- <?php 

 //include_once '../Inc/Header.php';

?> 

 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Css/semantic.css">
    <script src="../Public/Js/jquery-3.1.1.min.js"></script>
    <script src="../Public/Js/semantic.js"></script>
    <title>REGISTRAR</title>
</head>
   
    <link rel="stylesheet" href="../Public/Css/Registrar.css">
    

<body>

<form action="UsersController.php" class="ui form" method="POST">


<div class="login-wrapper">
  <div class="login-left">
    <img src="../Public/Img/negocio.jpg">
    <div class="h1">!CLICK AQUI¡ PARA REGISTRARTE</div>
  </div>
  <div class="login-right">
    <div class="h2">CREA TU CUENTA</div>

    <div class="form-group">
    <input type="hidden" name="action" value="registrar">
      <input type="text" name="nombres" placeholder="Nombres" required> 
    </div>

<div class="form-group">
      <input type="text" name="apellidos" placeholder="Apellidos" required>   
    </div>

<div class="form-group">
      <input type="text" name="ciudad" placeholder="Ciudad" required> 
    </div>

    <div class="form-group">
      <input type="email" name="email" placeholder="Email" required>    
    </div>

    <div class="form-group">
      <input type="password" name="contrasena" placeholder="Contraseña" required>  
    </div>


    <div class="form-group">
      <input type="number" name="edad" placeholder="Edad" min="18" max="99" required>    
    </div>


    <div class="form-group">
      <input type="number" name="celular" placeholder="Celular" min="1" required>
    </div>

    <div class="form-group">
      <input type="text" name="direccion" placeholder="Direccion" required>
    </div>

    <div class="checkbox-container">
      <input type="checkbox" required>
      <div class="text-checkbox">Estoy de acuerdo con los términos del servicio.</div>
    </div> 

    <div class="button-area">
 <button type="submit" class="btn btn-primary">REGISTRARSE</button><br>
    </div>
<br>
    <div>
         <p>¿Ya tienes Cuenta?<a href="UsersController.php?action=login">Iniciar Sesion</a></p>
    </div>


    
  </div>
</div>


<form/>

</body>




<script type="text/javascript">
    var openLoginRight = document.querySelector('.h1');
var loginWrapper = document.querySelector('.login-wrapper');

openLoginRight.addEventListener('click', function(){
  loginWrapper.classList.toggle('open'); 
});
</script>





<!-- FORMULARIO ANTIGUO DE SEMANTIC -->
  <!--  <div class="ui container">

 <form action="UsersController.php" class="ui form" method="POST">




        <div class="three fields">
        <div class="field">
            <label for="">Nombres</label>
            <input type="hidden" name="action" value="registrar">
            <input type="text" name="nombres" required>
        </div>
        <div class="field">
            <label for="">Apellidos</label>
            <input type="text" name="apellidos" required>
        </div>
        <div class="field">
            <label for="">Ciudad</label>
            <input type="text" name="ciudad" required>
        </div>
        <div class="field">
            <label for="">Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="field">
            <label for="">Edad</label>
            <input type="number" name="edad" required>
        </div>
        <div class="field">
            <label for="">Celular</label>
            <input type="number" name="celular" required>
        </div>
        <div class="field">
            <label for="">Direccion</label>
            <input type="text" name="direccion" required>
        </div>
        <div class="field">
            <label for="">Contraseña</label>
            <input type="password" name="contrasena" required>
        </div>
        </div>
        <div style="color:orange; text-align: center;">

        <button type="submit" class="ui black button">GUARDAR</button>
        </div>
    </form>
</div>  -->




<!-- 

<?php 

//include_once '../Inc/Footer.php';

?>
 -->
 