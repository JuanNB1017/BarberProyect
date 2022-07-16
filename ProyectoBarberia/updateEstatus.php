<?php
include('config.php');
$parametros = array("UID"=>$USER, "PWD"=>$PASS,
"Database"=>$BD);
$con = sqlsrv_connect($HOST, $parametros);

$usuario=$_POST['cita'];
$cliente=$_POST['cliente'];
$estatus=$_POST['estatus'];

$sql="UPDATE Cita SET IdEstatus='".$estatus."' WHERE IdCliente=".$cliente." and NumCita=".$usuario."";

if($con==false){
	die(print_r(sqlsvr_errors(), true));

	echo "<script> alert('Intente mas tarde');
			window.location='indexadmin.php';</script>";
			die();
}
else{
$trans = sqlsrv_query($con, $sql); //ejecuta el select a la bd

if($trans==false){

	echo "<script> alert('No se registro');
			window.location='indexadmin.php';</script>";
			die();
}
else{ // cuando la consulta fue exitosa
	echo "<script> alert('Actualizado');
			window.location='indexadmin.php';</script>";
			die();
}
sqlsrv_free_stmt($trans);
sqlsrv_close($con);
}
?>
