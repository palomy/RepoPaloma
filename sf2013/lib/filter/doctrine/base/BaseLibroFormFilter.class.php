<?php

/**
 * Libro filter form base class.
 *
 * @package    proyecto1
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLibroFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'titulo'         => new sfWidgetFormFilterInput(),
      'autor'          => new sfWidgetFormFilterInput(),
      'contenido'      => new sfWidgetFormFilterInput(),
      'idioma'         => new sfWidgetFormFilterInput(),
      'nivel'          => new sfWidgetFormFilterInput(),
      'vocabulario_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vocabulario'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'         => new sfValidatorPass(array('required' => false)),
      'titulo'         => new sfValidatorPass(array('required' => false)),
      'autor'          => new sfValidatorPass(array('required' => false)),
      'contenido'      => new sfValidatorPass(array('required' => false)),
      'idioma'         => new sfValidatorPass(array('required' => false)),
      'nivel'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'vocabulario_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vocabulario'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('libro_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Libro';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'nombre'         => 'Text',
      'titulo'         => 'Text',
      'autor'          => 'Text',
      'contenido'      => 'Text',
      'idioma'         => 'Text',
      'nivel'          => 'Number',
      'vocabulario_id' => 'ForeignKey',
    );
  }
}
