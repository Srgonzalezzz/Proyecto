<?php

require '../Inc/Header.php';

?>


<h1>Lista de Users Registrados</h1>

<!-- TABLA -->
    <div class="container">
        <br>
           <table class="ui selectable celled table">
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Ciudad</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Celular</th>
                <th>Direccion</th>
                <th>Contrasena</th>
                <th>Acciones</th>
            </tr>

            <?php foreach ($objetoretornado as $a) { ?>
                <tr>
                    <td><?php echo $a->Nombres; ?></td>
                    <td><?php echo $a->Apellidos; ?></td>
                    <td><?php echo $a->Ciudad; ?></td>
                    <td><?php echo $a->Email; ?></td>
                    <td><?php echo $a->Edad; ?></td>
                     <td><?php echo $a->Celular; ?></td>
                    <td><?php echo $a->Direccion; ?></td>
                    <td><?php echo $a->Contrasena; ?></td>
 
                    <td> <a onclick="update(<?php echo $a->Id;?>)" ><button class="ui inverted green button"><i class="edit icon"></i>Actualizar</button></a>

                     <button onclick="borrar(<?php echo $a->Id;?>)" class="ui inverted red button"><i class="trash alternate icon"></i>Borrar</button></td>
                </tr>
                <?php } ?>

          


        </table>
    </div>

<!-- ELIMINAR -->
<script>
	  function borrar(Id) {
            swal({
                    title: "¿Esta seguro que desea borrar?" +Id,
                    text: "El registro no se podra recuperar despues de borrado",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("!El registro se borro con exito¡", {
                            icon: "success",
                        });
                        location.href = "UsersController.php?action=delete&Id=" + Id;
                    } else {
                        swal("El registro no se borro");
                    }
                });
        }



</script>

   <script src="../Public/Js/sweetalert.min.js"></script>
    

<!-- ACTUALIZAR -->
    <script>
function update(Id) {
    location.href="UsersController.php?action=update&Id=" + Id;
}



</script>

<?php

require '../Inc/Footer.php';
?>