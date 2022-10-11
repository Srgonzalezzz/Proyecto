<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Css/semantic.css">
       <link rel="stylesheet" href="../Public/Css/Header.css">
    <script src="../Public/Js/jquery-3.1.1.min.js"></script>
    <script src="../Public/Js/semantic.js"></script>    
    <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <title>Header</title>
</head>

<body>



<!--barra de navegacion-->
<div class="ui grey four item inverted segment menu">
    
    <a href="UsersController.php?action=inicio" class="item" >Catalogo<i class="hand point left icon"></i></a>

    <div class="ui dropdown item">
        Contactos
    <i class="phone icon"></i>
    </div>

    <a href="UsersController.php?action=personalizar" class="item" >Personalización<i class="hand point left icon"></i></a>

    <div class="ui dropdown item">
        Agregar Producto
        <i class="dropdown icon"></i>
        <div class="menu">
            <a href="ProductoController.php?action=insert" class="item" id="">Formulario</a>
            <a href="ProductoController.php?action=view" class="item" id="">Lista Productos</a>
        </div>
    
    </div>
          
</div>
  










