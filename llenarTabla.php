<?php
	include('conexion.php');
	/*
		Cargo la tabla con las fechas restantes del año. Para los horarios es: la hora escrita con letras y los numeros 0,2 y 4 son los minutos. Ejemplo: ocho2 -->08:20 
	*/
	$sql="INSERT INTO dispE2(fecha,ocho0,ocho2,ocho4,nueve0,nueve2,nueve4,diez0,diez2,diez4,once0,once2,once4,dseis0,dseis2,dseis4,dsiete0,dsiete2,dsiete4,docho,docho2,docho4,dnueve,dnueve2,dnueve4) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	if ($stmt=mysqli_prepare($conn, $sql)){
		mysqli_stmt_bind_param($stmt,"siiiiiiiiiiiiiiiiiiiiiiii",$dia,$b,$b,$b,$b,$b,$b,$b,$b,$b,$b,$b,$b,$b,$b,$b,$b,$b,$b,$b,$b,$b,$b,$b,$b);
		$anio=2018;
		for($mes=7;$mes<=12;$mes++)
			for($d=1;$d<=31;$d++){	
				$dia=$anio.'-'.$mes.'-'.$d;
				$b=0;
				mysqli_stmt_execute($stmt);
				echo"insertaste".$dia;
			}
		echo"Insertados";
	}
	else
		echo "No se pudo conectar".mysqli_error($conn);
?>