<?php
  //CREAR FUNCIÓN PARA CONECTARNOS A LA BD
  function ConectarDB(){
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $DB = "sitio_web_cmapas";

    //CREAR CONEXION
    $conexion = @mysqli_connect($servidor, $usuario, $contrasena,$DB);
    return $conexion;
 }