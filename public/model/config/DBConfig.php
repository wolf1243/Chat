<?php
/**
 * Created by PhpStorm.
 * User: vulf1
 * Date: 29.01.2019
 * Time: 20:24
 */

namespace app\model\config\DBConfig;

/**
 * Class DBConfig
 * Its dependency injection for DB. You can use this class not only for DB
 * @package app\model\config\DBConfig
 */

class DBConfig
{
    private $sqlImplementation = 'mysql';
    private $dbHost = 'localhost';
    private $dbName = '';
    private $dbPsw = '';
    private $user = 'root';

    /**
     * @return array for connection to DB
     */
    public function getConfig() : array
    {
        return [
            'sqlImplementation' => $this->sqlImplementation,
            'dbHost' => $this->dbHost,
            'dbName' => $this->dbName,
            'dbPsw' => $this->dbPsw,
            'user' => $this->user
        ];
    }

    /**
     * Set DB Host
     * @param $dbHost
     */
    public function setDBHost($dbHost)
    {
        $this->dbHost = $dbHost;
    }

    /**
     * Set DB Name
     * @param $dbName
     */
    public function setDBName($dbName)
    {
        $this->dbName = $dbName;
    }

    /**
     * Set Implementation
     * @param $sqlImplementation
     */
    public function setSqlImplementation($sqlImplementation)
    {
        $this->sqlImplementation = $sqlImplementation;
    }

    /**
     * Set password of DB
     * @param $psw
     */
    public function setPws($psw)
    {
        $this->dbPsw = $psw;
    }

    /**
     * Set user name of DB
     * @param $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * Set all properties of DB
     * @param $sqlImplementation
     * @param $dbHost
     * @param $psw
     * @param $user
     * @param $dbName
     */
    public function setAll($sqlImplementation, $dbHost, $psw, $user, $dbName)
    {
        $this->dbName = $dbName;
        $this->user = $user;
        $this->dbPsw = $psw;
        $this->dbHost = $dbHost;
        $this->sqlImplementation = $sqlImplementation;
    }

}