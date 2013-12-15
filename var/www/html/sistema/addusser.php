<?php
$conexion = mysql_connect("localhost" ,"root","deltree")or die('Ha fallado la conexion: '.mysql_error());
mysql_select_db("prueba", $conexion)or die('Error al seleccionar la Base de Datos: '.mysql_error());

$rut = $_POST["rut"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$fono = $_POST["fono"];
$movil = $_POST["movil"];
$cuenta = $_POST["cuenta"];
$password = $_POST["password"];

$query = "insert into usuario (rut_usuario, nombres_usuario, apellidos_usuario, correo_usuario, fono_usuario, movil_usuario, cuenta_usuario, pass_usuario) 
values 
('$rut', '$nombres', '$apellidos', '$correo', '$fono', '$movil', '$cuenta', '$password');"or die(mysql_error());
mysql_query($query);

  while($query) {
    header("Location: index.php");
}if ($query) {
  echo "<script language='javascript'>
          alert=('Tu cuenta ha sido creada exitosamente');
        </script>";  
}
mysql_close($conexion);
?>
