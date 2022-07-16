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
      <form class="frmAltaActores" action="newstatus.php" method="post">
              <br><h1>AGREGA UN NUEVO ESTATUS</h1>
              <br>
              <h3 id="title">Seleccione el codigo del nuevo estatus</h3><br>
              <input type="text" name="idest" value="" placeholder="Id estatus" requiered><br><br>

              <h3 id="title">Seleccione el nombre del estatus</h3><br>
              <input type="text" name="nombreest" value="" placeholder="Nombre del estatus" requiered><br><br>

              <input type="submit" id="Ingresar" name="Guardar" value="Agendar" class="boton"/><br><br>
              <a href="Servicios.php"><input type="button" id="Ingresar" name="naveg" value="Cancelar" class="boton" href="index.html"></a><br><br>
           </form>
         </div><br><br>
         <div class="contform">
          <form class="frmAltaActores" action="newcountry.php" method="post">
                  <br><h1>AGREGA UN COUNTRY sakila</h1>
                  <br>

                  <h3 id="title">Seleccione la nueva ciudad</h3><br>
                  <input type="text" name="countrynm" value="" placeholder="Nombre de la ciudad" requiered maxlength="30"><br><br>

                  <input type="submit" id="Ingresar" name="Guardar" value="Agendar" class="boton"/><br><br>
                  <a href="Servicios.php"><input type="button" id="Ingresar" name="naveg" value="Cancelar" class="boton" href="index.html"></a><br><br>
               </form>
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
