<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
	<!--<div class="navbar">
		<div class="navbar-inner">
			<a class="brand" href="#">Aprende Idiomas </a>
			<ul class="nav">
				<li class="active"><a href="<?php //echo url_for('home/index') ?>">Home</a></li>
				<li><a href="<?php //echo url_for('@libro') ?>">Libros</a></li>
				<li><a href="<?php //echo url_for('@new') ?>"> Nuevo Libros</a></li>
				<li><a href="<?php //echo url_for('@ejer') ?>">Ejercicios</a></li>
				<li><a href="<?php //echo url_for('evento1/new') ?>"> Nuevo Ejercicio</a></li>
				<li><?php //echo link_to("Cerrar sesion", '@user_logout');?> </li>
			</ul>
		</div>
    </div>-->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">			 
				<a class="brand" href="#">Aprende Idiomas </a>
				<ul class="nav">
					<li class="active"><a href="<?php echo url_for('home/index') ?>">Home</a></li>
					<li><a href="<?php echo url_for('@libro') ?>">Libros</a></li>
					<li><a href="<?php echo url_for('@new') ?>"> Nuevo Libros</a></li>
					<li><a href="<?php echo url_for('@gramatica') ?>">Gramatica</a></li>
					<li><a href="<?php echo url_for('evento1/new') ?>"> Nuevo Ejercicio de Gramatica</a></li>
					<li><?php echo link_to("Cerrar sesion", '@user_logout');?> </li>
								 
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> Dropdown <b class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li> despliegue </li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
    </div>
	
    <?php echo $sf_content ?>
  </body>
</html>
