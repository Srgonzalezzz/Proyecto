<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Css/semantic.css">
    <script src="../Public/Js/jquery-3.1.1.min.js"></script>
    <script src="../Public/Js/semantic.js"></script>
    <title>Personalizar</title>
</head>
<div class="ui container">
    <br>
    <h1 style="text-align:center;">PERSONALIZA TU PRODUCTO</h1>

    <body>
        <div id="formulario">
            <form action="Recibirdatos.php" class="ui  form data-post" id="form-data" method="POST">
                <!-- Fila numero uno ¡-->
                <div class="two fields">
                    <div class="field">
                        <label for="">Producto que le interesa:</label>
                        <input type="text" name="ProductoDeInteres" placeholder="Basecama,espaldar,etc">
                    </div>
                    <div class="field">
                        <label for="">Cantidad que desea:</label>
                        <input type="text" name="CantidadQueDesea" placeholder="1 o más">
                    </div>
                </div>

                <!-- Fila numero dos ¡-->
                <h4>Tamaño del producto</h4>
                <div class="two fields">
                    <div class="field">
                        <label for="">Ancho del producto:</label>
                        <input type="text" name="AnchoDeProducto" placeholder="120cm">
                    </div>
                    <div class="field">
                        <label for="">Largor del producto:</label>
                        <input type="text" name="LargorDeproducto" placeholder="190cm">
                    </div>
                </div>


                <!-- Fila numero tres ¡-->
                <div class="two fields">
                    <div class="field">
                        <label for="">Escoja la tela que desea:
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#Muestrario">VER IMAGENES DE LAS TELAS</a> </label>
                        <select name="TelaQueDesea" id="">
                            <option value="Capitoniada">Capitoniada</option>
                            <option value="Anti-Rasguño">Anti-Rasguño</option>
                            <option value="Lisa">Lisa</option>
                            <option value="Cuerina">Cuerina</option>
                            <option value="Impermedable">Impermedable</option>
                            <option value="Capitoniada-Gruesa">Capitoniada Gruesa</option>
                            <option value="Introvertida">Introvertida</option>
                            <option value="Tapizada">Tapizada</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="">Color de la tela:</label>
                        <input type="text" name="ColorDeTela" placeholder="Gris,Negro,Blanco,etc">
                    </div>
                </div>

                <br>

                <!-- Fila numero cuatro ¡-->
                <div class="two fields">
                    <div class="field">
                        <label for="">Color del producto si no coincide con lo que deseas:</label>
                        <input type="text" name="ColorDelProducto">
                    </div>

                    <div class="field">
                        <!-- Fila numero cinco ¡-->
                        <label for="">Coloque aquí si tiene un prototipo como referencia (Opcional):</label>
                        <input type="file" name="PrototipoDeReferencia" accept=".jpg , .png">
                    </div>
                </div>
                <br><br>

                <!-- Fila numero seis ¡-->
                <div class="field">
                    <div class="field">
                        <label for="">Si la información anterior no coincide con lo que necesitas
                            escribe una descripción de lo que quieres:
                        </label>
                        <br>
                        <div class="ui message">
                            <textarea name="Descripcion" rows="2" cols="30" placeholder="ESCRIBE COMO LO QUIERES:"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="field">
                        <label for="">Fecha de de solicitud:</label>
                        <input type="date" name="FechaSolicitud">
                    </div>
                </div>
                <br><br>

                <!-- Fila numero siete, BOTONES ¡-->
                <div class="ui  center aligned container">
                    <div class="large ui buttons">
                        <button type="button" onclick="sendForm()" class="ui inverted primary button">Enviar Datos</button>
                        <button type="reset" class="ui red button">Eliminar Datos Escritos</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Aqui se va a colocar el mensaje con la función "imprimir" de si desea o no imprimir la constancia -->

        <br>
        <!-- Imagenes del mini catalago de variedad de las telas -->
        <h1 style="text-align:center;" id="Muestrario">Muestrario de Telas Disponibles en la Fábrica</h1>

        <div class="ui four cards">
            <div class="card">
                <div class="image">
                    <img src="https://www.persianassafra.com/wp-content/uploads/2021/01/DSC00759.jpg">
                </div>
                <div class="extra">
                    Capitoniada
                    <div class="ui star rating" data-rating="4"></div>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="https://www.persianassafra.com/wp-content/uploads/2021/01/DSC00759.jpg">
                </div>
                <div class="extra">
                    Impermedable:
                    <div class="ui star rating" data-rating="2"></div>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="https://www.persianassafra.com/wp-content/uploads/2021/01/DSC00759.jpg">
                </div>
                <div class="extra">
                    Capitoniada Gruesa:
                    <div class="ui star rating" data-rating="3"></div>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="https://www.persianassafra.com/wp-content/uploads/2021/01/DSC00759.jpg">
                </div>
                <div class="extra">
                    Cuerina:
                    <div class="ui star rating" data-rating="4"></div>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="https://www.persianassafra.com/wp-content/uploads/2021/01/DSC00759.jpg">
                </div>
                <div class="extra">
                    Introvertida:
                    <div class="ui star rating" data-rating="3"></div>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="https://www.persianassafra.com/wp-content/uploads/2021/01/DSC00759.jpg">
                </div>
                <div class="extra">
                    Tapizada:
                    <div class="ui star rating" data-rating="3"></div>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="https://www.persianassafra.com/wp-content/uploads/2021/01/DSC00759.jpg">
                </div>
                <div class="extra">
                    Anti-rasguño:
                    <div class="ui star rating" data-rating="4"></div>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="https://www.persianassafra.com/wp-content/uploads/2021/01/DSC00759.jpg">
                </div>
                <div class="extra">
                    Lisa:
                    <div class="ui star rating" data-rating="4"></div>
                </div>
            </div>
        </div>
        <br>
    </body>
    <!-- Div que esta en el principio(con UI CONTAINER)¡-->
</div>

<!-- Mensaje de la garantia -->
<div class="ui center aligned container floating message">
    <h1>¡¡Todos los Productos Comprados Tienen Una Garantía de 3 años!!</h1>
</div>
<br>
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
            <img src="https://s3.amazonaws.com/images.ecwid.com/images/34029526/1996955136.jpg" class="ui centered medium image">
            <p style="text-align:center;"><br>COPYRIGHT<i class="copyright icon"></i> Nos reservamos los derechos de
                admisión
            </p>
        </div>
    </div>
</div>
<?php
    include('../src/footer.php')
?> 
</html>

<script>
    function printContent(el) {
        var restorepage = $('body').html();
        var printcontent = $('#' + el).clone();
        var enteredtext = $('#text').val();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
        $('#text').html(enteredtext);
    }

    function sendForm(form){
        swal({
                title: "Quieres imprimir comprobante?",
                text: "El comprobante solo se generará en este apartado",
                icon: "warning",
                buttons: ["Cancelar", "Continuar y Imprimir"],
                dangerMode: false,
            })
            .then((printPdf) => {
                if (printPdf) {
                    $("#form-data").submit()
                    printContent('formulario')
                } else {
                    swal("Solo guardaremos la información");
                   
                    $("#form-data").submit()
                }
            });
    }
</script>