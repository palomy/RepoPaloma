<?php

/**
 * Examen form base class.
 *
 * @method Examen getObject() Returns the current form's model object
 *
 * @package    proyecto1
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseExamenForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'nombre'       => new sfWidgetFormInputText(),
      'idioma'       => new sfWidgetFormInputText(),
      'nivel'        => new sfWidgetFormInputText(),
      'id_ejercicio' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'       => new sfValidatorString(array('max_length' => 100)),
      'idioma'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'nivel'        => new sfValidatorInteger(array('required' => false)),
      'id_ejercicio' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('examen[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Examen';
  }

}
