<?php
/**
 * Created by PhpStorm.
 * User: vulf1
 * Date: 25.01.2019
 * Time: 19:51
 */

namespace app\model\core\Controller;

/**
 * Class Controller
 * This class store properties for children classes
 * @package app\model\core\Controller
 */

class Controller
{

    /**
     * Controller constructor.
     * @param $rout
     */
    public function __construct($rout)
    {
        $this->rout = $rout;
    }

}