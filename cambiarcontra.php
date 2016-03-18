<?php
$conexion = mysql_connect("localhost","root","");
mysql_select_db("Tutorial",$conexion);

$usuario = $_POST['usuario'];
$contraa = $_POST['contraa'];
$contran = $_POST['contran'];

$comprobara = mysql_query("SELECT ID FROM Usuarios WHERE Usuario = '$usuario' AND Contra = '$contraa'");
$comprobar = mysql_fetch_array($comprobara);

if($comprobar['ID']==""){
	echo "El usuario y/o contraseña son erroneos";
}
else{
	$modificar = mysql_query("UPDATE usuarios SET Contra = '$contran' WHERE Usuario = '$usuario'");
}
?>