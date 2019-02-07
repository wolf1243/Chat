<?php
/**
 * Created by PhpStorm.
 * User: vulf1
 * Date: 31.01.2019
 * Time: 18:53
 */

namespace app\model\interfaces\LogLevel;

class LogLevel
{
    const EMERGENCY = 'emergency';
    const ALERT     = 'alert';
    const CRITICAL  = 'critical';
    const ERROR     = 'error';
    const WARNING   = 'warning';
    const NOTICE    = 'notice';
    const INFO      = 'info';
    const DEBUG     = 'debug';
}