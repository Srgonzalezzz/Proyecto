<?php

include_once '../Inc/Header.php';

?>
<link rel="stylesheet" href="../Public/Css/Vv.css">

<?php foreach ($ObjReto as $pr){ ?>
<section class="columns">
<div class="ui container">
  <div class="ui link cards" >
    <div class="card" >
    <div class="header">
        <?php echo $pr->NombreP; ?>
        </div>
      <div class="img">
      <img src="<?php echo $pr->Foto_url;  ?>" width="200px" heigh="200px">
      </div>
      <div class="content">
        <div class="header">
        <?php echo $pr->NombreP; ?>
        </div>
        <div class="Sub">
        <?php echo $pr->Largo;?> x <?php echo $pr->Ancho;?>
        </div>
        <div class="Descripcion">
        <?php echo $pr->Descripcion;?>
        </div>
      </div>
      <div class="extra">
        <span class="right floated"><div class="ui right floated button" onclick="ShowModal(<?php echo $pr->Id;?>)">ACCION</div></span>
      </div>
    </div>
    
  </div>
</div>
</section><br><br>


<?php } ?>


<div class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    Modal Title
  </div>
  <div class="image content">
    <div class="image">
    </div>

    <div class="description" id="modelview">
    </div>

<script>
  function ShowModal(Id){
    $('.ui.modal')
  .modal('show')  

;

$('#modelview').load('ProductoController.php?action=viewproducto&id=' + Id);
  }
  
</script>


