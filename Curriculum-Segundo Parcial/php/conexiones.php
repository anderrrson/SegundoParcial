<?php

    $host="127.0.0.1";
    $basededatos="redes";
    $usuario="root";
    $password="";
   

    $conexion = new mysqli($host,$usuario,$password,$basededatos);

    if($conexion->connect_error){
        die("Conexion Fallida". $conexion->connect_error());
    }
    echo "Conexion exitosa";
    


    mysqli_close($conexion->close());
?>
