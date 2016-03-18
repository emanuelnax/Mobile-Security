<?php
$conexion=mysql_connect("localhost","root","") or
	die('Problemas en la conexion');
	
mysql_select_db("Tutorial",$conexion) or
	die('Problemas en la seleccion de la base de datos');
	
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];
$mail = $_POST['mail'];

mysql_query("INSERT INTO Usuarios(Usuario,Contra,Mail) VALUES ('$usuario','$contra','$mail')",$conexion);
?>