<!-- procesar_formulario.php -->
<?php
require('./conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["Nombre"];
    $email = $_POST["Email"];
    $asunto = $_POST["Asunto"];
    var_dump($asunto);
    $comentario = $_POST["Comentario"];

    $conexion = ConectarDB();

    $sql = "INSERT INTO buzon (Nombre_usuario, correo, servicio, comentarios, fecha_hora) VALUES ('$nombre', '$email', $asunto, '$comentario', CURRENT_TIMESTAMP)";
    if (mysqli_query($conexion, $sql)) {
        echo "Datos almacenados correctamente en la base de datos.";
        header("Location: ../pages/contacto/?success=true");
    } else {
        echo "Error al almacenar datos: " . mysqli_error($conexion);
    }
    mysqli_close($conexion);
}
?>