<?php

/**
 * Juego form base class.
 *
 * @method Juego getObject() Returns the current form's model object
 *
 * @package    proyecto1
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJuegoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'     => new sfWidgetFormInputHidden(),
      'nombre' => new sfWidgetFormInputText(),
      'idioma' => new sfWidgetFormInputText(),
      'nivel'  => new sfWidgetFormInputText(),
      'ruta'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre' => new sfValidatorString(array('max_length' => 100)),
      'idioma' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'nivel'  => new sfValidatorInteger(array('required' => false)),
      'ruta'   => new sfValidatorString(array('max_length' => 200, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('juego[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Juego';
  }

}
