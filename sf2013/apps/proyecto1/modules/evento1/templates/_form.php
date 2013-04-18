<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('evento1/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('evento1/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'evento1/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nombre']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre']->renderError() ?>
          <?php echo $form['nombre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['idioma']->renderLabel() ?></th>
        <td>
          <?php echo $form['idioma']->renderError() ?>
          <?php echo $form['idioma'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nivel']->renderLabel() ?></th>
        <td>
          <?php echo $form['nivel']->renderError() ?>
          <?php echo $form['nivel'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['enunciado']->renderLabel() ?></th>
        <td>
          <?php echo $form['enunciado']->renderError() ?>
          <?php echo $form['enunciado'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['solucion']->renderLabel() ?></th>
        <td>
          <?php echo $form['solucion']->renderError() ?>
          <?php echo $form['solucion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['explicacion']->renderLabel() ?></th>
        <td>
          <?php echo $form['explicacion']->renderError() ?>
          <?php echo $form['explicacion'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
