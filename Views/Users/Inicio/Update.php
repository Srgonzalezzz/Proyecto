<?php

include_once '../Inc/Header.php';

foreach ($ObjReto as $pr){}

?>
<div class="ui container">
<h1> actualizar producto</h1>

<form action="ProductoController.php" method="POST" enctype="multipart/form-data" class="ui form">
    <div class="five fields">
        <div class="fiels">
        <input type="hidden" name="action" value="update">
            <label for="">Descripcion</label>
            <input type="hidden" name="id" value="<?php echo $pr->Id; ?>">
            <input type="text" name="descripcion" value="<?php echo $pr->Descripcion;?>"> 
                      
        </div>
        <div class="fiels">
            <label for="">Nombre Producto</label>
            <input type="text" name="nombrep" value="<?php echo $pr->NombreP;?>">

        </div>
        <div class="fiels">
            <label for="">Ancho</label>
            <input type="text" name="ancho" value="<?php echo $pr->Ancho;?>">

        </div>
        <div class="fiels">
            <label for="">Largo</label>
            <input type="text" name="largo" value="<?php echo $pr->Largo;?>">

        </div>
    </div>

    <div class="four fields">
        <div class="fiels">
            <label for="">Tela</label>
            <input type="text" name="tela" value="<?php echo $pr->Tela;?>">
            
        </div>
        <div class="fiels">
            <label for="">Color Tela</label>
            <input type="text" name="colort" value="<?php echo $pr->ColorT;?>">

        </div>
        <div class="fiels">
            <label for="">Color Producto</label>
            <input type="text" name="colorp" value="<?php echo $pr->ColorP;?>">

        </div>

        <div class="fiels">
            <img src="<?php echo $pr->Foto_url;?>" alt="mm" whidt="100" height="100">
            <label for="">Foto</label>
            <input type="hideen" name="foto1" value="<?php echo $pr->Foto;?>">
            <input type="hideen" name="foto2" value="<?php echo $pr->Foto_url;?>">
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

