<?php

/**
 * iceModelJobRun filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseiceModelJobRunFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'crontab_id'    => new sfWidgetFormFilterInput(),
      'context'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unique_key'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'job_handle'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'function_name' => new sfWidgetFormFilterInput(),
      'completed'     => new sfWidgetFormFilterInput(),
      'total'         => new sfWidgetFormFilterInput(),
      'status'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cpu_stats'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'memory_stats'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'loadavg_stats' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'priority'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_background' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'crontab_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'context'       => new sfValidatorPass(array('required' => false)),
      'unique_key'    => new sfValidatorPass(array('required' => false)),
      'job_handle'    => new sfValidatorPass(array('required' => false)),
      'function_name' => new sfValidatorPass(array('required' => false)),
      'completed'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'total'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'        => new sfValidatorPass(array('required' => false)),
      'cpu_stats'     => new sfValidatorPass(array('required' => false)),
      'memory_stats'  => new sfValidatorPass(array('required' => false)),
      'loadavg_stats' => new sfValidatorPass(array('required' => false)),
      'priority'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_background' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('ice_model_job_run_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'iceModelJobRun';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'crontab_id'    => 'Number',
      'context'       => 'Text',
      'unique_key'    => 'Text',
      'job_handle'    => 'Text',
      'function_name' => 'Text',
      'completed'     => 'Number',
      'total'         => 'Number',
      'status'        => 'Text',
      'cpu_stats'     => 'Text',
      'memory_stats'  => 'Text',
      'loadavg_stats' => 'Text',
      'priority'      => 'Number',
      'is_background' => 'Boolean',
      'updated_at'    => 'Date',
      'created_at'    => 'Date',
    );
  }
}
