<?php


/**
 * Base static class for performing query and update operations on the 'job_run' table.
 *
 * 
 *
 * @package    propel.generator.plugins.iceJobQueuePlugin.lib.model.om
 */
abstract class BaseiceModelJobRunPeer
{

  /** the default database name for this class */
  const DATABASE_NAME = 'icepique';

  /** the table name for this class */
  const TABLE_NAME = 'job_run';

  /** the related Propel class for this table */
  const OM_CLASS = 'iceModelJobRun';

  /** A class that can be returned by this peer. */
  const CLASS_DEFAULT = 'plugins.iceJobQueuePlugin.lib.model.iceModelJobRun';

  /** the related TableMap class for this table */
  const TM_CLASS = 'iceModelJobRunTableMap';

  /** The total number of columns. */
  const NUM_COLUMNS = 16;

  /** The number of lazy-loaded columns. */
  const NUM_LAZY_LOAD_COLUMNS = 0;

  /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
  const NUM_HYDRATE_COLUMNS = 16;

  /** the column name for the ID field */
  const ID = 'job_run.ID';

  /** the column name for the CRONTAB_ID field */
  const CRONTAB_ID = 'job_run.CRONTAB_ID';

  /** the column name for the CONTEXT field */
  const CONTEXT = 'job_run.CONTEXT';

  /** the column name for the UNIQUE_KEY field */
  const UNIQUE_KEY = 'job_run.UNIQUE_KEY';

  /** the column name for the JOB_HANDLE field */
  const JOB_HANDLE = 'job_run.JOB_HANDLE';

  /** the column name for the FUNCTION_NAME field */
  const FUNCTION_NAME = 'job_run.FUNCTION_NAME';

  /** the column name for the COMPLETED field */
  const COMPLETED = 'job_run.COMPLETED';

  /** the column name for the TOTAL field */
  const TOTAL = 'job_run.TOTAL';

  /** the column name for the STATUS field */
  const STATUS = 'job_run.STATUS';

  /** the column name for the CPU_STATS field */
  const CPU_STATS = 'job_run.CPU_STATS';

  /** the column name for the MEMORY_STATS field */
  const MEMORY_STATS = 'job_run.MEMORY_STATS';

  /** the column name for the LOADAVG_STATS field */
  const LOADAVG_STATS = 'job_run.LOADAVG_STATS';

  /** the column name for the PRIORITY field */
  const PRIORITY = 'job_run.PRIORITY';

  /** the column name for the IS_BACKGROUND field */
  const IS_BACKGROUND = 'job_run.IS_BACKGROUND';

  /** the column name for the UPDATED_AT field */
  const UPDATED_AT = 'job_run.UPDATED_AT';

  /** the column name for the CREATED_AT field */
  const CREATED_AT = 'job_run.CREATED_AT';

  /** The default string format for model objects of the related table **/
  const DEFAULT_STRING_FORMAT = 'YAML';

  /**
   * An identiy map to hold any loaded instances of iceModelJobRun objects.
   * This must be public so that other peer classes can access this when hydrating from JOIN
   * queries.
   * @var        array iceModelJobRun[]
   */
  public static $instances = array();


  /**
   * holds an array of fieldnames
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
   */
  protected static $fieldNames = array (
    BasePeer::TYPE_PHPNAME => array ('Id', 'CrontabId', 'Context', 'UniqueKey', 'JobHandle', 'FunctionName', 'Completed', 'Total', 'Status', 'CpuStats', 'MemoryStats', 'LoadavgStats', 'Priority', 'IsBackground', 'UpdatedAt', 'CreatedAt', ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'crontabId', 'context', 'uniqueKey', 'jobHandle', 'functionName', 'completed', 'total', 'status', 'cpuStats', 'memoryStats', 'loadavgStats', 'priority', 'isBackground', 'updatedAt', 'createdAt', ),
    BasePeer::TYPE_COLNAME => array (self::ID, self::CRONTAB_ID, self::CONTEXT, self::UNIQUE_KEY, self::JOB_HANDLE, self::FUNCTION_NAME, self::COMPLETED, self::TOTAL, self::STATUS, self::CPU_STATS, self::MEMORY_STATS, self::LOADAVG_STATS, self::PRIORITY, self::IS_BACKGROUND, self::UPDATED_AT, self::CREATED_AT, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID', 'CRONTAB_ID', 'CONTEXT', 'UNIQUE_KEY', 'JOB_HANDLE', 'FUNCTION_NAME', 'COMPLETED', 'TOTAL', 'STATUS', 'CPU_STATS', 'MEMORY_STATS', 'LOADAVG_STATS', 'PRIORITY', 'IS_BACKGROUND', 'UPDATED_AT', 'CREATED_AT', ),
    BasePeer::TYPE_FIELDNAME => array ('id', 'crontab_id', 'context', 'unique_key', 'job_handle', 'function_name', 'completed', 'total', 'status', 'cpu_stats', 'memory_stats', 'loadavg_stats', 'priority', 'is_background', 'updated_at', 'created_at', ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
  );

  /**
   * holds an array of keys for quick access to the fieldnames array
   *
   * first dimension keys are the type constants
   * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
   */
  protected static $fieldKeys = array (
    BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'CrontabId' => 1, 'Context' => 2, 'UniqueKey' => 3, 'JobHandle' => 4, 'FunctionName' => 5, 'Completed' => 6, 'Total' => 7, 'Status' => 8, 'CpuStats' => 9, 'MemoryStats' => 10, 'LoadavgStats' => 11, 'Priority' => 12, 'IsBackground' => 13, 'UpdatedAt' => 14, 'CreatedAt' => 15, ),
    BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'crontabId' => 1, 'context' => 2, 'uniqueKey' => 3, 'jobHandle' => 4, 'functionName' => 5, 'completed' => 6, 'total' => 7, 'status' => 8, 'cpuStats' => 9, 'memoryStats' => 10, 'loadavgStats' => 11, 'priority' => 12, 'isBackground' => 13, 'updatedAt' => 14, 'createdAt' => 15, ),
    BasePeer::TYPE_COLNAME => array (self::ID => 0, self::CRONTAB_ID => 1, self::CONTEXT => 2, self::UNIQUE_KEY => 3, self::JOB_HANDLE => 4, self::FUNCTION_NAME => 5, self::COMPLETED => 6, self::TOTAL => 7, self::STATUS => 8, self::CPU_STATS => 9, self::MEMORY_STATS => 10, self::LOADAVG_STATS => 11, self::PRIORITY => 12, self::IS_BACKGROUND => 13, self::UPDATED_AT => 14, self::CREATED_AT => 15, ),
    BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'CRONTAB_ID' => 1, 'CONTEXT' => 2, 'UNIQUE_KEY' => 3, 'JOB_HANDLE' => 4, 'FUNCTION_NAME' => 5, 'COMPLETED' => 6, 'TOTAL' => 7, 'STATUS' => 8, 'CPU_STATS' => 9, 'MEMORY_STATS' => 10, 'LOADAVG_STATS' => 11, 'PRIORITY' => 12, 'IS_BACKGROUND' => 13, 'UPDATED_AT' => 14, 'CREATED_AT' => 15, ),
    BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'crontab_id' => 1, 'context' => 2, 'unique_key' => 3, 'job_handle' => 4, 'function_name' => 5, 'completed' => 6, 'total' => 7, 'status' => 8, 'cpu_stats' => 9, 'memory_stats' => 10, 'loadavg_stats' => 11, 'priority' => 12, 'is_background' => 13, 'updated_at' => 14, 'created_at' => 15, ),
    BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
  );

  /**
   * Translates a fieldname to another type
   *
   * @param      string $name field name
   * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @param      string $toType   One of the class type constants
   * @return     string translated name of the field.
   * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
   */
  static public function translateFieldName($name, $fromType, $toType)
  {
    $toNames = self::getFieldNames($toType);
    $key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
    if ($key === null)
    {
      throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
    }
    return $toNames[$key];
  }

  /**
   * Returns an array of field names.
   *
   * @param      string $type The type of fieldnames to return:
   *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     array A list of field names
   */

  static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
  {
    if (!array_key_exists($type, self::$fieldNames))
    {
      throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
    }
    return self::$fieldNames[$type];
  }

  /**
   * Convenience method which changes table.column to alias.column.
   *
   * Using this method you can maintain SQL abstraction while using column aliases.
   * <code>
   *    $c->addAlias("alias1", TablePeer::TABLE_NAME);
   *    $c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
   * </code>
   * @param      string $alias The alias for the current table.
   * @param      string $column The column name for current table. (i.e. iceModelJobRunPeer::COLUMN_NAME).
   * @return     string
   */
  public static function alias($alias, $column)
  {
    return str_replace(iceModelJobRunPeer::TABLE_NAME.'.', $alias.'.', $column);
  }

  /**
   * Add all the columns needed to create a new object.
   *
   * Note: any columns that were marked with lazyLoad="true" in the
   * XML schema will not be added to the select list and only loaded
   * on demand.
   *
   * @param      Criteria $criteria object containing the columns to add.
   * @param      string   $alias    optional table alias
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function addSelectColumns(Criteria $criteria, $alias = null)
  {
    if (null === $alias)
    {
      $criteria->addSelectColumn(iceModelJobRunPeer::ID);
      $criteria->addSelectColumn(iceModelJobRunPeer::CRONTAB_ID);
      $criteria->addSelectColumn(iceModelJobRunPeer::CONTEXT);
      $criteria->addSelectColumn(iceModelJobRunPeer::UNIQUE_KEY);
      $criteria->addSelectColumn(iceModelJobRunPeer::JOB_HANDLE);
      $criteria->addSelectColumn(iceModelJobRunPeer::FUNCTION_NAME);
      $criteria->addSelectColumn(iceModelJobRunPeer::COMPLETED);
      $criteria->addSelectColumn(iceModelJobRunPeer::TOTAL);
      $criteria->addSelectColumn(iceModelJobRunPeer::STATUS);
      $criteria->addSelectColumn(iceModelJobRunPeer::CPU_STATS);
      $criteria->addSelectColumn(iceModelJobRunPeer::MEMORY_STATS);
      $criteria->addSelectColumn(iceModelJobRunPeer::LOADAVG_STATS);
      $criteria->addSelectColumn(iceModelJobRunPeer::PRIORITY);
      $criteria->addSelectColumn(iceModelJobRunPeer::IS_BACKGROUND);
      $criteria->addSelectColumn(iceModelJobRunPeer::UPDATED_AT);
      $criteria->addSelectColumn(iceModelJobRunPeer::CREATED_AT);
    }
    else
    {
      $criteria->addSelectColumn($alias . '.ID');
      $criteria->addSelectColumn($alias . '.CRONTAB_ID');
      $criteria->addSelectColumn($alias . '.CONTEXT');
      $criteria->addSelectColumn($alias . '.UNIQUE_KEY');
      $criteria->addSelectColumn($alias . '.JOB_HANDLE');
      $criteria->addSelectColumn($alias . '.FUNCTION_NAME');
      $criteria->addSelectColumn($alias . '.COMPLETED');
      $criteria->addSelectColumn($alias . '.TOTAL');
      $criteria->addSelectColumn($alias . '.STATUS');
      $criteria->addSelectColumn($alias . '.CPU_STATS');
      $criteria->addSelectColumn($alias . '.MEMORY_STATS');
      $criteria->addSelectColumn($alias . '.LOADAVG_STATS');
      $criteria->addSelectColumn($alias . '.PRIORITY');
      $criteria->addSelectColumn($alias . '.IS_BACKGROUND');
      $criteria->addSelectColumn($alias . '.UPDATED_AT');
      $criteria->addSelectColumn($alias . '.CREATED_AT');
    }
  }

  /**
   * Returns the number of rows matching criteria.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
   * @param      PropelPDO $con
   * @return     int Number of matching rows.
   */
  public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
  {
    // we may modify criteria, so copy it first
    $criteria = clone $criteria;

    // We need to set the primary table name, since in the case that there are no WHERE columns
    // it will be impossible for the BasePeer::createSelectSql() method to determine which
    // tables go into the FROM clause.
    $criteria->setPrimaryTableName(iceModelJobRunPeer::TABLE_NAME);

    if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers()))
    {
      $criteria->setDistinct();
    }

    if (!$criteria->hasSelectClause())
    {
      iceModelJobRunPeer::addSelectColumns($criteria);
    }

    $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
    $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelJobRunPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelJobRunPeer', $criteria, $con);
    }

    // BasePeer returns a PDOStatement
    $stmt = BasePeer::doCount($criteria, $con);

    if ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $count = (int) $row[0];
    }
    else
    {
      $count = 0; // no rows returned; we infer that means 0 matches.
    }
    $stmt->closeCursor();
    return $count;
  }
  /**
   * Selects one object from the DB.
   *
   * @param      Criteria $criteria object used to create the SELECT statement.
   * @param      PropelPDO $con
   * @return     iceModelJobRun
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
  {
    $critcopy = clone $criteria;
    $critcopy->setLimit(1);
    $objects = iceModelJobRunPeer::doSelect($critcopy, $con);
    if ($objects)
    {
      return $objects[0];
    }
    return null;
  }
  /**
   * Selects several row from the DB.
   *
   * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
   * @param      PropelPDO $con
   * @return     array Array of selected Objects
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doSelect(Criteria $criteria, PropelPDO $con = null)
  {
    return iceModelJobRunPeer::populateObjects(iceModelJobRunPeer::doSelectStmt($criteria, $con));
  }
  /**
   * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
   *
   * Use this method directly if you want to work with an executed statement durirectly (for example
   * to perform your own object hydration).
   *
   * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
   * @param      PropelPDO $con The connection to use
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   * @return     PDOStatement The executed PDOStatement object.
   * @see        BasePeer::doSelect()
   */
  public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelJobRunPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    if (!$criteria->hasSelectClause())
    {
      $criteria = clone $criteria;
      iceModelJobRunPeer::addSelectColumns($criteria);
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);
    // symfony_behaviors behavior
    foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
    {
      call_user_func($sf_hook, 'BaseiceModelJobRunPeer', $criteria, $con);
    }


    // BasePeer returns a PDOStatement
    return BasePeer::doSelect($criteria, $con);
  }
  /**
   * Adds an object to the instance pool.
   *
   * Propel keeps cached copies of objects in an instance pool when they are retrieved
   * from the database.  In some cases -- especially when you override doSelect*()
   * methods in your stub classes -- you may need to explicitly add objects
   * to the cache in order to ensure that the same objects are always returned by doSelect*()
   * and retrieveByPK*() calls.
   *
   * @param      iceModelJobRun $value A iceModelJobRun object.
   * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
   */
  public static function addInstanceToPool($obj, $key = null)
  {
    if (Propel::isInstancePoolingEnabled())
    {
      if ($key === null)
      {
        $key = (string) $obj->getId();
      }
      self::$instances[$key] = $obj;
    }
  }

  /**
   * Removes an object from the instance pool.
   *
   * Propel keeps cached copies of objects in an instance pool when they are retrieved
   * from the database.  In some cases -- especially when you override doDelete
   * methods in your stub classes -- you may need to explicitly remove objects
   * from the cache in order to prevent returning objects that no longer exist.
   *
   * @param      mixed $value A iceModelJobRun object or a primary key value.
   */
  public static function removeInstanceFromPool($value)
  {
    if (Propel::isInstancePoolingEnabled() && $value !== null)
    {
      if (is_object($value) && $value instanceof iceModelJobRun)
      {
        $key = (string) $value->getId();
      }
      elseif (is_scalar($value))
      {
        // assume we've been passed a primary key
        $key = (string) $value;
      }
      else
      {
        $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or iceModelJobRun object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
        throw $e;
      }

      unset(self::$instances[$key]);
    }
  }

  /**
   * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
   *
   * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
   * a multi-column primary key, a serialize()d version of the primary key will be returned.
   *
   * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
   * @return     iceModelJobRun Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
   * @see        getPrimaryKeyHash()
   */
  public static function getInstanceFromPool($key)
  {
    if (Propel::isInstancePoolingEnabled())
    {
      if (isset(self::$instances[$key]))
      {
        return self::$instances[$key];
      }
    }
    return null; // just to be explicit
  }
  
  /**
   * Clear the instance pool.
   *
   * @return     void
   */
  public static function clearInstancePool()
  {
    self::$instances = array();
  }
  
  /**
   * Method to invalidate the instance pool of all tables related to job_run
   * by a foreign key with ON DELETE CASCADE
   */
  public static function clearRelatedInstancePool()
  {
  }

  /**
   * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
   *
   * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
   * a multi-column primary key, a serialize()d version of the primary key will be returned.
   *
   * @param      array $row PropelPDO resultset row.
   * @param      int $startcol The 0-based offset for reading from the resultset row.
   * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
   */
  public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
  {
    // If the PK cannot be derived from the row, return NULL.
    if ($row[$startcol] === null)
    {
      return null;
    }
    return (string) $row[$startcol];
  }

  /**
   * Retrieves the primary key from the DB resultset row
   * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
   * a multi-column primary key, an array of the primary key columns will be returned.
   *
   * @param      array $row PropelPDO resultset row.
   * @param      int $startcol The 0-based offset for reading from the resultset row.
   * @return     mixed The primary key of the row
   */
  public static function getPrimaryKeyFromRow($row, $startcol = 0)
  {
    return (int) $row[$startcol];
  }
  
  /**
   * The returned array will contain objects of the default type or
   * objects that inherit from the default.
   *
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function populateObjects(PDOStatement $stmt)
  {
    $results = array();
  
    // set the class once to avoid overhead in the loop
    $cls = iceModelJobRunPeer::getOMClass(false);
    // populate the object(s)
    while ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $key = iceModelJobRunPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj = iceModelJobRunPeer::getInstanceFromPool($key)))
      {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://www.propelorm.org/ticket/509
        // $obj->hydrate($row, 0, true); // rehydrate
        $results[] = $obj;
      }
      else
      {
        $obj = new $cls();
        $obj->hydrate($row);
        $results[] = $obj;
        iceModelJobRunPeer::addInstanceToPool($obj, $key);
      }
    }
    $stmt->closeCursor();
    return $results;
  }
  /**
   * Populates an object of the default type or an object that inherit from the default.
   *
   * @param      array $row PropelPDO resultset row.
   * @param      int $startcol The 0-based offset for reading from the resultset row.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   * @return     array (iceModelJobRun object, last column rank)
   */
  public static function populateObject($row, $startcol = 0)
  {
    $key = iceModelJobRunPeer::getPrimaryKeyHashFromRow($row, $startcol);
    if (null !== ($obj = iceModelJobRunPeer::getInstanceFromPool($key)))
    {
      // We no longer rehydrate the object, since this can cause data loss.
      // See http://www.propelorm.org/ticket/509
      // $obj->hydrate($row, $startcol, true); // rehydrate
      $col = $startcol + iceModelJobRunPeer::NUM_HYDRATE_COLUMNS;
    }
    else
    {
      $cls = iceModelJobRunPeer::OM_CLASS;
      $obj = new $cls();
      $col = $obj->hydrate($row, $startcol);
      iceModelJobRunPeer::addInstanceToPool($obj, $key);
    }
    return array($obj, $col);
  }

  /**
   * Returns the TableMap related to this peer.
   * This method is not needed for general use but a specific application could have a need.
   * @return     TableMap
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function getTableMap()
  {
    return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
  }

  /**
   * Add a TableMap instance to the database for this peer class.
   */
  public static function buildTableMap()
  {
    $dbMap = Propel::getDatabaseMap(BaseiceModelJobRunPeer::DATABASE_NAME);
    if (!$dbMap->hasTable(BaseiceModelJobRunPeer::TABLE_NAME))
    {
      $dbMap->addTableObject(new iceModelJobRunTableMap());
    }
  }

  /**
   * The class that the Peer will make instances of.
   *
   * If $withPrefix is true, the returned path
   * uses a dot-path notation which is tranalted into a path
   * relative to a location on the PHP include_path.
   * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
   *
   * @param      boolean $withPrefix Whether or not to return the path with the class name
   * @return     string path.to.ClassName
   */
  public static function getOMClass($withPrefix = true)
  {
    return $withPrefix ? iceModelJobRunPeer::CLASS_DEFAULT : iceModelJobRunPeer::OM_CLASS;
  }

  /**
   * Performs an INSERT on the database, given a iceModelJobRun or Criteria object.
   *
   * @param      mixed $values Criteria or iceModelJobRun object containing data that is used to create the INSERT statement.
   * @param      PropelPDO $con the PropelPDO connection to use
   * @return     mixed The new primary key.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doInsert($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelJobRunPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity
    }
    else
    {
      $criteria = $values->buildCriteria(); // build Criteria from iceModelJobRun object
    }

    if ($criteria->containsKey(iceModelJobRunPeer::ID) && $criteria->keyContainsValue(iceModelJobRunPeer::ID) )
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key ('.iceModelJobRunPeer::ID.')');
    }


    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    try
    {
      // use transaction because $criteria could contain info
      // for more than one table (I guess, conceivably)
      $con->beginTransaction();
      $pk = BasePeer::doInsert($criteria, $con);
      $con->commit();
    }
    catch(PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }

    return $pk;
  }

  /**
   * Performs an UPDATE on the database, given a iceModelJobRun or Criteria object.
   *
   * @param      mixed $values Criteria or iceModelJobRun object containing data that is used to create the UPDATE statement.
   * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
   * @return     int The number of affected rows (if supported by underlying database driver).
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function doUpdate($values, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelJobRunPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $selectCriteria = new Criteria(self::DATABASE_NAME);

    if ($values instanceof Criteria)
    {
      $criteria = clone $values; // rename for clarity

      $comparison = $criteria->getComparison(iceModelJobRunPeer::ID);
      $value = $criteria->remove(iceModelJobRunPeer::ID);
      if ($value)
      {
        $selectCriteria->add(iceModelJobRunPeer::ID, $value, $comparison);
      }
      else
      {
        $selectCriteria->setPrimaryTableName(iceModelJobRunPeer::TABLE_NAME);
      }

    } else { // $values is iceModelJobRun object
      $criteria = $values->buildCriteria(); // gets full criteria
      $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
    }

    // set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    return BasePeer::doUpdate($selectCriteria, $criteria, $con);
  }

  /**
   * Deletes all rows from the job_run table.
   *
   * @param      PropelPDO $con the connection to use
   * @return     int The number of affected rows (if supported by underlying database driver).
   */
  public static function doDeleteAll(PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelJobRunPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $affectedRows = 0; // initialize var to track total num of affected rows
    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      $affectedRows += BasePeer::doDeleteAll(iceModelJobRunPeer::TABLE_NAME, $con, iceModelJobRunPeer::DATABASE_NAME);
      // Because this db requires some delete cascade/set null emulation, we have to
      // clear the cached instance *after* the emulation has happened (since
      // instances get re-added by the select statement contained therein).
      iceModelJobRunPeer::clearInstancePool();
      iceModelJobRunPeer::clearRelatedInstancePool();
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
   * Performs a DELETE on the database, given a iceModelJobRun or Criteria object OR a primary key value.
   *
   * @param      mixed $values Criteria or iceModelJobRun object or primary key or array of primary keys
   *              which is used to create the DELETE statement
   * @param      PropelPDO $con the connection to use
   * @return     int   The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
   *        if supported by native driver or if emulated using Propel.
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
   public static function doDelete($values, PropelPDO $con = null)
   {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelJobRunPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    if ($values instanceof Criteria)
    {
      // invalidate the cache for all objects of this type, since we have no
      // way of knowing (without running a query) what objects should be invalidated
      // from the cache based on this Criteria.
      iceModelJobRunPeer::clearInstancePool();
      // rename for clarity
      $criteria = clone $values;
    } elseif ($values instanceof iceModelJobRun) { // it's a model object
      // invalidate the cache for this single object
      iceModelJobRunPeer::removeInstanceFromPool($values);
      // create criteria based on pk values
      $criteria = $values->buildPkeyCriteria();
    } else { // it's a primary key, or an array of pks
      $criteria = new Criteria(self::DATABASE_NAME);
      $criteria->add(iceModelJobRunPeer::ID, (array) $values, Criteria::IN);
      // invalidate the cache for this object(s)
      foreach ((array) $values as $singleval)
      {
        iceModelJobRunPeer::removeInstanceFromPool($singleval);
      }
    }

    // Set the correct dbName
    $criteria->setDbName(self::DATABASE_NAME);

    $affectedRows = 0; // initialize var to track total num of affected rows

    try
    {
      // use transaction because $criteria could contain info
      // for more than one table or we could emulating ON DELETE CASCADE, etc.
      $con->beginTransaction();
      
      $affectedRows += BasePeer::doDelete($criteria, $con);
      iceModelJobRunPeer::clearRelatedInstancePool();
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
   * Validates all modified columns of given iceModelJobRun object.
   * If parameter $columns is either a single column name or an array of column names
   * than only those columns are validated.
   *
   * NOTICE: This does not apply to primary or foreign keys for now.
   *
   * @param      iceModelJobRun $obj The object to validate.
   * @param      mixed $cols Column name or array of column names.
   *
   * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
   */
  public static function doValidate($obj, $cols = null)
  {
    $columns = array();

    if ($cols)
    {
      $dbMap = Propel::getDatabaseMap(iceModelJobRunPeer::DATABASE_NAME);
      $tableMap = $dbMap->getTable(iceModelJobRunPeer::TABLE_NAME);

      if (! is_array($cols))
      {
        $cols = array($cols);
      }

      foreach ($cols as $colName)
      {
        if ($tableMap->containsColumn($colName))
        {
          $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
          $columns[$colName] = $obj->$get();
        }
      }
    }
    else
    {

    }

    return BasePeer::doValidate(iceModelJobRunPeer::DATABASE_NAME, iceModelJobRunPeer::TABLE_NAME, $columns);
  }

  /**
   * Retrieve a single object by pkey.
   *
   * @param      int $pk the primary key.
   * @param      PropelPDO $con the connection to use
   * @return     iceModelJobRun
   */
  public static function retrieveByPK($pk, PropelPDO $con = null)
  {

    if (null !== ($obj = iceModelJobRunPeer::getInstanceFromPool((string) $pk)))
    {
      return $obj;
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelJobRunPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $criteria = new Criteria(iceModelJobRunPeer::DATABASE_NAME);
    $criteria->add(iceModelJobRunPeer::ID, $pk);

    $v = iceModelJobRunPeer::doSelect($criteria, $con);

    return !empty($v) > 0 ? $v[0] : null;
  }

  /**
   * Retrieve multiple objects by pkey.
   *
   * @param      array $pks List of primary keys
   * @param      PropelPDO $con the connection to use
   * @throws     PropelException Any exceptions caught during processing will be
   *     rethrown wrapped into a PropelException.
   */
  public static function retrieveByPKs($pks, PropelPDO $con = null)
  {
    if ($con === null)
    {
      $con = Propel::getConnection(iceModelJobRunPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    $objs = null;
    if (empty($pks))
    {
      $objs = array();
    }
    else
    {
      $criteria = new Criteria(iceModelJobRunPeer::DATABASE_NAME);
      $criteria->add(iceModelJobRunPeer::ID, $pks, Criteria::IN);
      $objs = iceModelJobRunPeer::doSelect($criteria, $con);
    }
    return $objs;
  }

  // symfony behavior
  
  /**
   * Returns an array of arrays that contain columns in each unique index.
   *
   * @return array
   */
  static public function getUniqueColumnNames()
  {
    return array(array('unique_key'));
  }

  // symfony_behaviors behavior
  
  /**
   * Returns the name of the hook to call from inside the supplied method.
   *
   * @param string $method The calling method
   *
   * @return string A hook name for {@link sfMixer}
   *
   * @throws LogicException If the method name is not recognized
   */
  static private function getMixerPreSelectHook($method)
  {
    if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
    {
      return sprintf('BaseiceModelJobRunPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
    }
  
    throw new LogicException(sprintf('Unrecognized function "%s"', $method));
  }

}

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseiceModelJobRunPeer::buildTableMap();

