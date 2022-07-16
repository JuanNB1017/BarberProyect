<?php
If(!empty($_POST)){
 $serverName = "NAYUOKAMI\SQLEXPRESS"; //serverName\instanceName
// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"CtrlBarberia2");//
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$Nomb=$_POST['Nombre'];
$Nom=$_POST['Nombre'];
$ApeP=$_POST['apellidoP'];
$ApeM=$_POST['apellidoM'];
$Cor=$_POST['correo'];
$Tel=$_POST['telefono'];
//Sentencia de insercion de sql
$insertar= "INSERT INTO Cliente VALUES ('".$Nom."','".$ApeP."','".$ApeM."',".$Tel.",'".$Cor."')";
//Te faltaba esta lineaX
$recursoins=sqlsrv_prepare($conn,$insertar);

//Para mas seguridad usa el valor retornado por sqlsrv_execute

if(sqlsrv_execute($recursoins)){

      $consultar= "SELECT NomPila, NumCliente, ApePaterno FROM Cliente WHERE Correo='".$Cor."' AND NumTelefono=".$Tel."  ";
       //Te faltaba esta lineaX
      $recurso=sqlsrv_prepare($conn,$consultar);

      //Para mas seguridad usa el valor retornado por sqlsrv_execute

      if(sqlsrv_execute($recurso)){
        $row = sqlsrv_fetch_array($recurso, SQLSRV_FETCH_ASSOC);
      if($row['NumCliente']==null){
        //echo "<br> consulta fallo ";
        //die(print_r(sqlsrv_errors(),true));
        echo "<script>
            alert('Correo no encontrado');
            window.location='index.html';
            </script>";
            die();
        }
        Else{ //si encontro el correo
        //echo "<br> Bienvenido ";
        session_start(); // verifica si hay una sesion iniciada y retoma
                //la sesion, en cado de que no este iniciada, abre una sesion.
        //die(print_r(sqlsrv_errors(),true));
        $_SESSION ['nombre'] = $row ['NomPila'];
        $_SESSION ['apellidoP'] = $row ['ApePaterno'];
        $_SESSION ['apellidoM'] = $row ['ApeMaterno'];
        $_SESSION ['id'] = $row ['NumCliente'];
            header("location:Citas.php");
            die();
        }

      }
          else{
            echo "<script> alert('Ah ocurrido un error, intentelo mas tarde');
            window.location='index.html';
            </script>";
            die();
            header("location:index.html");
      }
}
    else{
      echo "<script> alert('El correo o numero de telefono ya existen, introduzca otro');
      window.location='Registro.html';
      </script>";
      die();
      header("location:Registro.html");
}
}
?>
