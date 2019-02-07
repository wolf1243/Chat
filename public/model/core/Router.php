<?php
/**
 * Created by PhpStorm.
 * User: wulf1243
 * Date: 25.01.2019
 * Time: 20:35
 */

namespace app\model\core\Router;

/**
 * Class Router
 * Create Controller children class and request method depending on the URI.
 * @package app\model\core\Router
 */

class Router
{

    protected $routes = [];
    protected $params = [];
    private $configuration;

    /**
     * Router constructor.
     * @param Routes $configuration
     */
    public function __construct($configuration)
    {
        $this->configuration = $configuration;
        foreach ($this->configuration->getConfig() as $key => $val) {
            $this->add($key, $val);
        }
    }

    /**
     * Add rote to routes property
     * @param $route
     * @param string $params
     */
    public function add($route, $params='')
    {
        $route = '#^'. $route . '$#';
        $this->routes[$route] = $params;
    }

    /**
     * Check existence of URI
     * @return bool
     */
    public function match()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $key => $params) {
            if (preg_match($key, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    /**
     * Request Controller children class depend on path
     */
    public function run()
    {
        if ($this->match()) {
            $path = 'controller/' . ucfirst($this->params['controller']) . 'Controller' . '.php';
            if (file_exists($path)) {
                $action = $this->params['action'] . 'Action';
                require_once($path);
                $className = 'app\controller\\' . ucfirst($this->params['controller']) . 'Controller' . '\\' . ucfirst($this->params['controller']) . 'Controller';
                $class = new $className($this->params);
                if (method_exists($class, $action)) {
                    $class->$action();
                } else {
                    $errorHandler = new ErrorController(['controller'=> 'error', 'action' => '404']);
                    $errorHandler->__404();
                }
            } else {
                $errorHandler = new ErrorController(['controller'=> 'error', 'action' => '404']);
                $errorHandler->__404();
            }
        } else {
            $errorHandler = new ErrorController(['controller'=> 'error', 'action' => '404']);
            $errorHandler->__404();
        }
    }
}
