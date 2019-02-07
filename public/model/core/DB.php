<?php
/**
 * Created by PhpStorm.
 * User: vulf1
 * Date: 30.01.2019
 * Time: 19:55
 */

namespace app\model\core\DB;

use app\model\config\DBConfig\DBConfig;

/**
 * Class DB
 * Create connection to Database. Can Select/Update/Delete and Insert data
 * @package app\model\core\DB
 */

class DB
{
    private $config;
    private $query = '';
    private $statement;

    /**
     * DB constructor.
     * Create connection object. This object is DB connection
     * @param DBConfig $config
     */
    public function __construct(DBConfig $config)
    {
        $this->config = $config->getConfig();
        $this->connection = new \PDO($this->config['sqlImplementation'] . ":host=" . $this->config['dbHost'] . ';dbname=' . $this->config['dbName'], $this->config['user'], $this->config['dbPsw']);
    }

    /**
     * Can create SELECT/UPDATE/DELETE queries
     * This method can run without $this->where()
     * @param $req
     * @param array $cols
     * @param $from
     */
    public function selectUpdateDelete($req, array $cols, $from)
    {
        $this->query = $req . ' ' . join(' ', $cols) . ' FROM `' . $from . '`';
    }

    /**
     * Insert $vals Into $tableName
     * @param array $cols
     * @param string $tableName
     * @param array $vals
     */
    public function insertInto(array $cols, $tableName, array $vals)
    {
        $this->query = 'INSERT INTO `' . $tableName . '` (' . join(', ', $cols) . ') VALUES (' . join(', ', $vals) . ');';
    }

    /**
     * Add state to selectUpdateDelete method
     * @param $statement
     */
    public function where($statement)
    {
        $this->query .= 'WHERE ' . $statement;
    }

    /**
     * Prepare query
     */
    public function prepareQuery()
    {
        if ($this->query != '') {
            $this->statement = $this->connection->prepare($this->query);
        } else {
            echo 'error';
        }
    }

    /**
     * Run query
     * Query can create in selectUpdateDelete/insertInto method
     */
    public function runQuery()
    {
        if ($this->query != '') {
            $this->statement->execute();
        } else {
            echo 'error';
        }
    }

    /**
     * @return array width key=>numberOfString and value=>contentOfString
     */
    public function fetchData() : array
    {
        return $this->statement->fetchAll();
    }

}