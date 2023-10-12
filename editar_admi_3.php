<?php
session_start();

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

// Verifica si se ha enviado el formulario (método POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene el ID del trabajador desde el formulario
    $id = isset($_POST['id_info_administracion']) ? intval($_POST['id_info_administracion']) : 0;

    // Resto del código de procesamiento de datos

    $fecha_de__fecha_hasta = mysqli_real_escape_string($conexion, $_POST['fecha_de__fecha_hasta']);
    $servicios = mysqli_real_escape_string($conexion, $_POST['servicios']);
    $daños_mantenimiento = mysqli_real_escape_string($conexion, $_POST['daños_mantenimiento']);
    $revision = mysqli_real_escape_string($conexion, $_POST['revision']);
    $predial = mysqli_real_escape_string($conexion, $_POST['predial']);

    $sql = "UPDATE info_administracion_3 SET fecha_de__fecha_hasta = '$fecha_de__fecha_hasta', servicios = '$servicios', daños_mantenimiento = '$daños_mantenimiento', revision = '$revision', predial = '$predial' WHERE id_info_administracion = '$id'";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header("Location: info_admi_3.php");
        exit;
    } else {
        echo "Error al actualizar los datos: " . mysqli_error($conexion);
    }
}

// Obtiene el ID del trabajador de la URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Consulta para obtener los datos actuales del registro
$sql = "SELECT * FROM info_administracion_3 WHERE id_info_administracion = '$id'";
$resultado = mysqli_query($conexion, $sql);
$row = mysqli_fetch_assoc($resultado);

mysqli_close($conexion);
?>

<!-- Formulario HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
   
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
        .btn, a, button{
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
    </style>
</head>
<body>
<div class="container">
    <form action="editar_admi_3.php" method="post">
        <!-- Agregamos un campo oculto para enviar el ID_Trabajador -->
        <input type="hidden" name="id_info_administracion" value="<?= $id ?>">
        <h1>EDITAR</h1>
        <div class="input-container">
            <input type="text" name="fecha_de__fecha_hasta" placeholder="fecha_de__fecha_hasta" value="<?= isset($row['fecha_de__fecha_hasta']) ? $row['fecha_de__fecha_hasta'] : '' ?>" required>
        </div>
        <div class="input-container">
            <input type="text" name="servicios" placeholder="servicios" value="<?= isset($row['servicios']) ? $row['servicios'] : '' ?>" required>
        </div>
        <div class="input-container">
            <input type="text" name="daños_mantenimiento" placeholder="daños_mantenimiento" value="<?= isset($row['daños_mantenimiento']) ? $row['daños_mantenimiento'] : '' ?>" required>
        </div>
        <div class="input-container">
            <input type="text" name="revision" placeholder="revision" value="<?= isset($row['revision']) ? $row['revision'] : '' ?>" required>
        </div>
        <div class="input-container">
            <input type="text" name="predial" placeholder="predial" value="<?= isset($row['predial']) ? $row['predial'] : '' ?>" required>
        </div>
        <div class="input-container">
            <a href="info_admi_3.php">REGRESAR</a>
            <button type="submit">GUARDAR</button>
        </div>
    </form>
</div>
</body>
</html>
