<?php
session_start();
If(!empty($_POST)){
 $serverName = "NAYUOKAMI\SQLEXPRESS"; //serverName\instanceName
// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"CtrlBarberia2");//
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$idestatus=$_POST['idest'];
$estatus=$_POST['nombreest'];

//Sentencia de Busqueda de datos sql
$sql="INSERT INTO Estatus (Codigo,Descripcion) VALUES ('".$idestatus."','".$estatus."')";
$funcion = sqlsrv_prepare($conn, $sql);
if(sqlsrv_execute($funcion)){
  echo "<script> alert('Insertado');
			window.location='newestatus.php';</script>";
			die();
}
else {
  echo "<script> alert('Error en insercion');
			window.location='newestatus.php';</script>";
			die();
}

    }

 ?>
