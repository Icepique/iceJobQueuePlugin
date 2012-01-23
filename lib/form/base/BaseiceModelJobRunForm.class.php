<?php

/**
 * iceModelJobRun form base class.
 *
 * @method iceModelJobRun getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelJobRunForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'crontab_id'    => new sfWidgetFormInputText(),
      'context'       => new sfWidgetFormInputText(),
      'unique_key'    => new sfWidgetFormInputText(),
      'job_handle'    => new sfWidgetFormInputText(),
      'function_name' => new sfWidgetFormInputText(),
      'completed'     => new sfWidgetFormInputText(),
      'total'         => new sfWidgetFormInputText(),
      'status'        => new sfWidgetFormInputText(),
      'cpu_stats'     => new sfWidgetFormTextarea(),
      'memory_stats'  => new sfWidgetFormTextarea(),
      'loadavg_stats' => new sfWidgetFormTextarea(),
      'priority'      => new sfWidgetFormInputText(),
      'is_background' => new sfWidgetFormInputCheckbox(),
      'updated_at'    => new sfWidgetFormDateTime(),
      'created_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'crontab_id'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'context'       => new sfValidatorString(),
      'unique_key'    => new sfValidatorString(array('max_length' => 64)),
      'job_handle'    => new sfValidatorString(array('max_length' => 64)),
      'function_name' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'completed'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'total'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'status'        => new sfValidatorString(),
      'cpu_stats'     => new sfValidatorString(),
      'memory_stats'  => new sfValidatorString(),
      'loadavg_stats' => new sfValidatorString(),
      'priority'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'is_background' => new sfValidatorBoolean(),
      'updated_at'    => new sfValidatorDateTime(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'iceModelJobRun', 'column' => array('unique_key')))
    );

    $this->widgetSchema->setNameFormat('ice_model_job_run[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelJobRun';
  }


}
