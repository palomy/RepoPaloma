<?php

/**
 * Gramatica form base class.
 *
 * @method Gramatica getObject() Returns the current form's model object
 *
 * @package    proyecto1
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGramaticaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInputText(),
      'idioma'      => new sfWidgetFormInputText(),
      'nivel'       => new sfWidgetFormInputText(),
      'enunciado'   => new sfWidgetFormTextarea(),
      'solucion'    => new sfWidgetFormTextarea(),
      'explicacion' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 100)),
      'idioma'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'nivel'       => new sfValidatorInteger(array('required' => false)),
      'enunciado'   => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'solucion'    => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'explicacion' => new sfValidatorString(array('max_length' => 500, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('gramatica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Gramatica';
  }

}
