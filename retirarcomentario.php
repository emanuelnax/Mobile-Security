<?php
$conexion=mysql_connect("localhost","root","");
mysql_select_db("Tutorial",$conexion);

$usuario = $_POST['usuario'];
$contra = $_POST['contra'];

$usuarioa = mysql_query("SELECT Comentarios FROM Usuarios WHERE Usuario = '$usuario' AND Contra = '$contra'");
$usuario = mysql_fetch_array($usuarioa);

if ($usuario['Comentarios']==""){
	echo "El usuario y la contraseña no coinciden";}
else {
	echo $usuario['Comentarios'];
}


?>