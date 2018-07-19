<?php
    include('conexion.php');
    if(!empty($_POST['hora'])){
        $hora=$_POST['hora'];
        $dni=$_POST['dniI'];
        $idT=$_POST['idT'];
        $dia=$_POST['fecha'];

        $dniC=$_POST['dniC'];
        $a=$_POST['apel'];
        $no=$_POST['nombre'];
        $em=$_POST['email'];
        $tel=$_POST['tel'];

        //Ingrese cliente
        $cHay=mysqli_query($conn,"SELECT * from cliente where dni=$dniC");
        if(mysqli_num_rows($cHay)==0){
            $cACliente="INSERT INTO cliente(dni,apellido,nombre,mail,telefono) VALUES($dniC,'$a','$no','$em',$tel)";
            $query=mysqli_query($conn,$cACliente);
        }

        //Quiero saber la duracion del tratamiento
        $cons="SELECT duracion FROM tratamiento where id=$idT";
        $query=mysqli_query($conn,$cons);
        $row=mysqli_fetch_assoc($query);
        $duracion=$row['duracion']/20;

        //Quiero saber en que tabla buscar
        if($dni==56781234)
            $tabla='dispE1';
        else
            $tabla='dispE2';
        $cDia=mysqli_query($conn,"SELECT indice FROM horario where nombre='".$hora."'");
        $rDia=mysqli_fetch_assoc($cDia);
        $ind=$rDia['indice'];
        
        //Actualiza los campos de la bd
        for($k=0;$k<$duracion;$k++){
            $cNombre=mysqli_query($conn,"SELECT campo FROM horario where indice=$ind");
            $rNombre=mysqli_fetch_assoc($cNombre);
            $c=$rNombre['campo'];
            $cAct=mysqli_query($conn,"UPDATE $tabla SET $c='1' where fecha='$dia'");
            $ind++;
        }

        //Agrego el turno a la bd
        $aTurno="INSERT INTO turno(id_empleado,id_cliente,fecha,hora) VALUES ($dni,$dniC,'$dia','$hora')";
        $query=mysqli_query($conn,$aTurno);


        echo "<label>El turno es el dia: $dia, a las $hora.¡Te esperamos!</label>";

           
    }
    elseif (!empty($_POST['fecha'])) {
        if($_POST['dni']==56781234)
            $tabla='dispE1';
        else
            $tabla='dispE2';
        $cons="SELECT duracion FROM tratamiento where id=".$_POST['idT'];
        $query=mysqli_query($conn,$cons);
        $row=mysqli_fetch_assoc($query);
        $duracion=$row['duracion']/20;

        $cons="SELECT * FROM $tabla where fecha='".$_POST['fecha']."'";
        
        $query=mysqli_query($conn,$cons);
        $cant=mysqli_num_rows($query);
        if($cant!=0){
            $row=mysqli_fetch_array($query,MYSQLI_NUM);
            for($i=1;$i<25;$i++){ //Es hasta 25 por ser la cantidad de columnas
                $num=0;$fin=false;$j=$i;
                while(!$fin){
                    if($num==$duracion)
                        $fin=true;//Salir del while
                    elseif ($row[$j]==0){ //Sumar todo
                        $num++;
                        $j++;
                    }
                    elseif ($row[$j]!=0) {//Estaba ocupado, salir
                        $fin=true;
                    }
                }
                if($num==$duracion){//Hay lugar. Crear options
                    $cNombre=mysqli_query($conn,"SELECT nombre FROM horario where indice=$i");
                    $rNombre=mysqli_fetch_assoc($cNombre);
                    $nombre=$rNombre['nombre'];
                    
                    echo"<option value=".$nombre.">".$nombre."</option>";
                }
            }
        } else {
            echo"<option value='' selected disabled>No hay horarios disponibles</option>";
        }
    }

    elseif (!empty($_POST['id'])){
        $cons="SELECT duracion,precio FROM tratamiento where id=".$_POST['id'];
        $query=mysqli_query($conn,$cons);
        if(mysqli_num_rows($query)>0){
            while($row=mysqli_fetch_assoc($query))
                echo "<label> El tratamiento dura ".$row['duracion']." minutos.<br> El precio es $".$row['precio'].".</label><br>";
        }
        
    }
               
    
        
?>