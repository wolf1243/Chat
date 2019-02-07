<?php
/**
 * Created by PhpStorm.
 * User: wulf1243
 * Date: 25.01.2019
 * Time: 19:48
 */

session_start();

//composer's autoload
require_once('vendor/autoload.php');

$rout = new app\model\core\Router\Router((new app\model\config\Routes\Routes()));
$rout->run();