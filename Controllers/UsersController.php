<?php
//PRINCIPIO DE HERENCIA! <----
//VARIABLE DE SESION
session_start();
//CONTROLADOR
include_once '../Models/User.php';

class UsersController extends User{

//FUNCIONES PARA CARGAR VISTAS
public function CargarVistAnonima()
    {
        include_once '../Views/Users/Anonimo/Anonimo.php';
    }
    public function CargarVista(){
        include_once '../Views/Users/Inicio/Vista.php';
    }
     public function CargarVistaInicio()
    {
        include_once '../Views/Users/Inicio/Inicio.php';
    }

    public function CargarVistaLogin()
    {
       
        include_once '../Views/Users/Login/Login.php';
    }
    public function CargarVistaRegistro()
    {
        
        include_once '../Views/Users/Registro/Registrar.php';
    }
    public function CargarVistaPersonalizar()
    {
        
        include_once '../Views/Users/Personalizar/Personalizacion.php';
    }
    public function CargarVistaPerfil()
    {
        
        include_once '../Views/Users/Perfiles/Perfil.php';
    }

    
//CARGAR VISTA LISTADO
      public function CargarVistaListado()
    {
        $objetoretornado = $this->SearchAll();
        include_once '../Views/Users/Listado.php';
    }



//ELIMINAR 
public function VerifiyInformationForDelete($Id)
 {
     $this->Id=$Id;
    $this->borrar();
    $this->Redirect();
     
 }


//REDIRECCIONAR
public function Redirect()
{
    header("location:UsersController.php?action=listado");
}


public function VerifyInformationUpdate($Id)
    {
        $this->Id = $Id;
        $objetoretornado = $this->TraerUsuarioDeBdActualizar();
        require '../Views/Users/Update.php';
    }


// //ACTUALIZAR
public function VerifiyInformationForUpdate($Id)
{
$this->Id = $Id;
$objetoretornado = $this->SearchAll2();
require '../Views/Users/Update.php';

}

    //ENVIAR DATOS DEL REGISTRO A LA BASE DE DATOS
    public function EnviarDatosBd($nombres,$apellidos,$ciudad,$email,$edad,$celular,$direccion,$contrasena)
    {
         $this->Nombres = $nombres;
        $this->Apellidos = $apellidos;
        $this->Ciudad = $ciudad;
        $this->Email = $email;
        $this->Edad = $edad;
        $this->Celular = $celular;
        $this->Direccion = $direccion;
        $this->Contrasena = $contrasena;
        //SEGURIDAD DE LA CONTRASEÑA
        $contrasenaencriptada = password_hash($contrasena,PASSWORD_ARGON2I);
        $this->Contrasena = $contrasenaencriptada;
        //TERMINA
        $this->GuardarUserEnBd();
        $this->RedireccionarAlLogin();

    }
    public function RedireccionarAlLogin()
    {
        header("location: UsersController.php?action=login");
    }

    //ACTUALIZAR--AQUI SE ENCUENTRA EL ERROR--SI LO DESCOMENTA LE SALDRA ERROR
  public function UpdateInformationForModel($Id,$nombres,$apellidos,$ciudad,$email,$edad,$celular,$direccion,$contrasena)
  {
      $this->Id = $Id;
      $this->Nombres = $nombres;
      $this->Apellidos = $apellidos;
      $this->Ciudad = $ciudad;
      $this->Email = $email;
      $this->Edad = $edad;
      $this->Celular = $celular;
      $this->Direccion = $direccion;
      $this->Contrasena = $contrasena;
      //SEGURIDAD DE LA CONTRASEÑA
      $contrasenaencriptada = password_hash($contrasena,PASSWORD_ARGON2I);
      $this->Contrasena = $contrasenaencriptada;
      //TERMINA
      $this->update();
      $this->Redirect();

}

//ENVIAR DATOS PARA EL LOGIN
    public function EnviarDatosParaLogin($Email,$Contrasena)
    {
        $this->Email = $Email;
        $this->Contrasena = $Contrasena;
        $usuario = $this->TraerUsuarioDeLaBd();

        foreach ($usuario as $u){}
        if(password_verify($this->Contrasena,$u->Contrasena)){
            echo "LA CONTRASEÑA ES CORRECTA";
             $_SESSION['nombres'] =$u->Nombres;
             $_SESSION['apellidos'] =$u->Apellidos;
             $_SESSION['ciudad'] =$u->Ciudad;
             $_SESSION['email'] =$u->Email;
             $_SESSION['edad'] =$u->Edad;
             $_SESSION['celular'] =$u->Celular;
             $_SESSION['direccion'] =$u->Direccion;
        header("location: UsersController.php?action=inicio");
       }
        else
        {
            echo "CONTRASEÑA O EMAIL INCORRECTO";
        }
    }
}
//CARGAR VISTAS
//CARGAR VISTA ANONIMA
if(isset($_GET['action']) && $_GET['action']=='anonimo'){
    $usercontroller = new UsersController();
    $usercontroller->CargarVistAnonima();
}

//CARGAR VISTA ANONIMA CATALOGO
if(isset($_GET['action']) && $_GET['action']=='vista'){
    $usercontroller = new UsersController();
    $usercontroller->CargarVista();
}

//CARGAR VISTA INICIO
if(isset($_GET['action']) && $_GET['action']=='inicio'){
    $usercontroller = new UsersController();
    $usercontroller->CargarVistaInicio();
}


//CARGAR VISTA LOGIN
if(isset($_GET['action'])&& $_GET['action']=='login'){
    $usercontroller = new UsersController();
    $usercontroller->CargarVistaLogin();
}

//CARGAR VISTA REGISTRAR
if(isset($_GET['action'])&& $_GET['action']=='registrar'){
    $usercontroller = new UsersController();
    $usercontroller->CargarVistaRegistro();
}


//CARGAR VISTA LISTADO

if(isset($_GET['action'])&& $_GET['action']=='listado'){
    $usercontroller = new UsersController();
    $usercontroller->CargarVistaListado();
}

//CARGAR VISTA PERSONALIZAR
if(isset($_GET['action']) && $_GET['action']=='personalizar'){
    $usercontroller = new UsersController();
    $usercontroller->CargarVistaPersonalizar(); 
}

//CARGAR VISTA PERFIL
if(isset($_GET['action'])&& $_GET['action']=='perfil'){
    $usercontroller = new UsersController();
    $usercontroller->CargarVistaPerfil();
}


//BASE DE DATOS
if(isset($_POST['action'])&& $_POST['action']=='registrar'){
    $usercontroller = new UsersController();
    $usercontroller->EnviarDatosBd($_POST['nombres'],$_POST['apellidos'],$_POST['ciudad'],$_POST['email'],
    $_POST['edad'],$_POST['celular'],$_POST['direccion'],$_POST['contrasena']);
}

if(isset($_POST['action'])&& $_POST['action']=='login'){
    $usercontroller = new UsersController();
    $usercontroller->EnviarDatosParaLogin($_POST['email'],$_POST['contrasena']);
}


//ELIMINAR

 if (isset($_GET['action']) && $_GET['action']=='delete') {
   $usercontroller = new UsersController();
     $usercontroller->VerifiyInformationForDelete($_GET['Id']);
 }
 



// //ACTUALIZAR
 if(isset($_GET['action']) && $_GET['action']=='update') {
  $usercontroller = new UsersController();
     $usercontroller->VerifiyInformationForUpdate($_GET['Id']);
}



// //ACTUALIZAR
if(isset($_POST['action'])&& $_POST['action']=='update'){
$usercontroller = new UsersController();
$usercontroller-> UpdateInformationForModel($_POST['Id'],$_POST['nombres'],$_POST['apellidos'],$_POST['ciudad'],
$_POST['email'],$_POST['edad'],$_POST['celular'],$_POST['direccion'],$_POST['contrasena']);
}
?>
