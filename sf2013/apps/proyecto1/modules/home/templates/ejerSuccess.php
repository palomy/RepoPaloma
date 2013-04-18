<html>
	<body>
		<h1>Ejercicios de Gramatica </h1>
		
		<?php foreach($libros as $valor):?>				
				<?php echo $valor->getIdioma(); ?> <br>
				<?php echo $valor->getNivel(); ?> <br>
				<?php echo $valor->getEnunciano(); ?> <br>
		<?php endforeach;?>
	</body>
</html>

