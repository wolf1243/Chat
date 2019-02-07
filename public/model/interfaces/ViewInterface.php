<?php
/**
 * Created by PhpStorm.
 * User: vulf1
 * Date: 27.01.2019
 * Time: 20:33
 */

namespace app\model\interfaces\ViewInterface;

/**
 * Interface ViewInterface
 * @package app\model\interfaces\ViewInterface
 */

interface ViewInterface
{
    public static function render($pattern);
}