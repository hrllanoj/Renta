<?php
     session_start();
  
     if(!isset($_SESSION['id_usuario'])){
      echo  '
      <script>
      alert("por favor debes iniciar sesion");
      window.location = "inicio sesion.php";
      </script>';
      session_destroy();
      die();
     }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>APARTAMENTOS</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
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
    H1 {
      Text-align: center;
      Color: #333;
      Margin-bottom: 20px;
    }
    Input:focus {
      Border-color: #555;
    }
    .btn, a {
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
    .container {
      Background-color: #fff;
      Box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      Padding: 20px;
      Border-radius: 10px;
      Width: 400px; /* Aumentamos el ancho del container */
      Display: flex;
      Flex-direction: column; /* Alineamos verticalmente los elementos */
      Align-items: center; /* Centramos horizontalmente los elementos */
    }
    .btn:hover {
      Transform: scale(1.1); /* Escala el botón en hover */
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
    </style>

  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
  <img src="descarga.jpg" alt="">
  <div class="container" > <h1>APARTAMENTOS</h1>
    <div class="accordion" id="accordionPanelsStayOpenExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
            APARTAMENTO 1
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
          <div class="accordion-body">
            <strong></strong> 
            <a class="button" href="info_aparta_1.php">INFO</a>
            <a class="button" href="info_admi_1.php">ADMIN</a>
            <a class="button" href="info_inqui_1.php">INQUILINO</a>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
            APARTAMENTO 2
          </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
          <div class="accordion-body">
            <strong></strong>
            <a class="button" href="info_aparta_2.php">INFO</a>
            <a class="button" href="info_admi_2.php">ADMIN</a>
            <a class="button" href="info_inqui_2.php">INQUILINO</a>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
            APARTAMENTO 3
          </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
          <div class="accordion-body">
            <strong></strong>
            <a class="button" href="info_aparta_3.php">INFO</a>
            <a class="button" href="info_admi_3.php">ADMIN</a>
            <a class="button" href="info_inqui_3.php">INQUILINO</a>
         </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
            APARTAMENTO 4
          </button>
        </h2>
        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
          <div class="accordion-body">
            <strong></strong>
            <a class="button" href="info_aparta_4.php">INFO</a>
            <a class="button" href="info_admi_4.php">ADMIN</a>
            <a class="button" href="info_inqui_4.php">INQUILINO</a>
        </div>
       </div>
      </div>
    </div>
    <a class="button" href="destroy.php">CERRAR SESION</a></div>
  </body>
</html>