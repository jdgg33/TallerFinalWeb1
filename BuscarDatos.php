<?php

include('BaseDatos.php');

// Validar que se hizo clic en el boton de enviar datos

if(isset($_POST["Buscar"])){

    $datoabuscar=$_POST["DatoaBuscar"];
    

// 1. crear un objeto del tipo BaseDatos (debemos crear una variable)

    $operacion=new BaseDatos();

// 2. Creemos una consulta para agregar datos

    $consulta="SELECT IdUsuario, Cedula, Nombre, Apellido, Direccion, Telefono, Fechanacimiento, Sexo, 
                                    Pais, Departamento, Ciudad, Email, Usuario, Contraseña 
    FROM usuarios WHERE (IdUsuario='$datoabuscar') OR (Cedula='$datoabuscar') OR (Nombre='$datoabuscar')
    OR (Email='$datoabuscar') OR (Usuario='$datoabuscar') OR (Telefono='$datoabuscar') OR (Direccion='$datoabuscar')";

                

//3. utilizar el metodo alterarBaseDatos para poder ejecutar la consulta para ello utilizamos el objeto del paso 1 
 //llamar a la clase BaseDatos y voy a utilizar su metodo para leer(buscar) en la BD 

    $resultado=$operacion->consultarEnBaseDatos($consulta);

//4. verificar que si se escribieron los datos

    echo("br");
    print_r($resultado);


}else{

    echo("No se ha dado click al boton Buscar");

}




?>