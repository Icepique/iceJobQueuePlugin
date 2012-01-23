<?php



/**
 * This class defines the structure of the 'job_queue' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.iceJobQueuePlugin.lib.model.map
 */
class iceModelJobQueueTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'plugins.iceJobQueuePlugin.lib.model.map.iceModelJobQueueTableMap';

  /**
   * Initialize the table attributes, columns and validators
   * Relations are not initialized by this method since they are lazy loaded
   *
   * @return     void
   * @throws     PropelException
   */
  public function initialize()
  {
    // attributes
    $this->setName('job_queue');
    $this->setPhpName('iceModelJobQueue');
    $this->setClassname('iceModelJobQueue');
    $this->setPackage('plugins.iceJobQueuePlugin.lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('UNIQUE_KEY', 'UniqueKey', 'CHAR', false, 64, null);
    $this->addColumn('FUNCTION_NAME', 'FunctionName', 'VARCHAR', false, 255, null);
    $this->getColumn('FUNCTION_NAME', false)->setPrimaryString(true);
    $this->addColumn('PRIORITY', 'Priority', 'INTEGER', true, null, 1);
    $this->addColumn('DATA', 'Data', 'LONGVARCHAR', true, null, null);
    $this->addColumn('WHEN_TO_RUN', 'WhenToRun', 'INTEGER', true, null, 0);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, 'CURRENT_TIMESTAMP');
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
  }

  /**
   *
   * Gets the list of behaviors registered for this table
   *
   * @return array Associative array (name => parameters) of behaviors
   */
  public function getBehaviors()
  {
    return array(
      'symfony' => array('form' => 'true', 'filter' => 'true', ),
      'symfony_behaviors' => array(),
      'symfony_timestampable' => array('create_column' => 'created_at', ),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
