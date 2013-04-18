
	<h1 class="text-center"> Listado de los libros </h1>
	<br>
	<h3 class="text-center"> Titulos: </h3>
	<table align="center">
		<?php foreach($libros as $valor):?>
			<tr> <td> <a href="<?php echo url_for('@libro') ?>"> <?php echo $valor->getTitulo(); ?> </a> </td> </tr>			
		<?php endforeach;?>
	</table>
