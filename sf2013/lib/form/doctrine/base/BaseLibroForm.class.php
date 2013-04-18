<?php

/**
 * Libro form base class.
 *
 * @method Libro getObject() Returns the current form's model object
 *
 * @package    proyecto1
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLibroForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'nombre'         => new sfWidgetFormInputText(),
      'titulo'         => new sfWidgetFormInputText(),
      'autor'          => new sfWidgetFormInputText(),
      'contenido'      => new sfWidgetFormTextarea(),
      'idioma'         => new sfWidgetFormInputText(),
      'nivel'          => new sfWidgetFormInputText(),
      'vocabulario_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vocabulario'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'         => new sfValidatorString(array('max_length' => 100)),
      'titulo'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'autor'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'contenido'      => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'idioma'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'nivel'          => new sfValidatorInteger(array('required' => false)),
      'vocabulario_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vocabulario'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('libro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Libro';
  }

}
