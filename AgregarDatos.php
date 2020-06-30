<?php


include('BaseDatos.php');


// Validar que se hizo clic en el boton de enviar datos

if(isset($_POST["Registrarse"])){

    $cedula=$_POST["Cedula"];
    $nombre=$_POST["Nombre"];
    $apellido=$_POST["Apellido"];
    $direccion=$_POST["Direccion"];
    $telefono=$_POST["Telefono"];
    $fecha_nacimiento=$_POST["Fechanacimiento"];
    $sexo=$_POST["Sexo"];
    $pais=$_POST["Pais"];
    $departamento=$_POST["Departamento"];
    $ciudad=$_POST["Ciudad"];
    $email=$_POST["Email"];
    $usuario=$_POST["Usuario"];
    $password=$_POST["Password"];
    

// 1. crear un objeto del tipo BaseDatos (debemos crear una variable)

$operacion= new BaseDatos();



// 2. Creemos una consulta para agregar datos

    $consulta="INSERT INTO usuarios(Cedula, Nombre, Apellido, Direccion, Telefono, Fechanacimiento, Sexo, 
                                    Pais, Departamento, Ciudad, Email, Usuario, Contraseña) 
                    VALUES ('$cedula','$nombre','$apellido','$direccion','$telefono','$fecha_nacimiento',
                    '$sexo','$pais','$departamento','$ciudad','$email','$usuario','$password')";

               



//3. utilizar el metodo alterarBaseDatos para poder ejecutar la consulta para ello utilizamos el objeto del paso 1
//llamar a la clase BaseDatos y voy a utilizar su metodo para alterar(insertar o escribir dentro) la BD

    $resultado=$operacion->alterarBaseDatos($consulta);

//4. verificar que si se escribieron los datos

    if($resultado){
        echo("<br>");
        echo("Los datos fueron guardados con exito");
        
    }else{
        echo("<br>");
        die("Error en la conexion");
    }



}else{
    echo("No se ha dado click al boton registrarse");
}



?>