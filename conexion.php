<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="peluqueria";

//Creo la conexxion
$conn=new mysqli($servername,$username,$password,$dbname);

//La chequeo
if(!$conn)
	die("Fallo la conexion".mysqli_connect_error());


?>

