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

if (isset($_POST['btn-save'])) {
  $Matricula = $_POST['matricula_id'];
  $Nombre = $_POST['nombre_id'];
  $Paterno = $_POST['ap_id'];
  $Materno = $_POST['am_id'];
  $Psswrd = $_POST['Psswrd_id'];
  $Carrera = $_POST['carrera_id'];
  $Turno = $_POST['turno_id'];

  $sql_query = "INSERT INTO alumnos (`Matricula`, `Nombre`,`Paterno`,`Materno`, `Psswrd`, `Carrera`, `Turno`) VALUES ('".$Matricula."','".$Nombre."','".$Paterno."','".$Materno."','".$Psswrd."','" 
  .$Carrera."','".$Turno."')";

  if (mysqli_query($con, $sql_query)) {
?>
<script type="text/javascript">
  alert('Datos agregados correctamente');
  //window.location.href = 'index.php';
</script>
<?php
  } else {
  ?>
<script type="text/javascript">
  alert('Ha ocurrido un error al insertas los datos');
</script>
<?php
  }
  // Fin Funcion consulta 
}
  ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Registro</title>

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
  <center id="cover">

    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-green-light">
        <a class="navbar-brand" href="http://www.tecnologicodecoacalco.edu.mx/TESCO/INICIO/INICIO.php"><img
            src="img/logos/t_logo.png" width="30px" height="auto" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

    </br>
    <div class="cover-caption">
      <div class="containe">
        <div class="col-sm-10 col-sm-offset-1">

          <form method="post" enctype="multipart/form-data" class="row ustify-content-left"></br>
            <div class="form-group col-md-9 conjunto1">
              <label for=""><b>Nombre(s)</b></label></br>
              <input type="text" class="form-control campo2" id="nombre_id" name="nombre_id" required
                placeholder="Nombre">
            </div>
            <div class="form-group col-md-9 conjunto1">
              <label for=""><b>Apellido Paterno</b></label>
              <input type="text" class="form-control campo2" id="ap_id" name="ap_id" required
                placeholder="Apellido Paterno">
            </div>
            <div class="form-group col-md-9 conjunto1">
              <label for=""><b>Apellido Materno</b></label>
              <input type="text" class="form-control campo2" id="am_id" name="am_id" required
                placeholder="Apellido Materno">
            </div>
            <div class="form-group col-md-9 conjunto1">
              <label for=""><b>Matricula</b></label>
              <input type="number" class="form-control campo2" id="matricula_id" name="matricula_id" required
                placeholder="Matricula" maxlength="9">
            </div>
            <div class="form-group col-md-9 conjunto1">
              <label for=""><b>Contraseña</b></label>
              <input type="password" class="form-control campo2" id="Psswrd_id" name="Psswrd_id" required
                placeholder="Contraseña">
            </div>
            <div class="form-group col-md-9 conjunto1">
              <!-- State Button -->
              <label for=""><b>Carrera</b></label>
              <select class="form-control campo2" id="carrera_id" name="carrera_id">
                <option value="SIC">Ingeniería en Sistemas Computacionales</option>
                <option value="II">Ingeniería Industrial</option>
                <option value="EMI">Ingeniería Electromecánica</option>
                <option value="MCT">Ingeniería Mecatrónica</option>
                <option value="IAM">Ingeniería Ambiental</option>
                <option value="IML">Ingeniería en Materiales</option>
                <option value="IGE">Ingeniería en Gestión Empresarial</option>
                <option value="TICS">Ingeniería en Tecnologías de Información y Comunicaciones</option>
                <option value="IQU">Ingeniería Química</option>
                <option value="ICV">Ingeniería Civil</option>
                <option value="LAM">Licenciatura en Administración</option>
              </select>
            </div>
            <div class="form-group col-md-9 conjunto1">
              <label for=""><b>Turno</b></label>
              <fieldset id="turno_id" name="turno_id">
                <div>
                  <input type="radio" id="matunito" name="matunito" value="Matutino">
                  <label for=""><b>Matutino</b></label>
                </div>
                <div>
                  <input type="radio" id="vespertino" name="vespertino" value="Vespertino">
                  <label for="vespertino"><b>Vespertino</b></label>
                </div>
              </fieldset>
            </div>



        </div>
        <div class="form-group">
          <center><button type="submit" id="btn-save" name="btn-save" class="btn btn-xs bGuardar">Registrarse</button>
          </center>
          <a href="index.php" button class="btn btn-xs bSalir">Salir</a>
        </div>
        </form>
      </div>
  </center>

  <style>
    .conjunto1 {
      background-color: #bbb;
      width: auto;
      height: auto;
      margin: 0 auto 15px auto;
      padding: 5px;
      border: 3px solid #000000;

      -moz-border-radius: 18px;
      -webkit-border-radius: 18px;
      border-radius: 18px;
      behavior: url(border-radius.htc);
    }

    .campoR {
      background-color: #fff;
      width: 250;
      height: auto;
      margin: 0 auto 12px auto;
      padding: 5px;
      border: 1px solid #000000;
    }

    .bGuardar {
      background-color: #008f39;
      foreground-color: #000000;
      font-weight: bold;
      font-size: 14px;
    }

    .bSalir {
      background-color: #FF8888;
      foreground-color: #000000;
      font-weight: bold;
      font-size: 14px;
    }
  </style>
  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>

  <script type="text/javascript" src="js/popper.min.js"></script>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/mdb.min.js"></script>


  </script>

</body>

</html>