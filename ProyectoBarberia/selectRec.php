<?php
include('config.php');
$parametros = array("UID"=>$USER, "PWD"=>$PASS,
"Database"=>$BD);
$con = sqlsrv_connect($HOST, $parametros);

$client=$_SESSION['id'];

$sqlname="SELECT CONCAT(NomPila,' ',ApePaterno,' ',ApeMaterno) as NombreCopl FROM Cliente WHERE NumCliente='".$client."'";

$sqlesec=sqlsrv_query($con,$sqlname);
if ($sqlesec==false) {
	echo "error en el pedido";
}
else {
	$row = sqlsrv_fetch_array($sqlesec, SQLSRV_FETCH_ASSOC);
  $nombrecoml=$row['NombreCopl'];


$sql="SELECT * from CitasXusuario as CU
Where CU.[Nombre del cliente]='".$nombrecoml."'";

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
		echo "<tr>";
		echo "<td>Nombre </td>";
		echo "<td>Horario de la cita</td>";
		echo "<td>Servicios Seleccionado</td>";
		echo "<td>Nombre del empleado</td>";
		echo "<td>Precio del servicio</td>";
		echo "</tr>";
	while($row = sqlsrv_fetch_array($trans, SQLSRV_FETCH_ASSOC)){
		echo "<tr>";
		echo '<td>'.$row['Nombre del cliente'].'</td>';
		echo '<td>'.$row['Horario de la cita'].'</td>';
		echo '<td>'.$row['Servicios seleccionados'].'</td>';
		echo '<td>'.$row['Nombre del empleado'].'</td>';
		echo '<td>$'.number_format($row['Precio del servicio'],2).'</td>';
		echo "</tr>";
	}

}
sqlsrv_free_stmt($trans);
sqlsrv_close($con);
}
?>
