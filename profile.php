<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"vibra");
// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];
// 3) Preparar la SQL
// => Selecciona todos los campos de la tabla alumno donde el campo id  sea igual a $id
// a) generar la consulta a realizar
$consulta = "SELECT * FROM equipo WHERE id=$id";
// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$repuesta=mysqli_query ($conexion, $consulta);
// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($repuesta);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!--====== Title ======-->
    <title>Profile</title>

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="assets/images/favicon.png"
      type="image/png"
    />

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css" />

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/cb-slider.css" />

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css" />

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css" />

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>

  <body>
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
      <div class="loader_34">
        <div class="ytp-spinner">
          <div class="ytp-spinner-container">
            <div class="ytp-spinner-rotator">
              <div class="ytp-spinner-left">
                <div class="ytp-spinner-circle"></div>
              </div>
              <div class="ytp-spinner-right">
                <div class="ytp-spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
    <?php
  // 6) asignamos a diferentes variables los respectivos valores del array $datos.
  // este paso no es estrictamente necesario, pero es mas practico
  //para despues llamarlos solo con el nombre de la variable
  $posicion=$datos["posicion"];
  $nombre=$datos["nombre"];
  $numero=$datos["numero"];
  $info=$datos["info"];
  $link=$datos["link"];
  $imagen=$datos["imagen"];?>

  <!-- mostramos los datos de ese único producto
  lo meto en una card, pero se puede mostrar como quieran-->

 
      <div class="header-card">
        <div
          class="header-card-wrapper wow fadeInUp"
          data-wow-duration="2s"
          data-wow-delay="1.2s"
        >
          <div
            class="card-header bg_cover"
            style="background-image: url('data:image/jpg;base64, <?php echo base64_encode($imagen)?>')"
          ></div>
         
          <!-- card-profile -->
          <div class="card-content text-center">
            <h3 class="card-title"><?php echo $nombre?></h3>
            <p class="text">
            <?php echo $datos["info"];?>
            </p>
            <h4 class="text"><?php echo $posicion;?></h4>
            
          </div>
          <!-- card-content -->
          <div class="card-social text-center">
            <ul>
              <li>
                <a target="_blank" href="<?php echo $datos['link']; ?>"><i class="lni-instagram-original"></i></a>
              </li>
            </ul>
          
          </div>
          <!-- card-social -->
        </div>
        <!-- header-card -->
      </div>
      <!-- header-card -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== MODAL CONTACT PART ENDS ======-->

   

    <!--====== MODAL CONTACT PART ENDS ======-->

    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== WOW js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
