<?php
session_start();
If(!empty($_POST)){
 $serverName = "NAYUOKAMI\SQLEXPRESS"; //serverName\instanceName
// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"sakila");//
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$ciud=$_POST['countrynm'];

$sql="INSERT INTO country VALUES ('".$ciud."',getdate())";

$recurso=sqlsrv_prepare($conn, $sql);
if(sqlsrv_execute($recurso)) {
  echo "<script> alert ('realizado')
        window.location='newestatus.php';</script>";
        die();
}
else{
  echo "<script> alert ('error')
        window.location='newestatus.php';</script>";
        die();
}
}
