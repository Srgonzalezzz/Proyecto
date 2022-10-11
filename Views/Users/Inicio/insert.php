<?php

include_once '../Inc/Header.php';

?>
<div class="ui container">
<h1> insertar producto</h1>

<form action="ProductoController.php" method="POST" enctype="multipart/form-data" class="ui form">
    <div class="five fields">
        <div class="fiels">
            <input type="hidden" name="action" value="insert">
            <label for="">Descripcion</label>
            <input type="text" name="descripcion" placeholder=""> 
                      
        </div>
        <div class="fiels">
            <label for="">Nombre Producto</label>
            <input type="text" name="nombrep" placeholder="">

        </div>
        <div class="fiels">
            <label for="">Ancho</label>
            <input type="text" name="ancho" placeholder="">

        </div>
        <div class="fiels">
            <label for="">Largo</label>
            <input type="text" name="largo" placeholder="">

        </div>
    </div>

    <div class="four fields">
        <div class="fiels">
            <label for="">Tela</label>
            <input type="text" name="tela" placeholder="">
            
        </div>
        <div class="fiels">
            <label for="">Color Tela</label>
            <input type="text" name="colort" placeholder="">

        </div>
        <div class="fiels">
            <label for="">Color Producto</label>
            <input type="text" name="colorp" placeholder="">

        </div>

        <div class="fiels">
            <label for="">Foto</label>
            <input type="file" name="imagen" accept=".jpg , .png , .gif">
        </div>

        <br>
    </div>
    <button>enviar</button>

</form>
</div>

<?php

include_once '../Inc/Footer.php';

?>

