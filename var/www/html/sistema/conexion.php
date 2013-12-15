<?php
//conexion a base de datos en mysql
$conexion = mysql_connect("localhost" ,"root","deltree")or die('Ha fallado la conexion: '.mysql_error());
mysql_select_db("prueba", $conexion)or die('Error al seleccionar la Base de Datos: '.mysql_error());

//si son distinto los parametros de la conexion, mata el proceso arrojando mensaje, si no, mostrar mensaje "Conctado satisfactoriam"
//if ($conexion) {
//	echo "Conexion exitosa";
//}else{
//	echo "No se pudo conectar a localhost";
//}
?> 
