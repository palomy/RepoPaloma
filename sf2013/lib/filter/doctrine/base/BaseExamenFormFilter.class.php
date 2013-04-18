<?php

/**
 * Examen filter form base class.
 *
 * @package    proyecto1
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseExamenFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idioma'       => new sfWidgetFormFilterInput(),
      'nivel'        => new sfWidgetFormFilterInput(),
      'id_ejercicio' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'       => new sfValidatorPass(array('required' => false)),
      'idioma'       => new sfValidatorPass(array('required' => false)),
      'nivel'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_ejercicio' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('examen_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Examen';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'nombre'       => 'Text',
      'idioma'       => 'Text',
      'nivel'        => 'Number',
      'id_ejercicio' => 'Number',
    );
  }
}
