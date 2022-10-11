<?php

include_once '../Config/conexion1.php';

class Producto{
    protected $id;
    protected $decripcion;
    protected $nombrep;
    protected $ancho;
    protected $largo;
    protected $tela;
    protected $colort;
    protected $colorp;
    protected $foto;
    protected $foto_url;

    protected function InsertProducto()
    {
        $conexion = new Conexion();
        $sql = "INSERT INTO producto (descripcion,nombrep,ancho,largo,tela,colort,colorp,foto,foto_url)
        VALUE (?,?,?,?,?,?,?,?,?)";
        $insertar = $conexion->stm->prepare($sql);

        $insertar->bindParam(1,$this->descripcion);
        $insertar->bindParam(2,$this->nombrep);
        $insertar->bindParam(3,$this->ancho);
        $insertar->bindParam(4,$this->largo);
        $insertar->bindParam(5,$this->tela);
        $insertar->bindParam(6,$this->colort);
        $insertar->bindParam(7,$this->colorp);
        $insertar->bindParam(8,$this->foto);
        $insertar->bindParam(9,$this->foto_url);

        $insertar->execute();

    }

    protected function SearchAllProducto()
    {
        $conexion = new Conexion();
        $sql = "SELECT * FROM producto";
        $mostrar = $conexion->stm->prepare($sql);
        $mostrar->execute();
        $ObjReto =$mostrar->fetchAll(PDO::FETCH_OBJ);
        return $ObjReto;

    }
    protected function SearchAlProducto()
    {
        $conexion = new Conexion();
        $sql = "SELECT * FROM producto WHERE Id='$this->id'";
        $mostrar = $conexion->stm->prepare($sql);
        $mostrar->execute();
        $ObjReto =$mostrar->fetchAll(PDO::FETCH_OBJ);
        return $ObjReto;
    }
    protected function deleteProducto()
    {
        $conexion = new Conexion();
        $sql = "DELETE FROM producto WHERE Id='$this->id'";
        $Borrar= $conexion->stm->prepare($sql);
        $Borrar->execute();
    }
    protected function UpdateProducto()
    {
        $conexion = new Conexion();
        $sql = "UPDATE producto SET descripcion='$this->descripcion',
        nombrep='$this->nombrep',
        ancho='$this->ancho',
        largo='$this->largo',
        tela='$this->tela',
        colort='$this->colort',
        colorp='$this->colorp',
        foto='$this->foto',
        foto_url='$this->foto_url' WHERE id='$this->id' ";
        $Update= $conexion->stm->prepare($sql);
        $Update->execute();
    }    
    
}
?>