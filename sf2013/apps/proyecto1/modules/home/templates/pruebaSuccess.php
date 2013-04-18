<html>
	<body>
		<!--<form action="" method="POST">
			<p> Nombre: <input type="text" name="nombre"/> </p>
			<p> Titulo: <input type="text" name="titulo"/> </p>
			<p> Contenido: <br>
				<textarea size="100"> </textarea>
			</p>
			<p> Idioma: <input type="text" name="idioma"/> </p>
			<p> Nivel: <input type="text" name="nivel"/> </p>
			<input type="submit" value="Enviar"/>
		</form>-->
		<h1> Bienvenido </h1> <br>
		<table>
			<tr> 
				<td> Nombre </td>
				<td> Titulo </td>
				<td> Autor </td>
				<td> Contenido </td>
				<td> Idioma </td>
				<td> Nivel </td>				
			</tr>
			<tr>
				<?php foreach($libros as $valor):?>
						<td> <?php echo $valor->getNombre(); ?> </td>
						<td> <?php echo $valor->getTitulo(); ?> </td>
						<td> <?php echo $valor->getAutor(); ?> </td>
						<td> <?php echo $valor->getContenido();?> </td>
						<td> <?php echo $valor->getIdioma(); ?> </td>
						<td> <?php echo $valor->getNivel(); ?> </td> <tr>					
				<?php endforeach;?>
			</tr>
		</table>
	</body>
</html>