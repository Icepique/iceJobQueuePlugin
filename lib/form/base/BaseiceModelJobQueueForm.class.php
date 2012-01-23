<?php

/**
 * iceModelJobQueue form base class.
 *
 * @method iceModelJobQueue getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelJobQueueForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'unique_key'    => new sfWidgetFormInputText(),
      'function_name' => new sfWidgetFormInputText(),
      'priority'      => new sfWidgetFormInputText(),
      'data'          => new sfWidgetFormTextarea(),
      'when_to_run'   => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'unique_key'    => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'function_name' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'priority'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'data'          => new sfValidatorString(),
      'when_to_run'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'created_at'    => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'iceModelJobQueue', 'column' => array('unique_key')))
    );

    $this->widgetSchema->setNameFormat('ice_model_job_queue[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelJobQueue';
  }


}
