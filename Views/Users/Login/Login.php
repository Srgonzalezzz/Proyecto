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
    <title>LOGIN</title>
</head>
   
    <link rel="stylesheet" href="../Public/Css/Login.css">
    

<body>

<form action="UsersController.php" class="ui form" method="POST">



<div class="login-wrapper">
  <div class="login-left">
    <img src="../Public/Img/negocio.jpg">
    <div class="h1">!CLICK AQUI¡ PARA INICIAR SESION</div>
  </div>
  <div class="login-right">
    <div class="h2">INICIA SESION</div>


    <div class="form-group">
    <input type="hidden" name="action" value="login">
      <input type="email" name="email" placeholder="Email" required> 
    </div>

    <div class="form-group">
      <input type="password" name="contrasena" placeholder="Password" required>
    </div>

    <div class="button-area">
      <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
    </div>

    <br>
    <div>
         <p>¿No tienes Cuenta?<a href="UsersController.php?action=registrar">Crea tu cuenta aqui!</a></p>
    </div>

  </div>
</div>

</form>


</body>

<script type="text/javascript">
    var openLoginRight = document.querySelector('.h1');
var loginWrapper = document.querySelector('.login-wrapper');

openLoginRight.addEventListener('click', function(){
  loginWrapper.classList.toggle('open'); 
});
</script>

<!-- FORMULARIO ANTIGUO DE SEMANTIC -->
<!--  
<div class="ui container">
    <form action="UsersController.php" class="ui form" method="POST">

        <div class="two fields">
        <div class="field">
            <label for="">Email</label>
            <input type="hidden" name="action" value="login">
            <input type="text" name="email" required>
        </div>
        
        <div class="field">
            <label for="">Contraseña</label>
            <input type="password" name="contrasena" required>
        </div>
        </div>
        <div style="color:orange; text-align: center;">
        <button type="submit" class="ui black button">IR AL SISTEMA</button>
        </div>
    </form>
</div>

<?php 

//include_once '../Inc/Footer.php';

?> -->