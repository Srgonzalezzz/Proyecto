 <?php 

include_once '../Inc/HeaderP.php';

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
    <title>LOGIN</title>
</head>
   
    <link rel="stylesheet" href="../Public/Css/pp.css">
    

    <div class="columns1">
        <div class="column1">
       <h2>Misión</h2> 
       <span>Ofrecer a los clientes, productos y servicios en muebles de calidad y gran variedad, precios competitivos, 
           asesoría, entrega puntual y servicios post-venta, apoyados en una excelente plataforma humana y tecnológica, 
           garantizando la satisfacción del cliente y la rentabilidad de la empresa.</span>

           <div class="column1">
               <h2>Visión</h2>
               <span>Mantener el liderazgo del mercado nacional de muebles de oficina e institucional, mediante productos y 
servicios de alta calidad, personal competente y tecnología de vanguardia, para agregar valor a nuestros 
clientes, proveedores, empleados y accionistas.</span>
</div>

<div class="column1">
<h2>Valores</h2>
<ul class="list">
    <li>Tradición</li>
    <li>Compromiso</li>
    <li>Actitud Proactiva</li>
    <li>Excelencia en el Servicio</li>
    <li>Trabajo en Equipo</li>
</ul>
</div>

        </div>

    </div>





<!-- Footer de la pagína -->
<div class="ui blue inverted vertical footer segment form-page">
    <div class="ui   vertical footer segment">
        <div class="ui  center aligned container">

            <div class="ui stackable grid">

                <!-- Direccion del footer -->
                <div class="four wide column">
                    <h4 class="ui header">¿Donde Nos Encontramos?</h4>
                    <div class="ui link list">
                        <a class="item" href="">Barrio Playa Rica</a>
                        <a class="item" href="">Cra 63a</a>
                        <a class="item" href="">#65-78</a>
                        <a class="item" href="">Alcobas Colven Jh</a>
                    </div>
                </div>

                <!-- Mensaje de somos Fabricantes del Footer -->
                <div class="four wide column">
                    <h4 class="ui header">Somos Fabricantes</h4>
                    <div class="ui link list">
                        <a class="item" href="">Precios de Fabrica</a>
                        <a class="item" href="">Promociones</a>
                        <a class="item" href="">Bajos Costos</a>
                        <a class="item" href="">Excelente Calidad</a>
                    </div>
                </div>

                <!-- Botones de redes sociales  -->
                <div class="five wide right floated column">
                    <b>¡TENER EN CUENTA! <br><br> Si no solucionaste tu necesidad comunicate con
                        la lineas disponibles que
                        aparecen en pantalla</b>
                    <br>
                    <a href=""> <button type="" class="ui circular facebook icon button">
                            <i class="facebook icon"></i>acebook
                        </button></a>
                    <a href=""> <button type="" class="ui circular green WhatsApp icon button">
                            <i class="whatsapp icon"></i>WhatsApp
                        </button></a>
                    <a href=""> <button type="" class="ui circular pink instagram icon button">
                            <i class="instagram icon"></i>Instagram
                        </button></a>
                </div>
            </div>

            <!-- Donde se divide el Footer y esta el logo y los derechos de admisión -->
            <div class="ui section divider"></div>
            <img src="https://s3.amazonaws.com/images.ecwid.com/images/34029526/1996955136.jpg"
                class="ui centered medium image">
            <p style="text-align:center;">COPYRIGHT<i class="copyright icon"></i> Nos reservamos los derechos de
                admisión
            </p>
        </div>
    </div>
</div>










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