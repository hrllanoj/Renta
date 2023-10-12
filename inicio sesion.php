<?php
session_start();

if(isset($_SESSION['id_usuario'])){
    header("location: apartamento.php");
}

$conexion = mysqli_connect("localhost", "root", "", "renta2");

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $documento = mysqli_real_escape_string($conexion, $_POST['documento']);

    $contraseña = mysqli_real_escape_string($conexion, $_POST['contraseña']);
    $contraseña = hash('sha512',$contraseña);

    $query = "SELECT id_usuario FROM usuarios WHERE documento =  '$documento' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion, $query);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)){
    $_SESSION['id_usuario'] = $row['id_usuario'];

        mysqli_close($conexion);
        header("Location: apartamento.php"); // Redirige a otra página si el inicio de sesión es exitoso
        exit;
    }} else {
        echo "Usuario o contraseña incorrectos.";
    }
}

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIAR SESION</title>
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

        .btn {
            Margin: 5px;
            Padding: 10px 20px;
            Font-size: 14px;
            Border: none;
            Cursor: pointer;
            Background-color: #333;
            Color: #fff;
            Border-radius: 5px;
            Transition: background-color 0.3s, transform 0.3s;
            Text-decoration: none;
            Display: inline-block;
        }

        .btn:hover  {
            Background-color: #555;
            Transform: scale(1.05);
        }

        .register-link {
            Margin-top: 10px;
            Text-align: center;
        }

        .register-link a {
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
    <form action="inicio sesion.php" method="post">
        <div class="login-container">
            <h1>Iniciar Sesión</h1>
            <div class="input-container">
                <input type="text" class="styled-input" placeholder="documento" name="documento" required>
            </div>
    
            <div class="input-container">
                <input type="password" name="contraseña" placeholder="contraseña" required class="styled-input">
            </div>
            <div class="btn-container">
               
                <button type="submit" class="btn">CONTINUAR</button>
            </div>
           <div class="register-link" >
            ¿tienes cuenta? <a href="registrar.php">crear cuenta</a>
           </div> 

        </div>
    </form>
    </div>
</body>
</html>