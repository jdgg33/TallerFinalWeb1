<?php


include('BaseDatos.php');


if(isset($_POST["Borrar"])){

    //traer datos del formulario

    $datoaborrar=$_POST["DatoaBorrar"];

    //creo objeto de tipo BaseDatos (conexion)

    $operacionBaseDatos = new BaseDatos();

    //consulta para eliminar los datos

    $consulta="DELETE from usuarios where Cedula='$datoaborrar' OR Nombre='$datoaborrar' OR Email='$datoaborrar' 
    OR Usuario='$datoaborrar' OR Telefono='$datoaborrar' OR Direccion='$datoaborrar'";

    //llamar a la clase BaseDatos y voy a utilizar su metodo para alterar(insertar o escribir dentro) la BD

    $resultado=$operacionBaseDatos->alterarBaseDatos($consulta);

    //validemos el resultado
    
    if($resultado){
        echo("<br>");
        echo("Transacción éxitosa, datos eliminados");
    }else{
        echo("<br>");
        die("Error en la transacción");
    }

}else{
    echo("No se ha dado click al boton registrarse");
}


?>