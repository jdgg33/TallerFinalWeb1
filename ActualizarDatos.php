<?php

include('BaseDatos.php');

// Validar que se hizo clic en el boton de enviar datos

if(isset($_POST["Actualizar"])){

    
    $cedula=$_POST["Cedula"];
    $nombre=$_POST["Nombre"];
    $apellido=$_POST["Apellido"];
    $direccion=$_POST["Direccion"];
    $telefono=$_POST["Telefono"];
    $email=$_POST["Email"];
    $usuario=$_POST["Usuario"];
    $password=$_POST["Password"];
    

// 1. crear un objeto del tipo BaseDatos (debemos crear una variable)

    $operacion=new BaseDatos();

// 2. Creemos una consulta para actualizar datos

    $consulta="UPDATE usuarios SET Nombre='$nombre',Apellido='$apellido',Direccion='$direccion',Telefono='$telefono',
                                Email='$email',Usuario='$usuario',Contraseña='$password' 
                            WHERE Cedula='$cedula'";

                

//3. utilizar el metodo alterarBaseDatos para poder ejecutar la consulta para ello utilizamos el objeto del paso 1 
 //llamar a la clase BaseDatos y voy a utilizar su metodo para leer(buscar) en la BD 

    $resultado=$operacion->alterarBaseDatos($consulta);

//4. verificar que si se escribieron los datos

    // echo("br");
    // print_r($resultado);
    if($resultado){
        echo("<br>");
        echo("Los datos fueron guardados con exito");
        
    }else{
        echo("<br>");
        die("Error en la conexion");
    }

}else{

    echo("No se ha dado click al boton Buscar");

}




?>