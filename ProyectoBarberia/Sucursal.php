<?php include('sesion.php'); ?>
<!DOCTYPE html>
 <head>
 <Link href="CSS/style.css" rel="stylesheet" type="text/css"/>
 <meta charset="utf-8">
 <link rel="shortcut icon" href="img/barberia.png">
  <title>Inicio</title>
 </head>
 <body>
  <div id="principal">
   <br>
   <div class="present">
     <div id="present1">
       <img src="img/TijuasBarberLogo.png">
     </div>
         <div id="present2">
           <ul>
             <?php echo $menulogin;
             echo"&nbsp;&nbsp;";
             echo $user;
             ?>
           </ul>
         </div>
   </div>
   <div id="menu">
   <ul id="submenu">
      <li><a href="Servicios.php">Servicios</a></li>
      <li><a href="Sucursal.php">Sucursal</a></li>
      <li><a href="Citas.php">Citas</a></li>
      <li><a href="recibo.php">Citas agendadas</a></li>
    </ul>

   </div>
   <div id="columnaizq">
     <br>
     <div id="bannerubic">

         <h1 class="titulos">Ubicacion</h1>
         <p>Lunes a Viernes de 8:00 a 16:00 hrs.</p><br>
         <p>Sabado de 8:00 a 13:00 hrs.</p>

   </div>

     <br>
     <section  id="mapa">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d866.2900866384485!2d-116.82554498549958!3d32.45893976656619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d93fb7ad47793b%3A0x653a6f2bc5230ba1!2sINMOBILIARIA%20GALAXY%20CONSTRUCTION!5e0!3m2!1ses-419!2smx!4v1637734825165!5m2!1ses-419!2smx" width="850" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     </section>
   </div>

   <div class="limpiar">
   </div>
  </div>
  <div id="pie">
      <nav class="infopie">
        <ul>
          <li>Numero de contacto: 6647420578</li>
          <li><img src="img/instagram.png">  Instagram: TijuasBarber</li>
          <li><img src="img/facebook.png">  Facebook: TijuasBarber</li>
        </ul>
      </nav>
  </div>

 </body>
 <footer>
 </footer>
