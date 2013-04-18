<?php

/**
 * Gramatica filter form base class.
 *
 * @package    proyecto1
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseGramaticaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idioma'      => new sfWidgetFormFilterInput(),
      'nivel'       => new sfWidgetFormFilterInput(),
      'enunciado'   => new sfWidgetFormFilterInput(),
      'solucion'    => new sfWidgetFormFilterInput(),
      'explicacion' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'idioma'      => new sfValidatorPass(array('required' => false)),
      'nivel'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'enunciado'   => new sfValidatorPass(array('required' => false)),
      'solucion'    => new sfValidatorPass(array('required' => false)),
      'explicacion' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('gramatica_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Gramatica';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'nombre'      => 'Text',
      'idioma'      => 'Text',
      'nivel'       => 'Number',
      'enunciado'   => 'Text',
      'solucion'    => 'Text',
      'explicacion' => 'Text',
    );
  }
}
