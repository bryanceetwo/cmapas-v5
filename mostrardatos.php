<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mostrar Datos</title>
</head>
<body>
  <table style="background-color: blue;">
    <tr>
      <td>id</td>
      <td>servicio</td>
      <td>gerencia</td>
    </tr>

      <?php
        require("./php/conexion.php");
        $conexion = ConectarDB();

        $sql = "SELECT * FROM  servicios";
        $result = mysqli_query($conexion, $sql);

        while($mostrar = mysqli_fetch_array($result)){
          ?>
        
    <tr>
      <td> <?php echo $mostrar['id_servicios']?></td>
      <td> <?php echo $mostrar['servicio']?></td>
      <td> <?php echo $mostrar['Gerencia']?></td>
    </tr>
    <?php
    }
      ?>
  </table>

  <table style="background-color: green;">
    <tr>
      <td>id_gerencia</td>
      <td>nombre_gerencia</td>
    </tr>
      <?php
        $sql = "SELECT * FROM gerencias";
        $result = mysqli_query($conexion, $sql);

        while($mostrar = mysqli_fetch_array($result)){
          ?>
        
    <tr>
      <td> <?php echo $mostrar['id_gerencia']?></td>
      <td> <?php echo $mostrar['Nombre_gerencia']?></td>
    </tr>
    <?php
    }
      ?>
  </table>

  <table style="background-color: brown;">
    <tr>
      <td>id_comment</td>
      <td>Nombre_usuario</td>
      <td>correo</td>
      <td>servicio</td>
      <td>comentarios</td>
      <td>fecha_hora</td>
    </tr>
  </table>
  </html>
</body>