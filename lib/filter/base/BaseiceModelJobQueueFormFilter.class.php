<?php

/**
 * iceModelJobQueue filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelJobQueueFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'unique_key'    => new sfWidgetFormFilterInput(),
      'function_name' => new sfWidgetFormFilterInput(),
      'priority'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'data'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'when_to_run'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'unique_key'    => new sfValidatorPass(array('required' => false)),
      'function_name' => new sfValidatorPass(array('required' => false)),
      'priority'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'data'          => new sfValidatorPass(array('required' => false)),
      'when_to_run'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('ice_model_job_queue_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelJobQueue';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'unique_key'    => 'Text',
      'function_name' => 'Text',
      'priority'      => 'Number',
      'data'          => 'Text',
      'when_to_run'   => 'Number',
      'created_at'    => 'Date',
    );
  }
}
