<?php
/**
 * Created by PhpStorm.
 * User: vulf1
 * Date: 28.01.2019
 * Time: 21:03
 */

namespace app\controller\MainController;
use app\model\core\Controller\Controller;
use app\model\core\View\View;

class MainController extends Controller
{
    public function indexAction() {
        $data = '';
        View::render($this->rout, 'default', ['name' => 'wulf', 'chats' => $data]);
    }
}