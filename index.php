<!DOCTYPE html>
<html lang="es">
<head>
  
  <title>Desplázate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>

  /*CSS*/
  body {
      font-family: "Montserrat", sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      /*
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #8d8989;
      color: #8d8989;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #57b9f4;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  img.pequeña{
  width: 700px; height:185px;
}
img.pequeña1{
  width: 50px; height:50px;
}

#problem{

  background: #57b9f4;
  width: 100%;
}
#client{

  background: #57b9f4;
  width: 100%;
}
  </style>
}
  
</head>
<body onload="setupPicChange();" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" >

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>                    
      </button>
       <div id="logo" class="grid_3">
        
      </div>
      <div><img class="pequeña1" src="images/Desplazate01.jpg">

      <a class="navbar-brand" href="#myPage" >Desplázate</a>
     </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#problem"><FONT COLOR=e7eff4>Problemática</FONT></a></li>
        <li><a href="#client"><FONT COLOR=e7eff4>Clientes</FONT></a></li> 
        <li><a href="#propuesta"><FONT COLOR=e7eff4>Propuesta</FONT></a></li>             
        <li><a href="#contact"><FONT COLOR=e7eff4>Contacto</FONT></a></li>

      </ul>
    </div>
  </div>
</nav>



<!-- Container ('¿En que consiste?') -->
 <div class="container text-center">
 <img class="pequeña" src="images/Desplazate.png"/>
    
   <p>Que nada te detenga!!</p>
 </div>

<div id="problem" class="container text-center" >
   
   <h3>Problemática</h3>
  <p>En México existen más de cinco millones de personas con alguna discapacidad motriz, visual o auditiva, en algunos casos se encuentran aislados de su entorno  debido a la ausencia de opciones para desplazarse dentro de la cuidad y asistir a sus compromisos laborales, sociales o médicos, así como  a la falta de apoyo físico y emocional para realizar sus traslado con comodidad y agilidad.  </p>
    
</div>

<!--inicia carrusel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
      <li data-target="#myCarousel" data-slide-to="9"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="pic1.jpg" alt="Falta de servicio" width="500" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="pic2.jpg" alt="Falta de servicio" width="500" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
    
      <div class="item">
        <img src="pic3.jpg" alt="Transporte" width="500" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

       <div class="item">
        <img src="pic4.jpg" alt="Transporte" width="500" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

       <div class="item">
        <img src="pic5.jpg" alt="Integracón" width="500" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

       <div class="item">
        <img src="pic6.jpg" alt="Transporte" width="500" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

       <div class="item">
        <img src="pic7.jpg" alt="Estadistica" width="500" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

       <div class="item">
        <img src="pic8.jpg" alt="Transporte" width="500" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      

       </div>

      <div class="item">
        <img src="pic9.jpg" alt="Transporte" width="500" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="pic10.jpg" alt="Transporte" width="500" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
    </div>
    <!-- End Wrapper for slides-->

    <!--Controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- termina carrusel-->

<div id="client" class="container text-center">
  
  <h3>Creado para:</h3>
  <p>Personas de cualquier grupo de edad con alguna capacidad diferente que requiera de transporte y apoyo para trasladarse.</p>
  <br>
  </div>

<div id="propuesta" class="container text-center">
  <h3>Propuesta de solución</h3>
   <p>Servicio de transportación y acompañamiento para personas con capacidades diferentes o movilidad reducida agendada mediante una plataforma en línea con acceso vía web, app móvil o por llamada telefónica </p>
  <br>
  
</div>

<div id="formulario" class="container text-center">
  <h3>Reserva o Cotiza tu Servicio</h3>
<h4>Información de contacto</h4>
   <form action="datos.php" method="get">
Nombre: <input type="text" name="nombre">
Apellidos: <input type="text" name="apellido"><br><br>
Teléfono: <input type="text" name="telefono">
Correo: <input type="text" name="correo">
<h4>Información de traslado</h4>
<br><br>
Fecha de servicio:<input type="date" name="fecha">
Hora: <input type="text" name="hora"><br><br>
Dirección de origen: <input type="text" name="origen">
Dirección de destino: <input type="text" name="destino"><br><br>
Especificaciones especiales: <input type="text" name="destino"><br><br>
</form>
<button class="btn pull-right" name="btnEnviar" type="submit">Enviar Cotización</button>
  <br>
  </div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contáctanos</h3>
 

  <div class="row">
    <div class="col-md-4">
      <p></p>
      <p><span class="glyphicon glyphicon-map-marker"></span></p>
      <p><span class="glyphicon glyphicon-phone"></span>+52 981-160-18-11 </p>
      <p><span class="glyphicon glyphicon-envelope"></span>desplazateicem@gmail.com</p>
    </div>
    <!-- Funcion PHP para envio de datos al correo especificado -->
    <?php

      if(isset($_POST["btnEnviar"])){
        if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["comentarios"])){
            $nombre = $_POST["name"];
            $email = $_POST["email"];
            $comentarios = $_POST["comentarios"];

            $to  = "manoamigaicem@gmail.com";
            $subject ="Comentario recibido en la web oficial.";
            $message = $comentarios;
            $mail = mail(to, subject, message);

            if($mail){
                echo "<script>
                        alert('Tu mensaje ha sido enviado');
                    </script>";
            }else {
                 echo "<script>
                        alert('Ocurrió un problema al enviar tu mensaje. Intenta nuevamente');
                    </script>";
            }
        }else{
          echo "<script>
                  alert('Necesita llenar todos los campos');
                </script>"; 
        }

      }

    ?>

    <!--Formulario-->
    <div class="col-md-8">
      <form name="frmComentarios" method="post" action="<?php $PHP_SELF?>">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Correo" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comentarios" name="comentarios" placeholder="Comentario" rows="5"></textarea>
        <br>
        <div class="row">
          <div class="col-md-12 form-group">
            <button class="btn pull-right" name="btnEnviar" type="submit">Enviar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <br>
  
</div>
<!-- End Container (Contact section)-->

<!--<div id="googleMap"></div>-->

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(41.878114, -87.629798);

function initialize() {
var mapProp = {
center:myCenter,
zoom:12,
scrollwheel:false,
draggable:false,
mapTypeId:google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
position:myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!-- encuesta -->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="SUBIR">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>&copy; Desplázate. Todos los derechos reservados.</p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
