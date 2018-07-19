 <?php
    include("conexion.php");
 ?>
 <!DOCTYPE html>
<head>
	<title>Peluqueria</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    <link rel="stylesheet" href="/Peluqueria/bootstrap.min.css">
    <script src="/Peluqueria/bootstrap.min.js"></script>
   	<script type="text/javascript" src="funciones.js"></script>
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="inicio();" >
	<div id="menu">
		<nav class="navbar navbar-inverse">
 			<div class="container-fluid">
   				<div class="navbar-header">
      				<a class="navbar-brand" href="index.php">Peluqueria</a>
	    		</div>
    			<ul class="nav navbar-nav">
	     			<li class="active"><a href="index.php">Inicio</a></li>
		    		<li><a href="reservar.php">Reservar</a></li>
      				<li><a href="#" onclick="$('#entrada').show();">Consultar </a></li>
      				<li><a href="#" onclick="$('#entrada').show();">Cancelar</a></li>
      				<div id='entrada'>
      				<input type="number" name="dniIng" id="dniIng" placeholder="Ingrese DNI">  
						
					<button class="btn btn-sm btn-primary" onclick="mostrar();" type="submit" <i class="fa fa-clock-o">></button> 
					</div>
					
    			</ul>
  			</div>
		</nav>
	</div>
	<div id="misTurnos" class="modal">  
		<div class="modal-content">
			<div class="modal-header">
				<span class="close">&times;</span>
				<h2>Turnos</h2>
			</div>
			<div class="modal-body">
				<p>Aca te muesstro tus turnos</p>
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
    			</div>
				
			</div>
			<div class="modal-footer">
				<div id="botonesM">
					<button type="button" class="btn btn-default" onclick="$('#misTurnos').hide();" data-dismiss="modal">Cerrar</button>
				</div>
				<p>Consultas al 2911232534</p>
			</div>
		</div>
	</div>
	

	<div id="header">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  			<ol class="carousel-indicators">
    			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    			<li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

  				<div class="carousel-inner">
    				<div class="item active">
				      	<img class="img-responsive" src="Imagenes/portada1.jpg" alt="portada1">
				      	<div class="carousel-caption">
				      		 <a href="reservar.php"><button class="btn btn-hero btn-lg"  role="button">Reservar mi turno</button></a>
				      	</div>
    				</div>

				    <div class="item">
      					<img  class="img-responsive" src="Imagenes/portada7.jpg" alt="portada2">
      					<div class="carousel-caption">
				      		<button id="Consulta" class="btn btn-hero btn-lg" onclick="$('#entrada').show();$('#dniIng').focus();" role="button">Consultar mi turno</button>
				      	</div>
    				</div>

				    <div class="item">
					    <img class="img-responsive" src="Imagenes/portada8.jpg" alt="portada3">
					    <div class="carousel-caption">
				      		<button id="Cancelar" class="btn btn-hero btn-lg" onclick="$('#entrada').show();$('#dniIng').focus();" role="button">Cancelar mi turno</button>
				      	</div>
    				</div>
  				</div>

				  <!-- Left and right controls -->
  				<a class="carousel-control prev" href="#myCarousel" role="button" data-slide="prev">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    				<span class="sr-only">Anterior</span>
  				</a>
  				<a class="carousel-control right" href="#myCarousel" role="button" data-slide="next">
    				<span class="carousel-control-next-icon"></span>
    				<span class="sr-only">Siguiente</span>
  				</a>
		</div>
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
	
	<!---Galeria-->
	<div id="Galeria">
		<h2>Galeria de fotos</h2>
   		 <div id="main_area">
        	<!-- Slider -->
       		 <div class="row">
            	<div class="col-sm-6" id="slider-thumbs">
               		 <!-- Bottom switcher of slider -->
                	<ul class="hide-bullets">
                   		<li class="col-sm-4">
                        	<a class="thumbnail" id="carousel-selector-0"><img src="Galeria/foto0.jpg"></a>
                        	<a class="thumbnail" id="carousel-selector-1"><img src="Galeria/foto1.jpg"></a>
                        	<a class="thumbnail" id="carousel-selector-2"><img src="Galeria/foto2.jpg"></a>
                    	</li>
	                    <li class="col-sm-4">
                        	<a class="thumbnail" id="carousel-selector-3"><img src="Galeria/foto3.jpg"></a>
                        	<a class="thumbnail" id="carousel-selector-4"><img src="Galeria/foto4.jpg"></a>
	                        <a class="thumbnail" id="carousel-selector-5"><img src="Galeria/foto5.jpg"></a>
                    	</li>
                    	<li class="col-sm-4">
	                        <a class="thumbnail" id="carousel-selector-6"><img src="Galeria/foto6.jpg"></a>
                        	<a class="thumbnail" id="carousel-selector-7"><img src="Galeria/foto7.jpg"></a>
                        	<a class="thumbnail" id="carousel-selector-8"><img src="Galeria/foto8.jpg"></a>

	                    </li>
                	</ul>
            	</div>
            	<div class="col-sm-6">
	                <div class="col-xs-12" id="slider">
    	                <!-- Top part of the slider -->
        	            <div class="row">
            	            <div class="col-sm-12" id="carousel-bounding-box">
                	            <div class="carousel slide" id="miGaleria">
                    	            <!-- Carousel items -->
                        	        <div class="carousel-inner">
                            	        <div class="active item" data-slide-number="0">
                                	        <img src="Galeria/foto0.jpg">
                                	    </div>

                                    	<div class="item" data-slide-number="1">
                                        	<img src="Galeria/foto1.jpg">
                                    	</div>

	                                    <div class="item" data-slide-number="2">
                                        	<img src="Galeria/foto2.jpg">
                                    	</div>

                                    	<div class="item" data-slide-number="3">
	                                        <img src="Galeria/foto3.jpg">
                                    	</div>

	                                    <div class="item" data-slide-number="4">
    	                                    <img src="Galeria/foto4.jpg">
        	                            </div>

            	                        <div class="item" data-slide-number="5">
                	                        <img src="Galeria/foto5.jpg">
                    	                </div>
                                    
                        	            <div class="item" data-slide-number="6">
                            	            <img src="Galeria/foto6.jpg">
                                	    </div>
                                    
                                    	<div class="item" data-slide-number="7">
	                                        <img src="Galeria/foto7.jpg">
    	                                </div>
    	                                <div class="item" data-slide-number="8">
	                                        <img src="Galeria/foto8.jpg">
    	                                </div>
            		                    <!-- Carousel nav -->
        	        	                <a class="left carousel-control" href="#miGaleria" role="button" data-slide="prev">
                        	        	    <span class="fas fa-arrow-alt-circle-left"></span>
                            		    </a>
                                		<a class="right carousel-control" href="#miGaleria" role="button" data-slide="next">
		                                    <span class="fas fa-arrow-alt-circle-right"></span>
                                		</a>
                            		</div>
                        		</div>
                    		</div>
                		</div>
            		</div>
            		<!--/Slider-->
        		</div>
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
