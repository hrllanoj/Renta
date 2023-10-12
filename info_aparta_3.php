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
    $direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
    $alcobas = mysqli_real_escape_string($conexion, $_POST['alcobas']);
    $baños = mysqli_real_escape_string($conexion, $_POST['baños']);
    $patio_terraza = mysqli_real_escape_string($conexion, $_POST['patio_terraza']);
    $amoblado = mysqli_real_escape_string($conexion, $_POST['amoblado']);

    $id_usuarios = $_SESSION['id_usuario'];

    $query = "INSERT INTO info_apartamento_3 (direccion, alcobas, baños, patio_terraza, amoblado, id_usuarios) 
              VALUES ('$direccion', '$alcobas', '$baños', '$patio_terraza', '$amoblado', '$id_usuarios')";

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

$query = "SELECT * FROM info_apartamento_3 WHERE id_usuarios = $id_";
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
    </style>
</head>
<body>
<form action="info_aparta_3.php" method="post">
    <h1>INFORMACION 3</h1>
    <table>
        <tr>
            <th>DIRECCION</th>
            <th>ALCOBAS</th>
            <th>BAÑOS</th>
            <th>PATIO/TERRAZA</th>
            <th>AMOBLADO</th>
                   
        </tr>
        <th><input name="direccion"  type="text"></th>
        <th><input name="alcobas"  type="text"></th>
        <th><input name="baños"  type="text"></th>
        <th><input name="patio_terraza"  type="text"></th>
        <th><input name="amoblado"  type="text"></th>
       
    </tr>
    </table>
    <div class="btn-container">
    <a class="button" href="apartamento.php">REGRESAR</a>
        <button type="submit" class="btn">GUARDAR</button>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>DIRECCION</th>
            <th>ALCOBAS</th>
            <th>BAÑOS</th>
            <th>PATIO/TERRAZA</th>
            <th>AMOBLADO</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_info_apartamento'] . "</td>";
            echo "<td>" . $row['direccion'] . "</td>";
            echo "<td>" . $row['alcobas'] . "</td>";
            echo "<td>" . $row['baños'] . "</td>";
            echo "<td>" . $row['patio_terraza'] . "</td>";
            echo "<td>" . $row['amoblado'] . "</td>";
            echo '<td><a href="editar_aparta_3.php?id=' . $row['id_info_apartamento'] . '"class="nombre">EDITAR</a></td>';
            echo '<td><a href="dele_aparta_3.php?id=' . $row['id_info_apartamento'] . '"class="nombre">ELIMINAR</a></td>';
            echo "</tr>";
        } 
        ?>
    </table>
    </form>
</body>
</html>