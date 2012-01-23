<?php


/**
 * Base class that represents a query for the 'job_queue' table.
 *
 * 
 *
 * @method     iceModelJobQueueQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelJobQueueQuery orderByUniqueKey($order = Criteria::ASC) Order by the unique_key column
 * @method     iceModelJobQueueQuery orderByFunctionName($order = Criteria::ASC) Order by the function_name column
 * @method     iceModelJobQueueQuery orderByPriority($order = Criteria::ASC) Order by the priority column
 * @method     iceModelJobQueueQuery orderByData($order = Criteria::ASC) Order by the data column
 * @method     iceModelJobQueueQuery orderByWhenToRun($order = Criteria::ASC) Order by the when_to_run column
 * @method     iceModelJobQueueQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     iceModelJobQueueQuery groupById() Group by the id column
 * @method     iceModelJobQueueQuery groupByUniqueKey() Group by the unique_key column
 * @method     iceModelJobQueueQuery groupByFunctionName() Group by the function_name column
 * @method     iceModelJobQueueQuery groupByPriority() Group by the priority column
 * @method     iceModelJobQueueQuery groupByData() Group by the data column
 * @method     iceModelJobQueueQuery groupByWhenToRun() Group by the when_to_run column
 * @method     iceModelJobQueueQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     iceModelJobQueueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelJobQueueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelJobQueueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelJobQueue findOne(PropelPDO $con = null) Return the first iceModelJobQueue matching the query
 * @method     iceModelJobQueue findOneOrCreate(PropelPDO $con = null) Return the first iceModelJobQueue matching the query, or a new iceModelJobQueue object populated from the query conditions when no match is found
 *
 * @method     iceModelJobQueue findOneById(int $id) Return the first iceModelJobQueue filtered by the id column
 * @method     iceModelJobQueue findOneByUniqueKey(string $unique_key) Return the first iceModelJobQueue filtered by the unique_key column
 * @method     iceModelJobQueue findOneByFunctionName(string $function_name) Return the first iceModelJobQueue filtered by the function_name column
 * @method     iceModelJobQueue findOneByPriority(int $priority) Return the first iceModelJobQueue filtered by the priority column
 * @method     iceModelJobQueue findOneByData(string $data) Return the first iceModelJobQueue filtered by the data column
 * @method     iceModelJobQueue findOneByWhenToRun(int $when_to_run) Return the first iceModelJobQueue filtered by the when_to_run column
 * @method     iceModelJobQueue findOneByCreatedAt(string $created_at) Return the first iceModelJobQueue filtered by the created_at column
 *
 * @method     array findById(int $id) Return iceModelJobQueue objects filtered by the id column
 * @method     array findByUniqueKey(string $unique_key) Return iceModelJobQueue objects filtered by the unique_key column
 * @method     array findByFunctionName(string $function_name) Return iceModelJobQueue objects filtered by the function_name column
 * @method     array findByPriority(int $priority) Return iceModelJobQueue objects filtered by the priority column
 * @method     array findByData(string $data) Return iceModelJobQueue objects filtered by the data column
 * @method     array findByWhenToRun(int $when_to_run) Return iceModelJobQueue objects filtered by the when_to_run column
 * @method     array findByCreatedAt(string $created_at) Return iceModelJobQueue objects filtered by the created_at column
 *
 * @package    propel.generator.plugins.iceJobQueuePlugin.lib.model.om
 */
abstract class BaseiceModelJobQueueQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelJobQueueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'icepique', $modelName = 'iceModelJobQueue', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelJobQueueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelJobQueueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelJobQueueQuery) {
            return $criteria;
        }
        $query = new iceModelJobQueueQuery();
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
     * @return    iceModelJobQueue|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelJobQueuePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    iceModelJobQueueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(iceModelJobQueuePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelJobQueueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(iceModelJobQueuePeer::ID, $keys, Criteria::IN);
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
     * @return    iceModelJobQueueQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelJobQueuePeer::ID, $id, $comparison);
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
     * @return    iceModelJobQueueQuery The current query, for fluid interface
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
        return $this->addUsingAlias(iceModelJobQueuePeer::UNIQUE_KEY, $uniqueKey, $comparison);
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
     * @return    iceModelJobQueueQuery The current query, for fluid interface
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
        return $this->addUsingAlias(iceModelJobQueuePeer::FUNCTION_NAME, $functionName, $comparison);
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
     * @return    iceModelJobQueueQuery The current query, for fluid interface
     */
    public function filterByPriority($priority = null, $comparison = null)
    {
        if (is_array($priority)) {
            $useMinMax = false;
            if (isset($priority['min'])) {
                $this->addUsingAlias(iceModelJobQueuePeer::PRIORITY, $priority['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($priority['max'])) {
                $this->addUsingAlias(iceModelJobQueuePeer::PRIORITY, $priority['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelJobQueuePeer::PRIORITY, $priority, $comparison);
    }

    /**
     * Filter the query on the data column
     *
     * Example usage:
     * <code>
     * $query->filterByData('fooValue');   // WHERE data = 'fooValue'
     * $query->filterByData('%fooValue%'); // WHERE data LIKE '%fooValue%'
     * </code>
     *
     * @param     string $data The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobQueueQuery The current query, for fluid interface
     */
    public function filterByData($data = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($data)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $data)) {
                $data = str_replace('*', '%', $data);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelJobQueuePeer::DATA, $data, $comparison);
    }

    /**
     * Filter the query on the when_to_run column
     *
     * Example usage:
     * <code>
     * $query->filterByWhenToRun(1234); // WHERE when_to_run = 1234
     * $query->filterByWhenToRun(array(12, 34)); // WHERE when_to_run IN (12, 34)
     * $query->filterByWhenToRun(array('min' => 12)); // WHERE when_to_run > 12
     * </code>
     *
     * @param     mixed $whenToRun The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelJobQueueQuery The current query, for fluid interface
     */
    public function filterByWhenToRun($whenToRun = null, $comparison = null)
    {
        if (is_array($whenToRun)) {
            $useMinMax = false;
            if (isset($whenToRun['min'])) {
                $this->addUsingAlias(iceModelJobQueuePeer::WHEN_TO_RUN, $whenToRun['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($whenToRun['max'])) {
                $this->addUsingAlias(iceModelJobQueuePeer::WHEN_TO_RUN, $whenToRun['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelJobQueuePeer::WHEN_TO_RUN, $whenToRun, $comparison);
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
     * @return    iceModelJobQueueQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(iceModelJobQueuePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(iceModelJobQueuePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelJobQueuePeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelJobQueue $iceModelJobQueue Object to remove from the list of results
     *
     * @return    iceModelJobQueueQuery The current query, for fluid interface
     */
    public function prune($iceModelJobQueue = null)
    {
        if ($iceModelJobQueue) {
            $this->addUsingAlias(iceModelJobQueuePeer::ID, $iceModelJobQueue->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}