<?php
    require("conexion.php");

    $conectar = ConectarDB();

    if($conectar){
        echo "Conexión exitosa :)";
    }
    else{
        echo ":((((";
    }