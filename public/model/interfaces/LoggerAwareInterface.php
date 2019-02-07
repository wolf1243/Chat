<?php
/**
 * Created by PhpStorm.
 * User: vulf1
 * Date: 31.01.2019
 * Time: 18:51
 */

namespace app\model\interfaces\LoggerAwareInterface;


interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     * @return void
     */
    public function setLogger(LoggerInterface $logger);
}