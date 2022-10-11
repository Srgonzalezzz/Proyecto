

<?php foreach($ObjReto as $pr){} ?>

<div class="ui segment">
  <img class="ui small centered image" src="<?php echo $pr->Foto_url; ?>">
  <p> 
      </p>
</div>

<a onclick="Actualizar(<?php echo $pr->Id; ?>)"><i class="share square outline icon"></i></a>
  <a onclick="BorrarProducto(<?php echo $pr->Id; ?>,
  '<?php echo $pr->Foto; ?>')"><i class="eraser icon"></i></a>

  


<script>
  function BorrarProducto(Id,Foto){
    $('.ui.basic.modal')
    .modal('show')
;

location.href="ProductoController.php?action=delete&id="+Id + "&foto=" +
Foto;
  }

function Actualizar(Id){
    location.href="ProductoController.php?action=update&id=" + Id;



  }

</script>


