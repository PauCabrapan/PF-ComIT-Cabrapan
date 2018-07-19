<?php 
	include ('conexion.php');
	if(!empty($_POST['dniI'])){

		$sql="SELECT * FROM turno WHERE id_cliente=".$_POST['dniI'];
		$consulta=mysqli_query($conn,$sql);		
		if(mysqli_num_rows($consulta)>0){
			while($row=mysqli_fetch_assoc($consulta)){
				$h=substr($row["hora"],0,5);
				$c=mysqli_query($conn,"SELECT indice from horario where nombre='$h'");
				$fila=mysqli_fetch_assoc($c);
				$hora=$fila['indice'];
				$dia=$row["fecha"];
				$fcion='cancelar(new Date($dia),'.$hora.');';
				echo'<a href="#"  onclick="cancelar();" class="list-group-item 	list-group-item-action ">
   	 					<i style="font-size:24px" class="fa">&#xf00d;</i><br> Dia:<label id="f">'.$row["fecha"].'</label><br>Hora:<label>'. $row["hora"].'</label> <br> 
    				</a>';
			}
		}
		else{
			echo"No hay turnos con ese DNI.";
		}
	}
	else
		echo"No ingresaste dni."

    
?>
    	
				