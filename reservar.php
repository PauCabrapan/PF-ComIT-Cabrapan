<?php 
	include("conexion.php");
?>	
<!DOCTYPE html>
<head> <!--------------RESERVAR------------->
	<title>Peluqueria</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="stylesheet" type="text/css" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="/Peluqueria/bootstrap.min.js"></script>
    
	<link rel="stylesheet" href="/Peluqueria/bootstrap.min.css">

	
	<!--Calendario-->
	
	    <!-- Include Bootstrap Datepicker -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
 
   	<script type="text/javascript" src="funciones.js"></script>
</head>
<body onload="inicioR();">
	<div id="menu">
		<nav class="navbar navbar-inverse">
 			<div class="container-fluid">
   				<div class="navbar-header">
      				<a class="navbar-brand" href="index.php">Peluqueria</a>
	    		</div>
    			<ul class="nav navbar-nav">
	     			<li class="active"><a href="index.php">Inicio</a></li>
		    		<li><a href="reservar.php">Reservar</a></li>
      				<li><a href="#" onclick="$('#entrada').show();$('#dniIng').focus();">Consultar </a></li>
      				<li><a href="#" onclick="$('#entrada').show();$('#dniIng').focus();">Cancelar</a></li>
      				<div id='entrada'>
      				<input type="number" name="dniIng" id="dniIng" placeholder="Ingrese DNI">  
						
					<button class="btn btn-sm btn-primary" onclick="mostrar();" type="submit" <i class="fa fa-clock-o">></button> 
					</div>
    			</ul>
  			</div>
		</nav>
	</div>
	<div id="Empleados">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img src="\Peluqueria\Imagenes\foto1.png" alt="Usuario"> 
					<div class="card-details animate">
						<div class="card-img-overlay ">
							<h1 class="card-header">Nombre empleado</h1>
						</div>
						<div class="card-detail">
							<p class="card-text"><strong>Su amor por el diseño de cabello queda demostrado por su capacidad de transformar lo ordinario en extraordinario. Como director, trabaja con un asociado y, juntos, brindan a los clientes lo último en tendencias de corte y color de cabello. También es nuestro especialista en peinados formales, y es conocida por preparar novias y asistentes para eventos especiales.</strong></p>
						</div>
						<div class="card-footer">
							<a href="https://www.facebook.com"><img class="social animate " src="\Peluqueria\Imagenes\facebook.png"></a>
							<a href="https://www.instagram.com"><img class="social animate" src="\Peluqueria\Imagenes\instagram.png"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="\Peluqueria\Imagenes\foto2.png" alt="Usuario"> 
					<div class="card-details animate">
						<div class=" card-img-overlay">
							<h1 class="card-header">Nombre empleado</h1>					
						</div>
						<div class="card-detail">
							<p class="card-text"><strong>Si buscas creatividad y pasión, ella es la mejor opción para el diseño y el color del cabello. Ya sea que elijas mejorar tu aspecto actual o quieras hacer un cambio audaz, su estilo artístico no te decepcionará. Ella también es una de nuestras artistas de maquillaje y estilistas de eventos especiales.Ofrece ese aspecto total en la moda del cabello y el diseño de maquillaje</strong></p>
						</div>
						<div class="card-footer">
							<a href="https://www.facebook.com"><img class="social animate " src="\Peluqueria\Imagenes\facebook.png"></a>
							<a href="https://www.instagram.com"><img class="social animate" src="\Peluqueria\Imagenes\instagram.png"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="\Peluqueria\Imagenes\foto3.png" alt="Usuario"> 
					<div class="card-details animate">
						<div class="card-img-overlay">
							<h1 class="card-header">Nombre empleado</h1>
						</div>
						<div class="card-detail">
							<p class="card-text"><strong>Si está buscando actualizar su estilo o color de cabello, ella es una excelente opción. Su experiencia con extensiones de cabello es solo una de las muchas habilidades que aporta a nuestro equipo. Tiene un enfoque creativo con el color del pelo y el diseño del cabello que deja a sus clientes volviendo por más.</strong></p>
						</div>
						<div class="card-footer">
							<a href="https://www.facebook.com"><img class="social animate " src="\Peluqueria\Imagenes\facebook.png"></a>
							<a href="https://www.instagram.com"><img class="social animate" src="\Peluqueria\Imagenes\instagram.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="turnos">
		<h1><strong>Reservar</strong></h1><br>
		<?php
		$query = mysqli_query($conn,"SELECT * FROM empleado ORDER BY nombre ASC");

		?>
		<select id="EmpEleg">
		    <option value=""  selected disabled>Elegi Empleado:</option>
		    <?php
		    if(mysqli_num_rows($query) > 0){
		        while($row = mysqli_fetch_assoc($query)){ 
		            echo '<option value="'.$row['DNI'].'">'.$row['nombre'].'</option>';
		        }
		    }else{
		        echo '<option value="">Empleados no disponibles</option>';
		    }
		    ?>
		</select><br><br>

		<select id="tratamElegido">
		    <option value="" selected disabled>Primero elegi empleado</option>
		</select><br><br>

		<div id='calendario'>

		</div><br>
		<div class="form-group">
        	<div class="col-xs-5 date">
            	<div class="input-group input-append date" id="datePicker">
                	<input type="text" class="form-control" name="date">
               	 	<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            	</div>
        	</div>
    	</div><br><br>
    	
    	<select id='horario'>
    		<option value"" disabled selected>Primero elegi fecha</option>

    	</select><br><br>
    	<br>

    	<div id='formu'>
		Nombre:* <input type="text" id='nombre'>
		<br><br>
		Apellido:* <input type="text" id='apellido'>
		<br><br>
		E-mail: <input type="text" id="email">
		<br><br>	
		DNI:* <input type="number" id="dni">
		<br><br>
		Telefono:* <input type="number" id="tel">
		<br><br>
		<label id='error'></label><br><br>
		<button id='reservar' onclick='reserva();'>Reservar</button>

    	</div>

    	

	
	</div>
	<div id="misTurnos" class="modal">  
		<div class="modal-content">
			<div class="modal-header">
				<span class="close">&times;</span>
				<h2>Turnos</h2>
			</div>
			<div class="modal-body">
				<div class="list-group">
   	 				<a href="#"  onclick="cancelar();" class="list-group-item list-group-item-action ">
   	 					<i style="font-size:24px" class="fa">&#xf00d;</i> Dia: <br>Hora: <br> 
    				</a>
    				<a href="#" onclick="cancelar();" class="list-group-item list-group-item-action">
   	 					<i style="font-size:24px" class="fa">&#xf00d;</i> Dia: <br>Hora: <br>
    				</a>
    				<a href="#" onclick="cancelar();" class="list-group-item list-group-item-action">
   	 					<i style="font-size:24px" class="fa">&#xf00d;</i>Dia: <br>Hora: <br>
    				</a>
    				<a href="#"  onclick="cancelar();" class="list-group-item list-group-item-action">
   	 					<i style="font-size:24px" class="fa">&#xf00d;</i> Dia: <br>Hora: <br>
    				</a>
    				<div class="form-group">
  						<div class="col-md-9">
    						<select id="selectmultiple" name="selectmultiple" class="form-control" multiple="multiple">
      							<option value="1">Dia: Hora:</option>
     		 					<option value="2">Dia: Hora:</option>
    						</select>
  						</div>
					</div>
    			</div>
				
			</div>
			<div class="modal-footer">
				<div id="botonesM">
					<button type="button" class="btn btn-default" onclick="$('#misTurnos').hide();" data-dismiss="modal">Cerrar</button>
				</div>
				<p>Para reservar un turno haga click en reservar. Para cancelar haga click en un turno.Consultas al 2914565322</p>
			</div>
		</div>
	</div>

	<div id="Contacto">
		<div class="row">
			<div class="col-sm-5">
				<h1>Contacto</h1><br><p>Te esperamos en: <br>Direccion 123<br>Bahia Blanca<br>Telefono<br>mimail@correo.com</p>
				<a href="http://www.facebook.com"><img  class="social" src="\Peluqueria\Imagenes\facebook.png" alt="Facebook"></a>
				<a href="http://www.instagram.com"><img class="social" src="\Peluqueria\Imagenes\instagram.png" alt="Instagram"></a>
				<a href="http://www.twitter.com"><img class="social" src="\Peluqueria\Imagenes\twitter.png" alt="Twitter"></a>
				<a href="http://www.pinterest.com"><img class="social" src="\Peluqueria\Imagenes\pinterest.png" alt="Pinterest"></a>
				<a href="http://www.youtube.com"><img class="social" src="\Peluqueria\Imagenes\youtube.png" alt ="YouTube"></a>
			</div>
			<div class="col-sm-5">
				<!---- Mapa --->
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2201.2232058503428!2d-62.265059932205034!3d-38.71781560842007!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95edbcb27e1b303d%3A0x4278ed8b6db56a20!2sPlaza+Rivadavia!5e0!3m2!1ses!2sar!4v1529031228299" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>	
</body>
</html>
