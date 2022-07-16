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
        <div class="bannerderv">
          <section class="princserv">
          <br>
          <h1>Servicios disponibles</h1><br><hr>
            <div class="cont1"><br>
              <h2>Corte de cabello</h2>
              <p>Corte de cabello simple</p>
              <p>Precio: 150</p>
            </div>
            <div class="cont1"><br>
              <h2>Arreglo de barba</h2>
              <p>Arreglo simple y sencillo</p>
              <p>Precio: 50</p>
            </div>
            <div class="cont1"><br>
              <h2>Afeitado clasico</h2>
              <p>Limpieza y corte de barba</p>
              <p>Precio: 150</p>
            </div>
            <div class="cont1"><br>
              <h2>Afeitado victorioso</h2>
              <p>Limpieza y arreglo ademas de exfoliante</p>
              <p>Precio: 190</p>
            </div>
            <div class="cont1"><br>
              <h2>Afeitado VIP</h2>
              <p>Incluye exfoliante y mascarilla negra</p>
              <p>Precio: 270</p>
            </div>
            <div class="cont1"><br>
              <h2>Paquete clasico</h2>
              <p>Afeitado clasico con toalla al vapor</p>
              <p>Precio: 300</p>
            </div>
            <div class="cont1"><br>
              <h2>Paquete victorioso</h2>
              <p>Toalla a vapor, exfoliante y masaje relajante</p>
              <p>Precio: 370</p>
            </div>
            <div class="cont1"><br>
              <h2>Ceja</h2>
              <p>Limpieza de ceja</p>
              <p>Precio: 40</p>
            </div>
            <div class="cont1"><br>
              <h2>Bigote</h2>
              <p>Arrego y limpieza de bigote</p>
              <p>Precio: 50</p>
            </div>
          </section>
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
