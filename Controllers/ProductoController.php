<?php 

include_once '../Models/Producto.php';

class ProductosController extends Producto{
//VISTAS INSERTAR
    public function VistaInsert()
    {
        include_once '../Views/Users/Inicio/insert.php';
    }
//VISTA DE FORMULARIO
    public function GuardarFormulario($descripcion,$nombrep,$ancho,$largo,$tela,$colort,$colorp,$foto,$fotourl)
    {
        $this->descripcion = $descripcion;
        $this->nombrep = $nombrep;
        $this->ancho =$ancho;
        $this->largo=$largo;
        $this->tela=$tela;
        $this->colort=$colort;
        $this->colorp=$colorp;
        $this->foto=$foto;
        $this->foto_url=$fotourl;

        $this->InsertProducto();

        $this->Redirect();
    }
    public function UpdateFormulario($id,$descripcion,$nombrep,$ancho,$largo,$tela,$colort,$colorp,$foto,$fotourl)
    {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->nombrep = $nombrep;
        $this->ancho =$ancho;
        $this->largo=$largo;
        $this->tela=$tela;
        $this->colort=$colort;
        $this->colorp=$colorp;
        $this->foto=$foto;
        $this->foto_url=$fotourl;

        $this->UpdateProducto();

        $this->Redirect();
    }
//REDIRECCION
    public function Redirect()
    {
        header("location: ProductoController.php?action=view");
    }
//VISTA DE PRODUCTOS
    public function VistaLista()
    {
        $ObjReto = $this-> SearchAllProducto();
        include_once '../Views/Users/Inicio/View.php';
    }
    public function VistaListaProducto($id)
    {
        $this->id = $id;
        $ObjReto = $this-> SearchAlProducto();
        include_once '../Views/Users/Inicio/ViewProducto.php';
    }
    public function InfoBorrar($id)
    {
       // $this->id = $id; revisar variable que llegue
        // echo $this->id;
        $this->id = $id;
        $this->deleteProducto();
        $this->Redirect();
    }
    public function ActualizarProducto($id)
    {
        $this->id=$id;
        $ObjReto= $this->SearchAlProducto();
        include_once '../Views/Users/Inicio/Update.php';
    }
}

//CARGAR INSERTAR
if (isset($_GET['action']) && $_GET['action']=='insert'){
    $insertProducto = new ProductosController();
    $insertProducto->VistaInsert();
}
//CARGAR FORMULARIO
if (isset($_POST['action']) && $_POST['action']=='insert'){
    $insertProducto = new ProductosController();
    $foto = $_FILES['imagen']['name'];
    $fotot = $_FILES['imagen']['tmp_name'];
    $fotourl = "../Views/Users/Inicio/Img/" . $foto;
    copy($fotot,$fotourl);
    $insertProducto->GuardarFormulario(
        $_POST['descripcion'],
        $_POST['nombrep'],
        $_POST['ancho'],
        $_POST['largo'],
        $_POST['tela'],
        $_POST['colort'],
        $_POST['colorp'],
        $foto,
        $fotourl);
}

//CARGAR PRODUCTO
if (isset($_GET['action']) && $_GET['action']=='view'){
    $insertProducto = new ProductosController();
    $insertProducto->VistaLista();
}

if (isset($_GET['action']) && $_GET['action']=='viewproducto'){
    $insertProducto = new ProductosController();
    $insertProducto->VistaListaProducto($_GET['id']);
}

if (isset($_GET['action']) && $_GET['action']=='delete'){
    $insertProducto = new ProductosController(); 
    $eliminar = "../Views/Producto/Img/" . $_GET['foto'];
    unlink($eliminar);
    $insertProducto->InfoBorrar($_GET['id']);
}
if (isset($_GET['action']) && $_GET['action']=='update'){
    $insertProducto = new ProductosController();
    $insertProducto->ActualizarProducto($_GET['id']);
}
if (isset($_POST['action']) && $_POST['action']=='update'){
    $insertProducto = new ProductosController();
    $foto1 = $_POST['foto1'];
    $foto2 = $_POST['foto2'];
    $foto = $_FILES['imagen']['name'];
    $fotot = $_FILES['imagen']['tmp_name'];
    $fotourl = "../Views/Producto/Img/" . $foto;
    if(empty($fotot)){
        $foto = $foto1;
        $foto = $foto2; 
    }else
    {
        unlink($foto1);
        copy($fotot,$fotourl);
    }
    $insertProducto->UpdateFormulario(
        $_POST['id'],
        $_POST['descripcion'],
        $_POST['nombrep'],
        $_POST['ancho'],
        $_POST['largo'],
        $_POST['tela'],
        $_POST['colort'],
        $_POST['colorp'],
        $foto,
        $fotourl);
}


?>