
	<h1 class="text-center"> Gramatica Nivel </h1>
	<br>
	<?php foreach($gramatica as $valor):?>
		<p> <?php echo $valor->getEnunciado(); ?> </p>			
	<?php endforeach;?>