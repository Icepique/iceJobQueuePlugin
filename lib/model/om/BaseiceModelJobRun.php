<?php


/**
 * Base class that represents a row from the 'job_run' table.
 *
 * 
 *
 * @package    propel.generator.plugins.iceJobQueuePlugin.lib.model.om
 */
abstract class BaseiceModelJobRun extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'iceModelJobRunPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        iceModelJobRunPeer
   */
  protected static $peer;

  /**
   * The value for the id field.
   * @var        int
   */
  protected $id;

  /**
   * The value for the crontab_id field.
   * @var        int
   */
  protected $crontab_id;

  /**
   * The value for the context field.
   * Note: this column has a database default value of: 'global'
   * @var        string
   */
  protected $context;

  /**
   * The value for the unique_key field.
   * @var        string
   */
  protected $unique_key;

  /**
   * The value for the job_handle field.
   * @var        string
   */
  protected $job_handle;

  /**
   * The value for the function_name field.
   * @var        string
   */
  protected $function_name;

  /**
   * The value for the completed field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $completed;

  /**
   * The value for the total field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $total;

  /**
   * The value for the status field.
   * Note: this column has a database default value of: 'pending'
   * @var        string
   */
  protected $status;

  /**
   * The value for the cpu_stats field.
   * @var        string
   */
  protected $cpu_stats;

  /**
   * The value for the memory_stats field.
   * @var        string
   */
  protected $memory_stats;

  /**
   * The value for the loadavg_stats field.
   * @var        string
   */
  protected $loadavg_stats;

  /**
   * The value for the priority field.
   * Note: this column has a database default value of: 1
   * @var        int
   */
  protected $priority;

  /**
   * The value for the is_background field.
   * Note: this column has a database default value of: false
   * @var        boolean
   */
  protected $is_background;

  /**
   * The value for the updated_at field.
   * @var        string
   */
  protected $updated_at;

  /**
   * The value for the created_at field.
   * @var        string
   */
  protected $created_at;

  /**
   * Flag to prevent endless save loop, if this object is referenced
   * by another object which falls in this transaction.
   * @var        boolean
   */
  protected $alreadyInSave = false;

  /**
   * Flag to prevent endless validation loop, if this object is referenced
   * by another object which falls in this transaction.
   * @var        boolean
   */
  protected $alreadyInValidation = false;

  /**
   * Applies default values to this object.
   * This method should be called from the object's constructor (or
   * equivalent initialization method).
   * @see        __construct()
   */
  public function applyDefaultValues()
  {
    $this->context = 'global';
    $this->completed = 0;
    $this->total = 0;
    $this->status = 'pending';
    $this->priority = 1;
    $this->is_background = false;
  }

  /**
   * Initializes internal state of BaseiceModelJobRun object.
   * @see        applyDefaults()
   */
  public function __construct()
  {
    parent::__construct();
    $this->applyDefaultValues();
  }

  /**
   * Get the [id] column value.
   * 
   * @return     int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the [crontab_id] column value.
   * 
   * @return     int
   */
  public function getCrontabId()
  {
    return $this->crontab_id;
  }

  /**
   * Get the [context] column value.
   * 
   * @return     string
   */
  public function getContext()
  {
    return $this->context;
  }

  /**
   * Get the [unique_key] column value.
   * 
   * @return     string
   */
  public function getUniqueKey()
  {
    return $this->unique_key;
  }

  /**
   * Get the [job_handle] column value.
   * 
   * @return     string
   */
  public function getJobHandle()
  {
    return $this->job_handle;
  }

  /**
   * Get the [function_name] column value.
   * 
   * @return     string
   */
  public function getFunctionName()
  {
    return $this->function_name;
  }

  /**
   * Get the [completed] column value.
   * 
   * @return     int
   */
  public function getCompleted()
  {
    return $this->completed;
  }

  /**
   * Get the [total] column value.
   * 
   * @return     int
   */
  public function getTotal()
  {
    return $this->total;
  }

  /**
   * Get the [status] column value.
   * 
   * @return     string
   */
  public function getStatus()
  {
    return $this->status;
  }

  /**
   * Get the [cpu_stats] column value.
   * 
   * @return     string
   */
  public function getCpuStats()
  {
    return $this->cpu_stats;
  }

  /**
   * Get the [memory_stats] column value.
   * 
   * @return     string
   */
  public function getMemoryStats()
  {
    return $this->memory_stats;
  }

  /**
   * Get the [loadavg_stats] column value.
   * 
   * @return     string
   */
  public function getLoadavgStats()
  {
    return $this->loadavg_stats;
  }

  /**
   * Get the [priority] column value.
   * 
   * @return     int
   */
  public function getPriority()
  {
    return $this->priority;
  }

  /**
   * Get the [is_background] column value.
   * 
   * @return     boolean
   */
  public function getIsBackground()
  {
    return $this->is_background;
  }

  /**
   * Get the [optionally formatted] temporal [updated_at] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getUpdatedAt($format = 'Y-m-d H:i:s')
  {
    if ($this->updated_at === null)
    {
      return null;
    }


    if ($this->updated_at === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->updated_at);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
      }
    }

    if ($format === null)
    {
      // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
      return $dt;
    }
    elseif (strpos($format, '%') !== false)
    {
      return strftime($format, $dt->format('U'));
    }
    else
    {
      return $dt->format($format);
    }
  }

  /**
   * Get the [optionally formatted] temporal [created_at] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getCreatedAt($format = 'Y-m-d H:i:s')
  {
    if ($this->created_at === null)
    {
      return null;
    }


    if ($this->created_at === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->created_at);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
      }
    }

    if ($format === null)
    {
      // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
      return $dt;
    }
    elseif (strpos($format, '%') !== false)
    {
      return strftime($format, $dt->format('U'));
    }
    else
    {
      return $dt->format($format);
    }
  }

  /**
   * Set the value of [id] column.
   * 
   * @param      int $v new value
   * @return     iceModelJobRun The current object (for fluent API support)
   */
  public function setId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->id !== $v)
    {
      $this->id = $v;
      $this->modifiedColumns[] = iceModelJobRunPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [crontab_id] column.
   * 
   * @param      int $v new value
   * @return     iceModelJobRun The current object (for fluent API support)
   */
  public function setCrontabId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->crontab_id !== $v)
    {
      $this->crontab_id = $v;
      $this->modifiedColumns[] = iceModelJobRunPeer::CRONTAB_ID;
    }

    return $this;
  }

  /**
   * Set the value of [context] column.
   * 
   * @param      string $v new value
   * @return     iceModelJobRun The current object (for fluent API support)
   */
  public function setContext($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->context !== $v)
    {
      $this->context = $v;
      $this->modifiedColumns[] = iceModelJobRunPeer::CONTEXT;
    }

    return $this;
  }

  /**
   * Set the value of [unique_key] column.
   * 
   * @param      string $v new value
   * @return     iceModelJobRun The current object (for fluent API support)
   */
  public function setUniqueKey($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->unique_key !== $v)
    {
      $this->unique_key = $v;
      $this->modifiedColumns[] = iceModelJobRunPeer::UNIQUE_KEY;
    }

    return $this;
  }

  /**
   * Set the value of [job_handle] column.
   * 
   * @param      string $v new value
   * @return     iceModelJobRun The current object (for fluent API support)
   */
  public function setJobHandle($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->job_handle !== $v)
    {
      $this->job_handle = $v;
      $this->modifiedColumns[] = iceModelJobRunPeer::JOB_HANDLE;
    }

    return $this;
  }

  /**
   * Set the value of [function_name] column.
   * 
   * @param      string $v new value
   * @return     iceModelJobRun The current object (for fluent API support)
   */
  public function setFunctionName($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->function_name !== $v)
    {
      $this->function_name = $v;
      $this->modifiedColumns[] = iceModelJobRunPeer::FUNCTION_NAME;
    }

    return $this;
  }

  /**
   * Set the value of [completed] column.
   * 
   * @param      int $v new value
   * @return     iceModelJobRun The current object (for fluent API support)
   */
  public function setCompleted($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->completed !== $v)
    {
      $this->completed = $v;
      $this->modifiedColumns[] = iceModelJobRunPeer::COMPLETED;
    }

    return $this;
  }

  /**
   * Set the value of [total] column.
   * 
   * @param      int $v new value
   * @return     iceModelJobRun The current object (for fluent API support)
   */
  public function setTotal($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->total !== $v)
    {
      $this->total = $v;
      $this->modifiedColumns[] = iceModelJobRunPeer::TOTAL;
    }

    return $this;
  }

  /**
   * Set the value of [status] column.
   * 
   * @param      string $v new value
   * @return     iceModelJobRun The current object (for fluent API support)
   */
  public function setStatus($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->status !== $v)
    {
      $this->status = $v;
      $this->modifiedColumns[] = iceModelJobRunPeer::STATUS;
    }

    return $this;
  }

  /**
   * Set the value of [cpu_stats] column.
   * 
   * @param      string $v new value
   * @return     iceModelJobRun The current object (for fluent API support)
   */
  public function setCpuStats($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->cpu_stats !== $v)
    {
      $this->cpu_stats = $v;
      $this->modifiedColumns[] = iceModelJobRunPeer::CPU_STATS;
    }

    return $this;
  }

  /**
   * Set the value of [memory_stats] column.
   * 
   * @param      string $v new value
   * @return     iceModelJobRun The current object (for fluent API support)
   */
  public function setMemoryStats($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->memory_stats !== $v)
    {
      $this->memory_stats = $v;
      $this->modifiedColumns[] = iceModelJobRunPeer::MEMORY_STATS;
    }

    return $this;
  }

  /**
   * Set the value of [loadavg_stats] column.
   * 
   * @param      string $v new value
   * @return     iceModelJobRun The current object (for fluent API support)
   */
  public function setLoadavgStats($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->loadavg_stats !== $v)
    {
      $this->loadavg_stats = $v;
      $this->modifiedColumns[] = iceModelJobRunPeer::LOADAVG_STATS;
    }

    return $this;
  }

  /**
   * Set the value of [priority] column.
   * 
   * @param      int $v new value
   * @return     iceModelJobRun The current object (for fluent API support)
   */
  public function setPriority($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->priority !== $v)
    {
      $this->priority = $v;
      $this->modifiedColumns[] = iceModelJobRunPeer::PRIORITY;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_background] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     iceModelJobRun The current object (for fluent API support)
   */
  public function setIsBackground($v)
  {
    if ($v !== null)
    {
      if (is_string($v))
      {
        $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
      }
      else
      {
        $v = (boolean) $v;
      }
    }

    if ($this->is_background !== $v)
    {
      $this->is_background = $v;
      $this->modifiedColumns[] = iceModelJobRunPeer::IS_BACKGROUND;
    }

    return $this;
  }

  /**
   * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     iceModelJobRun The current object (for fluent API support)
   */
  public function setUpdatedAt($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->updated_at !== null || $dt !== null)
    {
      $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->updated_at = $newDateAsString;
        $this->modifiedColumns[] = iceModelJobRunPeer::UPDATED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     iceModelJobRun The current object (for fluent API support)
   */
  public function setCreatedAt($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->created_at !== null || $dt !== null)
    {
      $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->created_at = $newDateAsString;
        $this->modifiedColumns[] = iceModelJobRunPeer::CREATED_AT;
      }
    }

    return $this;
  }

  /**
   * Indicates whether the columns in this object are only set to default values.
   *
   * This method can be used in conjunction with isModified() to indicate whether an object is both
   * modified _and_ has some values set which are non-default.
   *
   * @return     boolean Whether the columns in this object are only been set with default values.
   */
  public function hasOnlyDefaultValues()
  {
      if ($this->context !== 'global')
      {
        return false;
      }

      if ($this->completed !== 0)
      {
        return false;
      }

      if ($this->total !== 0)
      {
        return false;
      }

      if ($this->status !== 'pending')
      {
        return false;
      }

      if ($this->priority !== 1)
      {
        return false;
      }

      if ($this->is_background !== false)
      {
        return false;
      }

    // otherwise, everything was equal, so return TRUE
    return true;
  }

  /**
   * Hydrates (populates) the object variables with values from the database resultset.
   *
   * An offset (0-based "start column") is specified so that objects can be hydrated
   * with a subset of the columns in the resultset rows.  This is needed, for example,
   * for results of JOIN queries where the resultset row includes columns from two or
   * more tables.
   *
   * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
   * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
   * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
   * @return     int next starting column
   * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
   */
  public function hydrate($row, $startcol = 0, $rehydrate = false)
  {
    try
    {

      $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
      $this->crontab_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
      $this->context = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->unique_key = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->job_handle = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->function_name = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
      $this->completed = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
      $this->total = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
      $this->status = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
      $this->cpu_stats = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
      $this->memory_stats = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
      $this->loadavg_stats = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
      $this->priority = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
      $this->is_background = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
      $this->updated_at = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
      $this->created_at = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 16; // 16 = iceModelJobRunPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating iceModelJobRun object", $e);
    }
  }

  /**
   * Checks and repairs the internal consistency of the object.
   *
   * This method is executed after an already-instantiated object is re-hydrated
   * from the database.  It exists to check any foreign keys to make sure that
   * the objects related to the current object are correct based on foreign key.
   *
   * You can override this method in the stub class, but you should always invoke
   * the base method from the overridden method (i.e. parent::ensureConsistency()),
   * in case your model changes.
   *
   * @throws     PropelException
   */
  public function ensureConsistency()
  {

  }

  /**
   * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
   *
   * This will only work if the object has been saved and has a valid primary key set.
   *
   * @param      boolean $deep (optional) Whether to also de-associated any related objects.
   * @param      PropelPDO $con (optional) The PropelPDO connection to use.
   * @return     void
   * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
   */
  public function reload($deep = false, PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("Cannot reload a deleted object.");
    }

    if ($this->isNew())
    {
      throw new PropelException("Cannot reload an unsaved object.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelJobRunPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = iceModelJobRunPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

    }
  }

  /**
   * Removes this object from datastore and sets delete attribute.
   *
   * @param      PropelPDO $con
   * @return     void
   * @throws     PropelException
   * @see        BaseObject::setDeleted()
   * @see        BaseObject::isDeleted()
   */
  public function delete(PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("This object has already been deleted.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelJobRunPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = iceModelJobRunQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelJobRun:delete:pre') as $callable)
      {
        if (call_user_func($callable, $this, $con))
        {
          $con->commit();
          return;
        }
      }

      if ($ret)
      {
        $deleteQuery->delete($con);
        $this->postDelete($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseiceModelJobRun:delete:post') as $callable)
        {
          call_user_func($callable, $this, $con);
        }

        $con->commit();
        $this->setDeleted(true);
      }
      else
      {
        $con->commit();
      }
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Persists this object to the database.
   *
   * If the object is new, it inserts it; otherwise an update is performed.
   * All modified related objects will also be persisted in the doSave()
   * method.  This method wraps all precipitate database operations in a
   * single transaction.
   *
   * @param      PropelPDO $con
   * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
   * @throws     PropelException
   * @see        doSave()
   */
  public function save(PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("You cannot save an object that has been deleted.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelJobRunPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelJobRun:save:pre') as $callable)
      {
        if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
        {
          $con->commit();
          return $affectedRows;
        }
      }

      // symfony_timestampable behavior
      if ($this->isModified() && !$this->isColumnModified(iceModelJobRunPeer::UPDATED_AT))
      {
        $this->setUpdatedAt(time());
      }
      if ($isInsert)
      {
        $ret = $ret && $this->preInsert($con);
        // symfony_timestampable behavior
        if (!$this->isColumnModified(iceModelJobRunPeer::CREATED_AT))
        {
          $this->setCreatedAt(time());
        }

      }
      else
      {
        $ret = $ret && $this->preUpdate($con);
      }
      if ($ret)
      {
        $affectedRows = $this->doSave($con);
        if ($isInsert)
        {
          $this->postInsert($con);
        }
        else
        {
          $this->postUpdate($con);
        }
        $this->postSave($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseiceModelJobRun:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        iceModelJobRunPeer::addInstanceToPool($this);
      }
      else
      {
        $affectedRows = 0;
      }
      $con->commit();
      return $affectedRows;
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Performs the work of inserting or updating the row in the database.
   *
   * If the object is new, it inserts it; otherwise an update is performed.
   * All related objects are also updated in this method.
   *
   * @param      PropelPDO $con
   * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
   * @throws     PropelException
   * @see        save()
   */
  protected function doSave(PropelPDO $con)
  {
    $affectedRows = 0; // initialize var to track total num of affected rows
    if (!$this->alreadyInSave)
    {
      $this->alreadyInSave = true;

      if ($this->isNew() )
      {
        $this->modifiedColumns[] = iceModelJobRunPeer::ID;
      }

      // If this object has been modified, then save it to the database.
      if ($this->isModified())
      {
        if ($this->isNew())
        {
          $criteria = $this->buildCriteria();
          if ($criteria->keyContainsValue(iceModelJobRunPeer::ID) )
          {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.iceModelJobRunPeer::ID.')');
          }

          $pk = BasePeer::doInsert($criteria, $con);
          $affectedRows = 1;
          $this->setId($pk);  //[IMV] update autoincrement primary key
          $this->setNew(false);
        }
        else
        {
          $affectedRows = iceModelJobRunPeer::doUpdate($this, $con);
        }

        $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
      }

      $this->alreadyInSave = false;

    }
    return $affectedRows;
  }

  /**
   * Array of ValidationFailed objects.
   * @var        array ValidationFailed[]
   */
  protected $validationFailures = array();

  /**
   * Gets any ValidationFailed objects that resulted from last call to validate().
   *
   *
   * @return     array ValidationFailed[]
   * @see        validate()
   */
  public function getValidationFailures()
  {
    return $this->validationFailures;
  }

  /**
   * Validates the objects modified field values and all objects related to this table.
   *
   * If $columns is either a column name or an array of column names
   * only those columns are validated.
   *
   * @param      mixed $columns Column name or an array of column names.
   * @return     boolean Whether all columns pass validation.
   * @see        doValidate()
   * @see        getValidationFailures()
   */
  public function validate($columns = null)
  {
    $res = $this->doValidate($columns);
    if ($res === true)
    {
      $this->validationFailures = array();
      return true;
    }
    else
    {
      $this->validationFailures = $res;
      return false;
    }
  }

  /**
   * This function performs the validation work for complex object models.
   *
   * In addition to checking the current object, all related objects will
   * also be validated.  If all pass then <code>true</code> is returned; otherwise
   * an aggreagated array of ValidationFailed objects will be returned.
   *
   * @param      array $columns Array of column names to validate.
   * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
   */
  protected function doValidate($columns = null)
  {
    if (!$this->alreadyInValidation)
    {
      $this->alreadyInValidation = true;
      $retval = null;

      $failureMap = array();


      if (($retval = iceModelJobRunPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }



      $this->alreadyInValidation = false;
    }

    return (!empty($failureMap) ? $failureMap : true);
  }

  /**
   * Retrieves a field from the object by name passed in as a string.
   *
   * @param      string $name name
   * @param      string $type The type of fieldname the $name is of:
   *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     mixed Value of field.
   */
  public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
  {
    $pos = iceModelJobRunPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
    $field = $this->getByPosition($pos);
    return $field;
  }

  /**
   * Retrieves a field from the object by Position as specified in the xml schema.
   * Zero-based.
   *
   * @param      int $pos position in xml schema
   * @return     mixed Value of field at $pos
   */
  public function getByPosition($pos)
  {
    switch($pos)
    {
      case 0:
        return $this->getId();
        break;
      case 1:
        return $this->getCrontabId();
        break;
      case 2:
        return $this->getContext();
        break;
      case 3:
        return $this->getUniqueKey();
        break;
      case 4:
        return $this->getJobHandle();
        break;
      case 5:
        return $this->getFunctionName();
        break;
      case 6:
        return $this->getCompleted();
        break;
      case 7:
        return $this->getTotal();
        break;
      case 8:
        return $this->getStatus();
        break;
      case 9:
        return $this->getCpuStats();
        break;
      case 10:
        return $this->getMemoryStats();
        break;
      case 11:
        return $this->getLoadavgStats();
        break;
      case 12:
        return $this->getPriority();
        break;
      case 13:
        return $this->getIsBackground();
        break;
      case 14:
        return $this->getUpdatedAt();
        break;
      case 15:
        return $this->getCreatedAt();
        break;
      default:
        return null;
        break;
    }
  }

  /**
   * Exports the object as an array.
   *
   * You can specify the key type of the array by passing one of the class
   * type constants.
   *
   * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
   *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
   *                    Defaults to BasePeer::TYPE_PHPNAME.
   * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
   * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
   *
   * @return    array an associative array containing the field names (as keys) and field values
   */
  public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
  {
    if (isset($alreadyDumpedObjects['iceModelJobRun'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['iceModelJobRun'][$this->getPrimaryKey()] = true;
    $keys = iceModelJobRunPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getCrontabId(),
      $keys[2] => $this->getContext(),
      $keys[3] => $this->getUniqueKey(),
      $keys[4] => $this->getJobHandle(),
      $keys[5] => $this->getFunctionName(),
      $keys[6] => $this->getCompleted(),
      $keys[7] => $this->getTotal(),
      $keys[8] => $this->getStatus(),
      $keys[9] => $this->getCpuStats(),
      $keys[10] => $this->getMemoryStats(),
      $keys[11] => $this->getLoadavgStats(),
      $keys[12] => $this->getPriority(),
      $keys[13] => $this->getIsBackground(),
      $keys[14] => $this->getUpdatedAt(),
      $keys[15] => $this->getCreatedAt(),
    );
    return $result;
  }

  /**
   * Sets a field from the object by name passed in as a string.
   *
   * @param      string $name peer name
   * @param      mixed $value field value
   * @param      string $type The type of fieldname the $name is of:
   *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     void
   */
  public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
  {
    $pos = iceModelJobRunPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
    return $this->setByPosition($pos, $value);
  }

  /**
   * Sets a field from the object by Position as specified in the xml schema.
   * Zero-based.
   *
   * @param      int $pos position in xml schema
   * @param      mixed $value field value
   * @return     void
   */
  public function setByPosition($pos, $value)
  {
    switch($pos)
    {
      case 0:
        $this->setId($value);
        break;
      case 1:
        $this->setCrontabId($value);
        break;
      case 2:
        $this->setContext($value);
        break;
      case 3:
        $this->setUniqueKey($value);
        break;
      case 4:
        $this->setJobHandle($value);
        break;
      case 5:
        $this->setFunctionName($value);
        break;
      case 6:
        $this->setCompleted($value);
        break;
      case 7:
        $this->setTotal($value);
        break;
      case 8:
        $this->setStatus($value);
        break;
      case 9:
        $this->setCpuStats($value);
        break;
      case 10:
        $this->setMemoryStats($value);
        break;
      case 11:
        $this->setLoadavgStats($value);
        break;
      case 12:
        $this->setPriority($value);
        break;
      case 13:
        $this->setIsBackground($value);
        break;
      case 14:
        $this->setUpdatedAt($value);
        break;
      case 15:
        $this->setCreatedAt($value);
        break;
    }
  }

  /**
   * Populates the object using an array.
   *
   * This is particularly useful when populating an object from one of the
   * request arrays (e.g. $_POST).  This method goes through the column
   * names, checking to see whether a matching key exists in populated
   * array. If so the setByName() method is called for that column.
   *
   * You can specify the key type of the array by additionally passing one
   * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
   * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
   * The default key type is the column's phpname (e.g. 'AuthorId')
   *
   * @param      array  $arr     An array to populate the object from.
   * @param      string $keyType The type of keys the array uses.
   * @return     void
   */
  public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
  {
    $keys = iceModelJobRunPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setCrontabId($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setContext($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setUniqueKey($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setJobHandle($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setFunctionName($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setCompleted($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setTotal($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setStatus($arr[$keys[8]]);
    if (array_key_exists($keys[9], $arr)) $this->setCpuStats($arr[$keys[9]]);
    if (array_key_exists($keys[10], $arr)) $this->setMemoryStats($arr[$keys[10]]);
    if (array_key_exists($keys[11], $arr)) $this->setLoadavgStats($arr[$keys[11]]);
    if (array_key_exists($keys[12], $arr)) $this->setPriority($arr[$keys[12]]);
    if (array_key_exists($keys[13], $arr)) $this->setIsBackground($arr[$keys[13]]);
    if (array_key_exists($keys[14], $arr)) $this->setUpdatedAt($arr[$keys[14]]);
    if (array_key_exists($keys[15], $arr)) $this->setCreatedAt($arr[$keys[15]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(iceModelJobRunPeer::DATABASE_NAME);

    if ($this->isColumnModified(iceModelJobRunPeer::ID)) $criteria->add(iceModelJobRunPeer::ID, $this->id);
    if ($this->isColumnModified(iceModelJobRunPeer::CRONTAB_ID)) $criteria->add(iceModelJobRunPeer::CRONTAB_ID, $this->crontab_id);
    if ($this->isColumnModified(iceModelJobRunPeer::CONTEXT)) $criteria->add(iceModelJobRunPeer::CONTEXT, $this->context);
    if ($this->isColumnModified(iceModelJobRunPeer::UNIQUE_KEY)) $criteria->add(iceModelJobRunPeer::UNIQUE_KEY, $this->unique_key);
    if ($this->isColumnModified(iceModelJobRunPeer::JOB_HANDLE)) $criteria->add(iceModelJobRunPeer::JOB_HANDLE, $this->job_handle);
    if ($this->isColumnModified(iceModelJobRunPeer::FUNCTION_NAME)) $criteria->add(iceModelJobRunPeer::FUNCTION_NAME, $this->function_name);
    if ($this->isColumnModified(iceModelJobRunPeer::COMPLETED)) $criteria->add(iceModelJobRunPeer::COMPLETED, $this->completed);
    if ($this->isColumnModified(iceModelJobRunPeer::TOTAL)) $criteria->add(iceModelJobRunPeer::TOTAL, $this->total);
    if ($this->isColumnModified(iceModelJobRunPeer::STATUS)) $criteria->add(iceModelJobRunPeer::STATUS, $this->status);
    if ($this->isColumnModified(iceModelJobRunPeer::CPU_STATS)) $criteria->add(iceModelJobRunPeer::CPU_STATS, $this->cpu_stats);
    if ($this->isColumnModified(iceModelJobRunPeer::MEMORY_STATS)) $criteria->add(iceModelJobRunPeer::MEMORY_STATS, $this->memory_stats);
    if ($this->isColumnModified(iceModelJobRunPeer::LOADAVG_STATS)) $criteria->add(iceModelJobRunPeer::LOADAVG_STATS, $this->loadavg_stats);
    if ($this->isColumnModified(iceModelJobRunPeer::PRIORITY)) $criteria->add(iceModelJobRunPeer::PRIORITY, $this->priority);
    if ($this->isColumnModified(iceModelJobRunPeer::IS_BACKGROUND)) $criteria->add(iceModelJobRunPeer::IS_BACKGROUND, $this->is_background);
    if ($this->isColumnModified(iceModelJobRunPeer::UPDATED_AT)) $criteria->add(iceModelJobRunPeer::UPDATED_AT, $this->updated_at);
    if ($this->isColumnModified(iceModelJobRunPeer::CREATED_AT)) $criteria->add(iceModelJobRunPeer::CREATED_AT, $this->created_at);

    return $criteria;
  }

  /**
   * Builds a Criteria object containing the primary key for this object.
   *
   * Unlike buildCriteria() this method includes the primary key values regardless
   * of whether or not they have been modified.
   *
   * @return     Criteria The Criteria object containing value(s) for primary key(s).
   */
  public function buildPkeyCriteria()
  {
    $criteria = new Criteria(iceModelJobRunPeer::DATABASE_NAME);
    $criteria->add(iceModelJobRunPeer::ID, $this->id);

    return $criteria;
  }

  /**
   * Returns the primary key for this object (row).
   * @return     int
   */
  public function getPrimaryKey()
  {
    return $this->getId();
  }

  /**
   * Generic method to set the primary key (id column).
   *
   * @param      int $key Primary key.
   * @return     void
   */
  public function setPrimaryKey($key)
  {
    $this->setId($key);
  }

  /**
   * Returns true if the primary key for this object is null.
   * @return     boolean
   */
  public function isPrimaryKeyNull()
  {
    return null === $this->getId();
  }

  /**
   * Sets contents of passed object to values from current object.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      object $copyObj An object of iceModelJobRun (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setCrontabId($this->getCrontabId());
    $copyObj->setContext($this->getContext());
    $copyObj->setUniqueKey($this->getUniqueKey());
    $copyObj->setJobHandle($this->getJobHandle());
    $copyObj->setFunctionName($this->getFunctionName());
    $copyObj->setCompleted($this->getCompleted());
    $copyObj->setTotal($this->getTotal());
    $copyObj->setStatus($this->getStatus());
    $copyObj->setCpuStats($this->getCpuStats());
    $copyObj->setMemoryStats($this->getMemoryStats());
    $copyObj->setLoadavgStats($this->getLoadavgStats());
    $copyObj->setPriority($this->getPriority());
    $copyObj->setIsBackground($this->getIsBackground());
    $copyObj->setUpdatedAt($this->getUpdatedAt());
    $copyObj->setCreatedAt($this->getCreatedAt());
    if ($makeNew)
    {
      $copyObj->setNew(true);
      $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
    }
  }

  /**
   * Makes a copy of this object that will be inserted as a new row in table when saved.
   * It creates a new object filling in the simple attributes, but skipping any primary
   * keys that are defined for the table.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @return     iceModelJobRun Clone of current object.
   * @throws     PropelException
   */
  public function copy($deepCopy = false)
  {
    // we use get_class(), because this might be a subclass
    $clazz = get_class($this);
    $copyObj = new $clazz();
    $this->copyInto($copyObj, $deepCopy);
    return $copyObj;
  }

  /**
   * Returns a peer instance associated with this om.
   *
   * Since Peer classes are not to have any instance attributes, this method returns the
   * same instance for all member of this class. The method could therefore
   * be static, but this would prevent one from overriding the behavior.
   *
   * @return     iceModelJobRunPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new iceModelJobRunPeer();
    }
    return self::$peer;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->crontab_id = null;
    $this->context = null;
    $this->unique_key = null;
    $this->job_handle = null;
    $this->function_name = null;
    $this->completed = null;
    $this->total = null;
    $this->status = null;
    $this->cpu_stats = null;
    $this->memory_stats = null;
    $this->loadavg_stats = null;
    $this->priority = null;
    $this->is_background = null;
    $this->updated_at = null;
    $this->created_at = null;
    $this->alreadyInSave = false;
    $this->alreadyInValidation = false;
    $this->clearAllReferences();
    $this->applyDefaultValues();
    $this->resetModified();
    $this->setNew(true);
    $this->setDeleted(false);
  }

  /**
   * Resets all references to other model objects or collections of model objects.
   *
   * This method is a user-space workaround for PHP's inability to garbage collect
   * objects with circular references (even in PHP 5.3). This is currently necessary
   * when using Propel in certain daemon or large-volumne/high-memory operations.
   *
   * @param      boolean $deep Whether to also clear the references on all referrer objects.
   */
  public function clearAllReferences($deep = false)
  {
    if ($deep)
    {
    }

  }

  /**
   * Return the string representation of this object
   *
   * @return string
   */
  public function __toString()
  {
    return (string) $this->exportTo(iceModelJobRunPeer::DEFAULT_STRING_FORMAT);
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseiceModelJobRun:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
