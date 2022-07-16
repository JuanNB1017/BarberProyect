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
              <li><a>Bienvenido administrador</a></li>
              <li><a href="index.html">Salir</a></li>
            </ul>
          </div>
    </div>

   <div id="columnaizq">
     <div class="bannerCIT">
     <div class="contform">
       <table>
         <?php include('selectRecad.php') ?>
       </table><br><hr>
       <br>
       <form class="frmAltaActores" action="updateEstatus.php" method="post">
               <br><h1>Cambiar estatus</h1>
               <br>
               <h3 id="title">Seleccione el ID de cita</h3><br>
               <input type="number" name="cita" value="" required placeholder="Codigo cita" />
               <br><br>
               <h3 id="title">Seleccione el ID de cliente</h3><br>
               <input type="number" name="cliente" value="" required placeholder="Codigo cita" />
               <br><br>
               <h3 id="title">Seleccione el Estatus</h3><br>
               <select id="combos" name="estatus">
                 <option value="A">Atendido</option>
                 <option value="C">Cancelado</option>
                 <option value="NSP">No se presento</option>
                 <option value="P">Pendiente</option>
               </select>
               <br><br>
               <input type="submit" id="Ingresar" name="Actualizar" value="Actualizar" class="boton"/><br><br>
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
