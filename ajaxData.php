<?php
//Conexion con la bd
include 'conexion.php';
if(!empty($_POST['dni'])){
    //Consulta a la bd
    $cons="SELECT tratxemp.id_tratamiento,tratamiento.nombre FROM tratxemp INNER JOIN tratamiento ON id_tratamiento=tratamiento.id where id_empleado=".$_POST['dni'];
    $query = mysqli_query($conn,$cons);
    //Imprimo los option value
    echo"<option value='' selected disabled>Elegi tratamiento:</option>";
    if(mysqli_num_rows($query)> 0)
        while($row = mysqli_fetch_assoc($query))
            echo '<option value="'.$row['id_tratamiento'].'">'.$row['nombre'].'</option>';


    else
        echo '<option value="">Tratamientos no disponibles</option>';

}/*elseif(!empty($_POST['id'])){
    echo"hey";
    echo '<script>alert("Entraste al segundo");</script>';
    $cons="SELECT duracion,precio FROM tratamiento where id_tratamiento=".$_POST['id'];
    $query=mysqli_query($conn,$cons);
    $row=mysqli_fetch_array($query);
    echo "<label> El tratamiento dura".$row['duracion']." minutos.<br> El precio es $".$row['precio'].".</label>";


    if($_POST['dni']==56781234)
        $tabla=dispEmp1;
    else
        $tabla=dispEmp2;
}*/

