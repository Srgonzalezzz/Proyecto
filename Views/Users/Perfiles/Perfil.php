<?php

require '../Inc/HeaderU.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil</title>
    <link rel="stylesheet" href="./Css/semantic.css">
    <link rel="stylesheet" href="./js/semantic.js">
</head>

<body>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <form method="post" id="perfil">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad">
                    <div class="panel panel-success"><br>
                        <h2 class="panel-title">
                            <i class='glyphicon glyphicon-user'></i>PERFIL DE USUARIO
                        </h2>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 ">
                                    <div id="load_img">
                                    
                                    </div>
                                    <br><br>
                                </div>
                            </div>
                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-condensed">
                                    <tbody>
                                        <tr>
                                            <td class='col-md-3' name="nombres">Nombre:<?php echo $_SESSION['nombres'];?></td>
                                        </tr>
                                        <tr>
                                            <td name="apellidos">Apellidos:<?php echo $_SESSION['apellidos'];?></td>
                                        </tr>
                                        <tr>
                                            <td name="ciudad">Ciudad:<?php echo $_SESSION['ciudad'];?></td>
                                        </tr>
                                        <tr>
                                            <td name="Telefono">Email:<?php echo $_SESSION['email'];?></td>

                                        </tr>
                                        <tr>
                                            <td name="Ubicacion">Edad:<?php echo $_SESSION['edad'];?></td>
                                        </tr>
                                        <tr>
                                            <td name="InfoA">Celular:<?php echo $_SESSION['celular'];?></td>
                                        </tr>

                                        <tr>
                                            <td name="InfoA">Direccion:<?php echo $_SESSION['direccion'];?></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class='col-md-12'></div>
                        </div>
                    </div>
                    <div class="panel-footer text-center">
                  
                    <button  class="sign-in icon"><i class="sign-in icon "><a href="../Controllers/UsersController.php?action=update"></i>
                        Cerrar seccion
                </a></button>
                        
                    </div>

                </div>
        </div>
        </form>
    </div>
    

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>
<?php

require '../Inc/Footer.php';

?>