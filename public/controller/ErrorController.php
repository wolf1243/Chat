<?php
/**
 * Created by PhpStorm.
 * User: vulf1
 * Date: 29.01.2019
 * Time: 18:51
 */

namespace app\controller\ErrorController;

use app\model\core\Controller\Controller;
use app\model\core\View\View;

class ErrorController extends Controller
{
    public function __404()
    {
        View::render($this->rout, 'error');
    }
}