<?php
	include('conexion.php');
	$sql="INSERT INTO horario(indice,nombre,campo) VALUES(?,?,?)";
	if ($stmt=mysqli_prepare($conn, $sql)){
		mysqli_stmt_bind_param($stmt,"iss",$ind,$n,$c);

		$ind=1;
		$n='08:00';
		$c='ocho0';
		mysqli_stmt_execute($stmt);

		$ind=2;
		$n='08:20';
		$c='ocho2';
		mysqli_stmt_execute($stmt);

		$ind=3;
		$n='08:40';
		$c='ocho4';
		mysqli_stmt_execute($stmt);

		$ind=4;
		$n='09:00';
		$c='nueve0';
		mysqli_stmt_execute($stmt);

		$ind=5;
		$n='09:20';
		$c='nueve2';
		mysqli_stmt_execute($stmt);

		$ind=6;
		$n='09:40';
		$c='nueve4';
		mysqli_stmt_execute($stmt);

		$ind=7;
		$n='10:00';
		$c='diez0';
		mysqli_stmt_execute($stmt);

		$ind=8;
		$n='10:20';
		$c='diez2';
		mysqli_stmt_execute($stmt);

		$ind=9;
		$n='10:40';
		$c='diez4';
		mysqli_stmt_execute($stmt);

		$ind=10;
		$n='11:00';
		$c='once0';
		mysqli_stmt_execute($stmt);

		$ind=11;
		$n='11:20';
		$c='once2';
		mysqli_stmt_execute($stmt);

		$ind=12;
		$n='11:40';
		$c='once4';
		mysqli_stmt_execute($stmt);

		$ind=13;
		$n='16:00';
		$c='dseis0';
		mysqli_stmt_execute($stmt);

		$ind=14;
		$n='16:20';
		$c='dseis2';
		mysqli_stmt_execute($stmt);

		$ind=15;
		$n='16:40';
		$c='dseis4';
		mysqli_stmt_execute($stmt);

		$ind=16;
		$n='17:00';
		$c='dsiete0';
		mysqli_stmt_execute($stmt);

		$ind=17;
		$n='17:20';
		$c='dsiete2';
		mysqli_stmt_execute($stmt);

		$ind=18;
		$n='17:40';
		$c='dsiete4';
		mysqli_stmt_execute($stmt);

		$ind=19;
		$n='18:00';
		$c='docho0';
		mysqli_stmt_execute($stmt);

		$ind=20;
		$n='18:20';
		$c='docho2';
		mysqli_stmt_execute($stmt);

		$ind=21;
		$n='18:40';
		$c='docho4';
		mysqli_stmt_execute($stmt);

		$ind=22;
		$n='19:00';
		$c='dnueve0';
		mysqli_stmt_execute($stmt);

		$ind=23;
		$n='19:20';
		$c='dnueve2';
		mysqli_stmt_execute($stmt);

		$ind=24;
		$n='19:40';
		$c='dnueve4';
		mysqli_stmt_execute($stmt);
		echo"Insertados";
	}
?>
