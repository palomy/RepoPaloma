<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('evento/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('evento/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'evento/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
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
        <th><?php echo $form['titulo']->renderLabel() ?></th>
        <td>
          <?php echo $form['titulo']->renderError() ?>
          <?php echo $form['titulo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['autor']->renderLabel() ?></th>
        <td>
          <?php echo $form['autor']->renderError() ?>
          <?php echo $form['autor'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['contenido']->renderLabel() ?></th>
        <td>
          <?php echo $form['contenido']->renderError() ?>
          <?php echo $form['contenido'] ?>
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
        <th><?php echo $form['vocabulario_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['vocabulario_id']->renderError() ?>
          <?php echo $form['vocabulario_id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
