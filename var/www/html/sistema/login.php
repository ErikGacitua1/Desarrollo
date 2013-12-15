<?php
//Conexion a localhost, usuario y contraseña
$conexion = mysql_connect("localhost" ,"root","deltree")or die('Ha fallado la conexion: '.mysql_error());

//Seleccionamos la DB y le pasamos el parametro "conexion" para conectar a la DB.
mysql_select_db("prueba", $conexion)or die('Error al seleccionar la Base de Datos: '.mysql_error());

//Rescatamos los valores ingresados en el formulario.
$cuenta = $_POST['cuenta'];
$pass = $_POST['password'];

//Consulta a la DB.
$sql = "select * from usuario where cuenta_usuario='$cuenta' and pass_usuario='$pass'";
$datos = mysql_query($sql, $conexion)or die (mysql_error());//ejecutamos la cuosulta pasando la variable "conexion"

//Bucle, los datos quedaran guardados en un arreglo dentro de la variable row.
while ($row=mysql_fetch_array($datos)){
		$cuenta_usser=$row['cuenta_usuario'];
		$pass_usser=$row['pass_usuario'];
}
if ($cuenta == "") {
	echo "Ingresa tu <a href='index.php'>Cuenta de usuario.</a>";
}elseif ($pass == "") {
	echo "Ingresa tu <a href='index.php'>Contraseña.</a>";
}
elseif($cuenta != $cuenta_usser || $pass != $pass_usser) {
	echo "Cuenta de usuario o contraseña invalida, vuelve a <a href='index.php'>ingresar.</a>";
}else{
	header("Location: home.php");
}
?>