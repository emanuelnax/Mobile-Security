<?php
$conexion = mysql_connect("localhost","root","");
mysql_select_db("Tutorial",$conexion);

$usuario = $_POST['usuario'];
$contra = $_POST['contra'];

$comprobara = mysql_query("SELECT ID FROM Usuarios WHERE Usuario = '$usuario' AND Contra = '$contra'");
$comprobar = mysql_fetch_array($comprobara);

if($comprobar['ID']==""){
	echo "El usuario y/o contraseña son erroneos";
}
else{
	$borrar = mysql_query("DELETE FROM Usuarios  WHERE Usuario = '$usuario'");
}
?>