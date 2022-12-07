<?php
include_once 'dbconfig.php';
if ($con) {
?>
<script type="text/javascript">
  console.log('Conexión exitosa');
</script>
<?php
} else {
?>
<script type="text/javascript">
  console.log('Conexión fallida');
</script>
<?php
}
session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
      
      $myusername = mysqli_real_escape_string($con,$_POST['input-matricula']);
      $mypassword = mysqli_real_escape_string($con,$_POST['input-pass']); 
      
      $sql = "SELECT *
              FROM alumnos 
              WHERE Matricula = '$myusername' 
              AND Psswrd = '$mypassword'";

      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      if($count == 1) {
         $_SESSION["loggedin"] = true;
         $_SESSION["username"] = $myusername; 
         $user_l = $_SESSION["username"]; 
         header("location:profile.php?user=".$user_l);

      }else {
         $error = "Algun dato es erroneo, por favor verifica de nuevo!";
      }
   }

 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Iniciar Sesión</title>

  <link rel="icon" href="#" type="image/x-icon">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/mdb.min.css">

  
  <link rel="stylesheet" href="css/style.css">
</head>

<header>
<div class="container">
    <div class="center">
            <img style="width:1110px;" src="img/banners/banner%20tesco.jpg">
    </div>
</div>
</header>
<body>
<!-- colores tesco en hex: #456A48 RGB: 69 106 72, verde 2 hex: #008f39-->

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-green-light">
  <a class="navbar-brand" href="http://www.tecnologicodecoacalco.edu.mx/TESCO/INICIO/INICIO.php"><img src="img/logos/t_logo.png" width="30px" height="auto" class="img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="index.php">Iniciar Sesión<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white-50" href="registro.php">Registrarse</a>
      </li>
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav>
</div>
  

<div class="container">
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Titulo -->

    <!-- Icon -->
    <div class="fadeIn first p-2">
      <img src="img/logos/logotesco2.jpeg" id="icon" alt="User Icon" />
    </div>

    <!-- Login -->
    <form method="POST" autocomplete="off" enctype="multipart/form-data">
      <input type="text" id="input-matricula" class="fadeIn second" name="input-matricula" placeholder="Matricula/ID">
      <input type="text" id="input-pass" class="fadeIn third" name="input-pass" placeholder="Contraseña">
      <button id ="login-btn" type="submit" class="btn btn-green">Iniciar Sesión</button>
    </form>

    <!--
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div> -->

  </div>
</div>
</div>

  <!-- jQuery -->

  <script type="text/javascript" src="js/jquery.min.js"></script>
  
  <script type="text/javascript" src="js/popper.min.js"></script>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/mdb.min.js"></script>
 
 <script type="text/javascript" src="app.js">

</script> 

</body>
</html>
