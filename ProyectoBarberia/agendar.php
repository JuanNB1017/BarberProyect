<?php
session_start();
If(!empty($_POST)){
 $serverName = "NAYUOKAMI\SQLEXPRESS"; //serverName\instanceName
// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"CtrlBarberia2");//
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$clien=$_SESSION['id'];
$fecha=$_POST['fechacita'];
$hrs=$_POST['Horario'];
$empl=$_POST['Empleados'];
$serv=$_POST['Servicio'];
//Sentencia de Busqueda de datos sql
$sqlpre="select Precio from Servicio WHERE CodServicio='".$serv."' ";
$preexc = sqlsrv_query($conn, $sqlpre);
if($preexc==false){
  echo "error";;
  die();
}
else {
  $row = sqlsrv_fetch_array($preexc, SQLSRV_FETCH_ASSOC);
  $preciofinal=$row['Precio'];
}
//SQL de la cita
$cita= "INSERT INTO Cita VALUES('Solicitud de cita','".$fecha."',".$preciofinal.",".$clien.",".$hrs.",'NA')";
//Te faltaba esta lineaX
$recursoins=sqlsrv_query($conn,$cita);

if ($recursoins==false) {
  echo "<script> alert('Error');
			window.location='Citas.php';</script>";
			die();

	}
  else {


      $citid="SELECT NumCita FROM Cita WHERE IdCliente=".$clien." ";

      $givecitid= sqlsrv_query($conn,$citid);
      if ($givecitid==false) {
        echo "<script> alert('error de conversion');
        window.location='Citas.php';</script>";
        die();
      }
      else {
        $row2 = sqlsrv_fetch_array($givecitid, SQLSRV_FETCH_ASSOC);
        $citaid=$row2['NumCita'];

        $insCNN="INSERT INTO RegCitEm VALUES ('".$citaid."',".$empl.",'".$serv."')";

        $insertcita= sqlsrv_query($conn,$insCNN);

        if ($insertcita==false) {
        /*  echo "<script> alert('Ocurrio un error');
          window.location='Citas.php';</script>";
          die();*/
          die(print_r(sqlsrv_errors(),true));
        }
        else {
          echo "<script> alert('Registro exitoso');
          window.location='Citas.php';</script>";
          die();
        }
      }

      }
    }

 ?>
