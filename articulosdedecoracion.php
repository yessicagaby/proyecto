<?php

?>

<!doctype>
<html>
	<head>
		<meta charset="utf-8">
		<title>Proyecto</title>
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<br><br>
		<div class="container">
			<div class="row-fluid">
				<div class="span8 alert alert-success">
					<a href="./"><h2>e-Commerce.</h2></a>
					<h4>Compra lo que quieras cuando quieras.</h4>
				</div>
				<div class="span4 text-center">
					<div class="row-fluid">
						<div class="span12">
							<form action="" method="POST" name="login">
								<input type="text" class="span6" placeholder="Nombre de usuario">
								<input type="password" class="span6" placeholder="Contraseña">
								<a href="registro.php" class="span6">Registrarse</a>
								<input type="submit" class="span6 btn btn-success" value="Entrar">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<div class="navbar">
					  <div class="navbar-inner">
					    <ul class="nav">
					      <li><a href="electronica.php">Electrónica</a></li>
					      <li><a href="ropayzapatos.php">Ropa y Zapatos</a></li>
					      <li><a href="videojuegos.php">Videojuegos</a></li>
					      <li><a href="hardwareysoftware.php">Hardware y Software</a></li>
					      <li><a href="libros.php">Libros</a></li>
					      <li><a href="musica.php">Música</a></li>
					      <li><a href="productosdebelleza.php">Belleza</a></li>
					      <li><a href="cdsydvds.php">CD's y DVD's</a></li>
					      <li class="active"><a href="articulosdedecoracion.php">Decoración</a></li>
					      <li><a href="electrodomesticos.php">Electrodomésticos</a></li>
					    </ul>
					  </div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<!-- Aqui van las imagenes y su nombre -->
					<ul class="thumbnails">
		              <li class="span4">
		                <div class="thumbnail">
		                  <img data-src="holder.js/300x200" alt="300x200" src="imagenes/cuadros.jpg" style="width: 300px; height: 200px;">
		                  <div class="caption">
		                    <h3>Cuadros <a href="#" class="btn btn-primary">Ver más</a></h3>
		                  </div>
		                </div>
		              </li>
		              <li class="span4">
		                <div class="thumbnail">
		                  <img data-src="holder.js/300x200" alt="300x200" src="imagenes/floreo.jpg" style="width: 300px; height: 200px;">
		                  <div class="caption">
		                    <h3>Florero Rustico <a href="#" class="btn btn-primary">Ver más</a></h3>
		                  </div>
		                </div>
		              </li>
		              <li class="span4">
		                <div class="thumbnail">
		                  <img data-src="holder.js/300x200" alt="300x200" src="imagenes/lamp2.jpg" style="width: 300px; height: 200px;">
		                  <div class="caption">
		                    <h3> Juego De Lamparas Gaby <a href="#" class="btn btn-primary">Ver más</a></h3>
		                  </div>
		                </div>
		              </li>
		            </ul>

		            <ul class="thumbnails">
		              <li class="span4">
		                <div class="thumbnail">
		                  <img data-src="holder.js/300x200" alt="300x200" src="imagenes/lampara.jpg" style="width: 300px; height: 200px;">
		                  <div class="caption">
		                    <h3>Lampara Imperial <a href="#" class="btn btn-primary">Ver más</a></h3>
		                  </div>
		                </div>
		              </li>
		              <li class="span4">
		                <div class="thumbnail">
		                  <img data-src="holder.js/300x200" alt="300x200" src="imagenes/mesa.jpg" style="width: 300px; height: 200px;">
		                  <div class="caption">
		                    <h3>Mesa De Centro JONASIN <a href="#" class="btn btn-primary">Ver más</a></h3>
		                  </div>
		                </div>
		              </li>
		              <li class="span4">
		                <div class="thumbnail">
		                  <img data-src="holder.js/300x200" alt="300x200" src="imagenes/sillon.jpg" style="width: 300px; height: 200px;">
		                  <div class="caption">
		                    <h3>Sillon<a href="#" class="btn btn-primary">Ver más</a></h3>
		                  </div>
		                </div>
		              </li>
		            </ul>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>