<?php
include('config.php');
$parametros = array("UID"=>$USER, "PWD"=>$PASS,
"Database"=>$BD);
$con = sqlsrv_connect($HOST, $parametros);

$sql="SELECT * FROM EmpleadosDisponibles";

if($con==false){
	die(print_r(sqlsvr_errors(), true));

	echo "<script> alert('Intente mas tarde');
			window.location='index.php';</script>";
			die();
}

$trans = sqlsrv_query($con, $sql); //ejecuta el select a la bd

if($trans==false){

	echo "<script> alert('No se registro');
			window.location='Citas.php';</script>";
			die();
}
else{ // cuando la consulta fue exitosa

	while($row = sqlsrv_fetch_array($trans, SQLSRV_FETCH_ASSOC)){
			echo '<option value="'.$row['NumEmpleado'].'">'.$row['NomPila'].' '.$row['ApePaterno'].'</option>';
	}
}
sqlsrv_free_stmt($trans);
sqlsrv_close($con);

?>
