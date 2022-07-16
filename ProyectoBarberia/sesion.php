<?php
session_start();
$user='';
$menulogin='';
//verificar si la sesion del navegador ya tiene variables
//variables de sesion son valores que se pueden usar en todas
//las paginas navegador, mientras no se cierre la sesion

if(isset($_SESSION['nombre'])){
	$menulogin='<li><a href="index.html">Cerrar sesion</a></li>';
	$user='<li><a>Bienvenido '.$_SESSION['nombre'].'</a></li>';

}
else{//Si no hay variable de sesion
	$user='';
	$menulogin='<li><a href="index.html">Login</a></li>
	<li><a href="Registro.html">Registro</a></li>';
}
?>
