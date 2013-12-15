<?php
if (isset($_COOKIE["misitio_userid"])) {
	echo "Usuario con sesion iniciada";
}else{
	echo "No haz iniciado sesion" <br/><a href='index.php'>Iniciar Sesion</a>";
}
?