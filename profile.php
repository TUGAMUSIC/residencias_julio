<?php
include('dbconfig.php');
session_start();
$user_check = $_GET["user"];
if (!isset($_SESSION["loggedin"])) {
    header("location:profile.php");
    die();
}
function escapar($html)
{
    return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

$user_p = $user_check;
foreach ($con->query("SELECT Matricula,Nombre,Paterno,Materno,Psswrd,Carrera,Turno FROM alumnos WHERE Matricula = '$user_check'") as $row) {
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mi Perfil</title>

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
            <a class="navbar-brand" href="http://www.tecnologicodecoacalco.edu.mx/TESCO/INICIO/INICIO.php"><img
                    src="img/logos/t_logo.png" width="30px" height="auto" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="profile.php">
                            <?php echo 'Hola: ';
    echo escapar($row['Matricula']); ?>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="index.php">Salir</a>
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

        <div class="row p-4">
            <div class="col text-center">
                <img src="img/crespo.jpg" class="img-fluid img-thumbnail">
            </div>
            <div class="col justify-content-center align-items-center">
                <h1>
                    <?php echo 'Matricula: ';
    echo escapar($row['Matricula']); ?>
                </h1>
                <h3>
                    <?php echo 'Nombre: ';
    echo escapar($row['Nombre']); ?>
                </h3>
                <h3>
                    <?php echo 'Ap. Paterno: ';
    echo escapar($row['Paterno']); ?>
                </h3>
                <h3>
                    <?php echo 'Ap. Materno: ';
    echo escapar($row['Materno']); ?>
                </h3>
                <h3>
                    <?php echo 'Carrera: ';
    echo escapar($row['Carrera']); ?>
                </h3>
                <h3>
                    <?php echo 'Turno: ';
    echo escapar($row['Turno']); ?>
                </h3>

                <h3>Habilidad: Cañon de plasma en R</h3>
                <div><h3>Status: <a class="green-text">Online<a></h3></div>
                <h3>Vida: 9500 + 500 con módulo ProLog</h3>
            </div>
        </div>

    </div>
    <!-- jQuery -->

    <script type="text/javascript" src="js/jquery.min.js"></script>

    <script type="text/javascript" src="js/popper.min.js"></script>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/mdb.min.js"></script>


    </script>

</body>

</html>
<?php }
?>