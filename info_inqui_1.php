<?php session_start();

if (!isset($_SESSION['id_usuario'])) {
    echo '
    <script>
    alert("Por favor, inicia sesión.");
    window.location = "inicio sesion.php";
    </script>';
    session_destroy();
    die();
}

$conexion = mysqli_connect("localhost", "root", "", "renta2");

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha_de_fecha_hasta = mysqli_real_escape_string($conexion, $_POST['fecha_de_fecha_hasta']);
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $documento_ = mysqli_real_escape_string($conexion, $_POST['documento_']);
    $celular = mysqli_real_escape_string($conexion, $_POST['celular']);
    $cobro_debe = mysqli_real_escape_string($conexion, $_POST['cobro_debe']);

    $id_usuarios = $_SESSION['id_usuario'];

    $query = "INSERT INTO info_inquilino (fecha_de_fecha_hasta, nombre, documento_, celular, cobro_debe, id_usuarios) 
              VALUES ('$fecha_de_fecha_hasta', '$nombre', '$documento_', '$celular', '$cobro_debe', '$id_usuarios')";

    if (mysqli_query($conexion, $query)) {
        echo "Datos guardados correctamente.";
    } else {
        echo "Error al guardar los datos: " . mysqli_error($conexion);
    }
 
}
if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

$id_ = mysqli_real_escape_string($conexion,$_SESSION['id_usuario']);

$query = "SELECT * FROM info_inquilino WHERE id_usuarios = $id_";
$result = mysqli_query($conexion, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #333;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        input {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }
        input:focus {
            border-color: #555;
        }
        .btn-container {
            text-align: center;
            margin-top: 20px;
        }
        .btn, a {
            margin: 5px;
            padding: 10px 20px;
            font-size: 14px;
            border: none;
            cursor: pointer;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        img{
            position:fixed;
            min-width: 100%;
            min-height: 100%;
            top: 50%;
            left: 50%;
            transform:translateX(-50%)translateY(-50%);
            z-index: -1;
        }
    </style>
</head>
<body>
<img src=".jpg" alt="">
<form action="info_inqui_1.php" method="post">
    <h1>INQUILINO </h1>
    <table>
        <tr>
            <th>FECHA DE/FECHA HASTA</th>
            <th>NOMBRE</th>
            <th>DOCUMENTO</th>
            <th>CELULAR</th>
            <th>COBRO/DEBE</th>
                   
        </tr>
        <th><input name="fecha_de_fecha_hasta"  type="text"></th>
        <th><input name="nombre"  type="text"></th>
        <th><input name="documento_"  type="text"></th>
        <th><input name="celular"  type="text"></th>
        <th><input name="cobro_debe"  type="text"></th>
       
    </tr>
    </table>
    <div class="btn-container">
    <a class="button" href="apartamento.php">REGRESAR</a>
        <button type="submit" class="btn">GUARDAR</button>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>FECHA DE/FECHA HASTA</th>
            <th>NOMBRE</th>
            <th>DOCUMENTO</th>
            <th>CELULAR</th>
            <th>COBRO/DEBE</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_info_inquilino'] . "</td>";
            echo "<td>" . $row['fecha_de_fecha_hasta'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['documento_'] . "</td>";
            echo "<td>" . $row['celular'] . "</td>";
            echo "<td>" . $row['cobro_debe'] . "</td>";
            echo '<td><a href="editar_inqui_1.php?id=' . $row['id_info_inquilino'] . '"class="nombre">EDITAR</a></td>';
            echo '<td><a href="dele_inqui_1.php?id=' . $row['id_info_inquilino'] . '"class="nombre">ELIMINAR</a></td>';
            echo "</tr>";
        } 
        ?>
    </table>
    </form>
</body>
</html>