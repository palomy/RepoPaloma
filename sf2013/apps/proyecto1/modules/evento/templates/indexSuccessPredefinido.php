<h1>Libros List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Titulo</th>
      <th>Autor</th>
      <th>Contenido</th>
      <th>Idioma</th>
      <th>Nivel</th>
      <th>Vocabulario</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($libros as $libro): ?>
    <tr>
      <td><a href="<?php echo url_for('evento/edit?id='.$libro->getId()) ?>"><?php echo $libro->getId() ?></a></td>
      <td><?php echo $libro->getNombre() ?></td>
      <td><?php echo $libro->getTitulo() ?></td>
      <td><?php echo $libro->getAutor() ?></td>
      <td><?php echo $libro->getContenido() ?></td>
      <td><?php echo $libro->getIdioma() ?></td>
      <td><?php echo $libro->getNivel() ?></td>
      <td><?php echo $libro->getVocabularioId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('evento/new') ?>">New</a>
