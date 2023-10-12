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
    $id = isset($_POST['id_info_apartamento']) ? intval($_POST['id_info_apartamento']) : 0;

    // Resto del código de procesamiento de datos

    $direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
    $alcobas = mysqli_real_escape_string($conexion, $_POST['alcobas']);
    $baños = mysqli_real_escape_string($conexion, $_POST['baños']);
    $patio_terraza = mysqli_real_escape_string($conexion, $_POST['patio_terraza']);
    $amoblado = mysqli_real_escape_string($conexion, $_POST['amoblado']);

    $sql = "UPDATE info_apartamento_2 SET direccion = '$direccion', alcobas = '$alcobas', baños = '$baños', patio_terraza = '$patio_terraza', amoblado = '$amoblado' WHERE id_info_apartamento = '$id'";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header("Location: info_aparta_2.php");
        exit;
    } else {
        echo "Error al actualizar los datos: " . mysqli_error($conexion);
    }
}

// Obtiene el ID del trabajador de la URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Consulta para obtener los datos actuales del registro
$sql = "SELECT * FROM info_apartamento_2 WHERE id_info_apartamento = '$id'";
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
        .btn, a, button {
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
    <form action="editar_aparta_2.php" method="post">
        <!-- Agregamos un campo oculto para enviar el ID_Trabajador -->
        <input type="hidden" name="id_info_apartamento" value="<?= $id ?>">
        <h1>EDITAR</h1>
        <div class="input-container">
            <input type="text" name="direccion" placeholder="direccion" value="<?= isset($row['direccion']) ? $row['direccion'] : '' ?>" required>
        </div>
        <div class="input-container">
            <input type="text" name="alcobas" placeholder="alcobas" value="<?= isset($row['alcobas']) ? $row['alcobas'] : '' ?>" required>
        </div>
        <div class="input-container">
            <input type="text" name="baños" placeholder="baños" value="<?= isset($row['baños']) ? $row['baños'] : '' ?>" required>
        </div>
        <div class="input-container">
            <input type="text" name="patio_terraza" placeholder="patio_terraza" value="<?= isset($row['patio_terraza']) ? $row['patio_terraza'] : '' ?>" required>
        </div>
        <div class="input-container">
            <input type="text" name="amoblado" placeholder="amoblado" value="<?= isset($row['amoblado']) ? $row['amoblado'] : '' ?>" required>
        </div>
        <div class="input-container">
            <a href="info_aparta_2.php">REGRESAR</a>
            <button type="submit">GUARDAR</button>
        </div>
    </form>
</div>
</body>
</html>
