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
        <td>
            <img src=img/banners/banner%20tesco.jpg width="1100" height="120" border="0">
        </td>
    </div>
</div>
</header>
<body>
<!-- colores tesco en hex: #456A48 RGB: 69 106 72, verde 2 hex: #008f39-->

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-green-light">
  <a class="navbar-brand" href="http://www.tecnologicodecoacalco.edu.mx/TESCO/INICIO/INICIO.php">TESCo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Iniciar Sesión<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registro.php">Registrarse</a>
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
    <div class="fadeIn first">
      <img src="img/logos/logotesco2.jpeg" id="icon" alt="User Icon" />
    </div>

    <!-- Login -->
    <form>
      <input type="text" id="input-matricula" class="fadeIn second" name="input-matricula" placeholder="Matricula/ID">
      <input type="text" id="input-pass" class="fadeIn third" name="input-pass" placeholder="Contraseña">
      <button id ="login-btn" type="" class="btn btn-green">Iniciar Sesión</button>
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
