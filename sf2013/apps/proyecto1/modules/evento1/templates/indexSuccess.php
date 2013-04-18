<h1>Gramaticas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Idioma</th>
      <th>Nivel</th>
      <th>Enunciado</th>
      <th>Solucion</th>
      <th>Explicacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($gramaticas as $gramatica): ?>
    <tr>
      <td><a href="<?php echo url_for('evento1/edit?id='.$gramatica->getId()) ?>"><?php echo $gramatica->getId() ?></a></td>
      <td><?php echo $gramatica->getNombre() ?></td>
      <td><?php echo $gramatica->getIdioma() ?></td>
      <td><?php echo $gramatica->getNivel() ?></td>
      <td><?php echo $gramatica->getEnunciado() ?></td>
      <td><?php echo $gramatica->getSolucion() ?></td>
      <td><?php echo $gramatica->getExplicacion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('evento1/new') ?>">New</a>
