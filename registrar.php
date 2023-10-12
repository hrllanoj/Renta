<?php
$conexion = mysqli_connect("localhost", "root", "", "renta2");

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $documento = mysqli_real_escape_string($conexion, $_POST['documento']);

    $contraseña = mysqli_real_escape_string($conexion, $_POST['contraseña']);
    $contraseña = hash('sha512',$contraseña);

    $query = "INSERT INTO usuarios (documento, contraseña) 
              VALUES ('$documento', '$contraseña')";

    if (mysqli_query($conexion, $query)) {
        mysqli_close($conexion);
        header("Location: inicio sesion.php"); // Redirige a otra página
        exit;
    } else {
        echo "Error en la inserción: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR</title>
    <style>
        Body {
            Font-family: Arial, sans-serif;
            Background-color: #f5f5f5;
            Margin: 0;
            Padding: 0;
            Display: flex;
            Flex-direction: column;
            Align-items: center;
            Justify-content: center;
            Min-height: 100vh;
        }
        
        .container {
            Background-color: #fff;
            Box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            Padding: 20px;
            Border-radius: 10px;
            Width: 300px;
        }

        H1 {
            Text-align: center;
            Color: #333;
            Margin-bottom: 20px;
        }

        .input-container {
            Margin-bottom: 15px;
        }

        Input {
            Width: 90%;
            Padding: 10px;
            Border: 1px solid #ccc;
            Border-radius: 15px;
            Transition: border-color 0.3s;
        }

        Input:focus {
            Border-color: #555;
        }

        .btn-container {
            Text-align: center;
            Margin-top: 20px;
        }

        .btn, a {
            Margin: 5px;
            Padding: 10px 20px;
            Font-size: 14px;
            Border: none;
            Cursor: pointer;
            Background-color: #333;
            Color: #fff;
            Border-radius: 12px;
            Transition: background-color 0.3s, transform 0.3s;
            Text-decoration: none;
            Display: inline-block;
        }

        .btn:hover, a:hover {
            Background-color: #555;
            Transform: scale(1.05);
        }

        .back-link {
            Margin-top: 10px;
            Text-align: center;
        }

        .back-link a {
            Color: #333;
            Text-decoration: none;
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
<img src="descarga.jpg" alt="">
   <div class="container" >
   <form action="registrar.php" method="post">
        <div class="register-container">
            <h1><span class="badge bg-secondary">REGISTRAR</span></h1>

            <div class="input-container">
                <input type="text" class="styled-input" placeholder="documento" name="documento" required>
            </div>

            <div class="input-container">
                <input type="password" class="styled-input" placeholder="contraseña" name="contraseña" required>
            </div>
            
            <div class="btn-container">
                <a class="button btn" href="inicio sesion.php">REGRESAR</a>
                <button type="submit" class="btn">CONTINUAR</button>
            </div>
        </div>
    </form>
   </div>
</body>
</html>