<?php
/**
 * Created by PhpStorm.
 * User: vulf1
 * Date: 25.01.2019
 * Time: 19:52
 */

namespace app\model\core\View;

use app\model\interfaces\ViewInterface\ViewInterface;

/**
 * Class View
 * Display content on browser
 * @package app\model\core\View
 */

class View implements ViewInterface
{
    /**
     * Render controller request
     * @param $path
     * @param string $layout
     * @param array $vars
     */
    public static function render($path, $layout = 'default', $vars = []) {
        extract($vars);
        ob_start();
        require('view/' . $path['controller'] . '/' . $path['action'] . '.php');
        $content = ob_get_clean();
        require_once("view/layout/" . $layout . ".php");
    }

    /**
     * $pattern like '<p>{$var}</p>' where $var $data[$i]
     * @param $pattern
     * @param array $data
     * @return string
     */
    public static function renderData(array $data, $pattern)
    {
        $resString = '';
        for ($i = 0; $i < count($data); $i++) {
            $resString .= str_replace('{$var}', $data[$i], $pattern);
        }
        return $resString;
    }
}