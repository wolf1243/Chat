<?php
/**
 * Created by PhpStorm.
 * User: vulf1
 * Date: 25.01.2019
 * Time: 19:52
 */

namespace app\controller\AccountController;

use app\model\config\DBConfig\DBConfig;
use app\model\core\Controller\Controller;
use app\model\core\DB\DB;
use app\model\core\View\View;

/**
 * Class AccountController extends Controller
 * Just controller for class View. Create connection to DB and pass on data to View.
 * @package app\controller\AccountController
 */

class AccountController extends Controller
{
    /**
     * Log in page on site
     */
    public function loginAction()
    {
        $configForDB = new DBConfig();
        $configForDB->setDBName('twitter/app');
        $dbConnection = new DB($configForDB);
        $dbConnection->selectUpdateDelete('SELECT', ['*'], 'twitter/app/users');
        $dbConnection->prepareQuery();
        $dbConnection->runQuery();
        $dataArray = $dbConnection->fetchData();
        View::render($this->rout);
    }

    /**
     * Sign in page on site
     */
    public function registerAction()
    {
        View::render($this->rout);
    }
}
