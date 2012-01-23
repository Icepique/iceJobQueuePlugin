<?php


/**
 * Base class that represents a query for the 'job_run' table.
 *
 * 
 *
 * @method     iceModelJobRunQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelJobRunQuery orderByCrontabId($order = Criteria::ASC) Order by the crontab_id column
 * @method     iceModelJobRunQuery orderByContext($order = Criteria::ASC) Order by the context column
 * @method     iceModelJobRunQuery orderByUniqueKey($order = Criteria::ASC) Order by the unique_key column
 * @method     iceModelJobRunQuery orderByJobHandle($order = Criteria::ASC) Order by the job_handle column
 * @method     iceModelJobRunQuery orderByFunctionName($order = Criteria::ASC) Order by the function_name column
 * @method     iceModelJobRunQuery orderByCompleted($order = Criteria::ASC) Order by the completed column
 * @method     iceModelJobRunQuery orderByTotal($order = Criteria::ASC) Order by the total column
 * @method     iceModelJobRunQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     iceModelJobRunQuery orderByCpuStats($order = Criteria::ASC) Order by the cpu_stats column
 * @method     iceModelJobRunQuery orderByMemoryStats($order = Criteria::ASC) Order by the memory_stats column
 * @method     iceModelJobRunQuery orderByLoadavgStats($order = Criteria::ASC) Order by the loadavg_stats column
 * @method     iceModelJobRunQuery orderByPriority($order = Criteria::ASC) Order by the priority column
 * @method     iceModelJobRunQuery orderByIsBackground($order = Criteria::ASC) Order by the is_background column
 * @method     iceModelJobRunQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     iceModelJobRunQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     iceModelJobRunQuery groupById() Group by the id column
 * @method     iceModelJobRunQuery groupByCrontabId() Group by the crontab_id column
 * @method     iceModelJobRunQuery groupByContext() Group by the context column
 * @method     iceModelJobRunQuery groupByUniqueKey() Group by the unique_key column
 * @method     iceModelJobRunQuery groupByJobHandle() Group by the job_handle column
 * @method     iceModelJobRunQuery groupByFunctionName() Group by the function_name column
 * @method     iceModelJobRunQuery groupByCompleted() Group by the completed column
 * @method     iceModelJobRunQuery groupByTotal() Group by the total column
 * @method     iceModelJobRunQuery groupByStatus() Group by the status column
 * @method     iceModelJobRunQuery groupByCpuStats() Group by the cpu_stats column
 * @method     iceModelJobRunQuery groupByMemoryStats() Group by the memory_stats column
 * @method     iceModelJobRunQuery groupByLoadavgStats() Group by the loadavg_stats column
 * @method     iceModelJobRunQuery groupByPriority() Group by the priority column
 * @method     iceModelJobRunQuery groupByIsBackground() Group by the is_background column
 * @method     iceModelJobRunQuery groupByUpdatedAt() Group by the updated_at column
 * @method     iceModelJobRunQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     iceModelJobRunQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelJobRunQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelJobRunQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelJobRun findOne(PropelPDO $con = null) Return the first iceModelJobRun matching the query
 * @method     iceModelJobRun findOneOrCreate(PropelPDO $con = null) Return the first iceModelJobRun matching the query, or a new iceModelJobRun object populated from the query conditions when no match is found
 *
 * @method     iceModelJobRun findOneById(int $id) Return the first iceModelJobRun filtered by the id column
 * @method     iceModelJobRun findOneByCrontabId(int $crontab_id) Return the first iceModelJobRun filtered by the crontab_id column
 * @method     iceModelJobRun findOneByContext(string $context) Return the first iceModelJobRun filtered by the context column
 * @method     iceModelJobRun findOneByUniqueKey(string $unique_key) Return the first iceModelJobRun filtered by the unique_key column
 * @method     iceModelJobRun findOneByJobHandle(string $job_handle) Return the first iceModelJobRun filtered by the job_handle column
 * @method     iceModelJobRun findOneByFunctionName(string $function_name) Return the first iceModelJobRun filtered by the function_name column
 * @method     iceModelJobRun findOneByCompleted(int $completed) Return the first iceModelJobRun filtered by the completed column
 * @method     iceModelJobRun findOneByTotal(int $total) Return the first iceModelJobRun filtered by the total column
 * @method     iceModelJobRun findOneByStatus(string $status) Return the first iceModelJobRun filtered by the status column
 * @method     iceModelJobRun findOneByCpuStats(string $cpu_stats) Return the first iceModelJobRun filtered by the cpu_stats column
 * @method     iceModelJobRun findOneByMemoryStats(string $memory_stats) Return the first iceModelJobRun filtered by the memory_stats column
 * @method     iceModelJobRun findOneByLoadavgStats(string $loadavg_stats) Return the first iceModelJobRun filtered by the loadavg_stats column
 * @method     iceModelJobRun findOneByPriority(int $priority) Return the first iceModelJobRun filtered by the priority column
 * @method     iceModelJobRun findOneByIsBackground(boolean $is_background) Return the first iceModelJobRun filtered by the is_background column
 * @method     iceModelJobRun findOneByUpdatedAt(string $updated_at) Return the first iceModelJobRun filtered by the updated_at column
 * @method     iceModelJobRun findOneByCreatedAt(string $created_at) Return the first iceModelJobRun filtered by the created_at column
 *
 * @method     array findById(int $id) Return iceModelJobRun objects filtered by the id column
 * @method     array findByCrontabId(int $crontab_id) Return iceModelJobRun objects filtered by the crontab_id column
 * @method     array findByContext(string $context) Return iceModelJobRun objects filtered by the context column
 * @method     array findByUniqueKey(string $unique_key) Return iceModelJobRun objects filtered by the unique_key column
 * @method     array findByJobHandle(string $job_handle) Return iceModelJobRun objects filtered by the job_handle column
 * @method     array findByFunctionName(string $function_name) Return iceModelJobRun objects filtered by the function_name column
 * @method     array findByCompleted(int $completed) Return iceModelJobRun objects filtered by the completed column
 * @method     array findByTotal(int $total) Return iceModelJobRun objects filtered by the total column
 * @method     array findByStatus(string $status) Return iceModelJobRun objects filtered by the status column
 * @method     array findByCpuStats(string $cpu_stats) Return iceModelJobRun objects filtered by the cpu_stats column
 * @method     array findByMemoryStats(string $memory_stats) Return iceModelJobRun objects filtered by the memory_stats column
 * @method     array findByLoadavgStats(string $loadavg_stats) Return iceModelJobRun objects filtered by the loadavg_stats column
 * @method     array findByPriority(int $priority) Return iceModelJobRun objects filtered by the priority column
 * @method     array findByIsBackground(boolean $is_background) Return iceModelJobRun objects filtered by the is_background column
 * @method     array findByUpdatedAt(string $updated_at) Return iceModelJobRun objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return iceModelJobRun objects filtered by the created_at column
 *
 * @package    propel.generator.plugins.iceJobQueuePlugin.lib.model.om
 */
abstract class BaseiceModelJobRunQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelJobRunQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'icepique', $modelName = 'iceModelJobRun', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelJobRunQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelJobRunQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelJobRunQuery) {
            return $criteria;
        }
        $query = new iceModelJobRunQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }
        return $query;
    }

    /**
     * Find object by primary key
     * Use instance pooling to avoid a database query if the object exists
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    iceModelJobRun|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelJobRunPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
            // the object is alredy in the instance pool
            return $obj;
        } else {
            // the object has not been requested yet, or the formatter is not an object formatter
            $criteria = $this->isKeepQuery() ? clone $this : $this;
            $stmt = $criteria
                ->filterByPrimaryKey($key)
                ->getSelectStatement($con);
            return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
        }
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        return $this
            ->filterByPrimaryKeys($keys)
            ->find($con);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(iceModelJobRunPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(iceModelJobRunPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelJobRunPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the crontab_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCrontabId(1234); // WHERE crontab_id = 1234
     * $query->filterByCrontabId(array(12, 34)); // WHERE crontab_id IN (12, 34)
     * $query->filterByCrontabId(array('min' => 12)); // WHERE crontab_id > 12
     * </code>
     *
     * @param     mixed $crontabId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByCrontabId($crontabId = null, $comparison = null)
    {
        if (is_array($crontabId)) {
            $useMinMax = false;
            if (isset($crontabId['min'])) {
                $this->addUsingAlias(iceModelJobRunPeer::CRONTAB_ID, $crontabId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($crontabId['max'])) {
                $this->addUsingAlias(iceModelJobRunPeer::CRONTAB_ID, $crontabId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelJobRunPeer::CRONTAB_ID, $crontabId, $comparison);
    }

    /**
     * Filter the query on the context column
     *
     * Example usage:
     * <code>
     * $query->filterByContext('fooValue');   // WHERE context = 'fooValue'
     * $query->filterByContext('%fooValue%'); // WHERE context LIKE '%fooValue%'
     * </code>
     *
     * @param     string $context The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByContext($context = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($context)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $context)) {
                $context = str_replace('*', '%', $context);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelJobRunPeer::CONTEXT, $context, $comparison);
    }

    /**
     * Filter the query on the unique_key column
     *
     * Example usage:
     * <code>
     * $query->filterByUniqueKey('fooValue');   // WHERE unique_key = 'fooValue'
     * $query->filterByUniqueKey('%fooValue%'); // WHERE unique_key LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uniqueKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByUniqueKey($uniqueKey = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uniqueKey)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $uniqueKey)) {
                $uniqueKey = str_replace('*', '%', $uniqueKey);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelJobRunPeer::UNIQUE_KEY, $uniqueKey, $comparison);
    }

    /**
     * Filter the query on the job_handle column
     *
     * Example usage:
     * <code>
     * $query->filterByJobHandle('fooValue');   // WHERE job_handle = 'fooValue'
     * $query->filterByJobHandle('%fooValue%'); // WHERE job_handle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jobHandle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByJobHandle($jobHandle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jobHandle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jobHandle)) {
                $jobHandle = str_replace('*', '%', $jobHandle);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelJobRunPeer::JOB_HANDLE, $jobHandle, $comparison);
    }

    /**
     * Filter the query on the function_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFunctionName('fooValue');   // WHERE function_name = 'fooValue'
     * $query->filterByFunctionName('%fooValue%'); // WHERE function_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $functionName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByFunctionName($functionName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($functionName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $functionName)) {
                $functionName = str_replace('*', '%', $functionName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelJobRunPeer::FUNCTION_NAME, $functionName, $comparison);
    }

    /**
     * Filter the query on the completed column
     *
     * Example usage:
     * <code>
     * $query->filterByCompleted(1234); // WHERE completed = 1234
     * $query->filterByCompleted(array(12, 34)); // WHERE completed IN (12, 34)
     * $query->filterByCompleted(array('min' => 12)); // WHERE completed > 12
     * </code>
     *
     * @param     mixed $completed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByCompleted($completed = null, $comparison = null)
    {
        if (is_array($completed)) {
            $useMinMax = false;
            if (isset($completed['min'])) {
                $this->addUsingAlias(iceModelJobRunPeer::COMPLETED, $completed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($completed['max'])) {
                $this->addUsingAlias(iceModelJobRunPeer::COMPLETED, $completed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelJobRunPeer::COMPLETED, $completed, $comparison);
    }

    /**
     * Filter the query on the total column
     *
     * Example usage:
     * <code>
     * $query->filterByTotal(1234); // WHERE total = 1234
     * $query->filterByTotal(array(12, 34)); // WHERE total IN (12, 34)
     * $query->filterByTotal(array('min' => 12)); // WHERE total > 12
     * </code>
     *
     * @param     mixed $total The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByTotal($total = null, $comparison = null)
    {
        if (is_array($total)) {
            $useMinMax = false;
            if (isset($total['min'])) {
                $this->addUsingAlias(iceModelJobRunPeer::TOTAL, $total['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($total['max'])) {
                $this->addUsingAlias(iceModelJobRunPeer::TOTAL, $total['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelJobRunPeer::TOTAL, $total, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
     * $query->filterByStatus('%fooValue%'); // WHERE status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $status)) {
                $status = str_replace('*', '%', $status);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelJobRunPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the cpu_stats column
     *
     * Example usage:
     * <code>
     * $query->filterByCpuStats('fooValue');   // WHERE cpu_stats = 'fooValue'
     * $query->filterByCpuStats('%fooValue%'); // WHERE cpu_stats LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cpuStats The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByCpuStats($cpuStats = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cpuStats)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cpuStats)) {
                $cpuStats = str_replace('*', '%', $cpuStats);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelJobRunPeer::CPU_STATS, $cpuStats, $comparison);
    }

    /**
     * Filter the query on the memory_stats column
     *
     * Example usage:
     * <code>
     * $query->filterByMemoryStats('fooValue');   // WHERE memory_stats = 'fooValue'
     * $query->filterByMemoryStats('%fooValue%'); // WHERE memory_stats LIKE '%fooValue%'
     * </code>
     *
     * @param     string $memoryStats The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByMemoryStats($memoryStats = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($memoryStats)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $memoryStats)) {
                $memoryStats = str_replace('*', '%', $memoryStats);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelJobRunPeer::MEMORY_STATS, $memoryStats, $comparison);
    }

    /**
     * Filter the query on the loadavg_stats column
     *
     * Example usage:
     * <code>
     * $query->filterByLoadavgStats('fooValue');   // WHERE loadavg_stats = 'fooValue'
     * $query->filterByLoadavgStats('%fooValue%'); // WHERE loadavg_stats LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loadavgStats The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByLoadavgStats($loadavgStats = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loadavgStats)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $loadavgStats)) {
                $loadavgStats = str_replace('*', '%', $loadavgStats);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelJobRunPeer::LOADAVG_STATS, $loadavgStats, $comparison);
    }

    /**
     * Filter the query on the priority column
     *
     * Example usage:
     * <code>
     * $query->filterByPriority(1234); // WHERE priority = 1234
     * $query->filterByPriority(array(12, 34)); // WHERE priority IN (12, 34)
     * $query->filterByPriority(array('min' => 12)); // WHERE priority > 12
     * </code>
     *
     * @param     mixed $priority The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByPriority($priority = null, $comparison = null)
    {
        if (is_array($priority)) {
            $useMinMax = false;
            if (isset($priority['min'])) {
                $this->addUsingAlias(iceModelJobRunPeer::PRIORITY, $priority['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($priority['max'])) {
                $this->addUsingAlias(iceModelJobRunPeer::PRIORITY, $priority['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelJobRunPeer::PRIORITY, $priority, $comparison);
    }

    /**
     * Filter the query on the is_background column
     *
     * Example usage:
     * <code>
     * $query->filterByIsBackground(true); // WHERE is_background = true
     * $query->filterByIsBackground('yes'); // WHERE is_background = true
     * </code>
     *
     * @param     boolean|string $isBackground The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByIsBackground($isBackground = null, $comparison = null)
    {
        if (is_string($isBackground)) {
            $is_background = in_array(strtolower($isBackground), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(iceModelJobRunPeer::IS_BACKGROUND, $isBackground, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(iceModelJobRunPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(iceModelJobRunPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelJobRunPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(iceModelJobRunPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(iceModelJobRunPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelJobRunPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelJobRun $iceModelJobRun Object to remove from the list of results
     *
     * @return    iceModelJobRunQuery The current query, for fluid interface
     */
    public function prune($iceModelJobRun = null)
    {
        if ($iceModelJobRun) {
            $this->addUsingAlias(iceModelJobRunPeer::ID, $iceModelJobRun->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}