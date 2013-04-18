
	<?php foreach($libros as $valor):?>
		<h1 class="text-center"> Sipnosis del <?php echo $valor->getTitulo();?> </h1>
		<?php echo $valor->getContenido();?>			
	<?php endforeach;?>		
