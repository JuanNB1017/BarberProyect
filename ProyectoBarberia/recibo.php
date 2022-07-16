<?php include('sesion.php');?>
<!DOCTYPE html>
 <head>
 <Link href="CSS/styleformcita.css" rel="stylesheet" type="text/css"/>
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
     <div class="bannerCIT">
     <div class="contform">
       <table>
         <?php include('selectRec.php') ?>
       </table>
     </div>
     </div>
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
