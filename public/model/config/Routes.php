<?php
/**
 * Created by PhpStorm.
 * User: wulf1243
 * Date: 25.01.2019
 * Time: 21:06
 */

namespace app\model\config\Routes;

class Routes
{
    private $config = [
        '' => [
            'controller' => 'main',
            'action' => 'index'
        ],
        'welcome/login' => [
            'controller' => 'account',
            'action' => 'login'
        ],
        'welcome/register' => [
            'controller' => 'account',
            'action' => 'register'
    ]
    ];

    public function getConfig()
    {
        return $this->config;
    }

}
