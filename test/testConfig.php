<?php

/*
 * This file is part of PHP CS Fixer.
 * (c) kcloze <pei.greet@qq.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

define('APP_PATH', dirname(__DIR__));
date_default_timezone_set('Asia/Shanghai');

require APP_PATH . '/vendor/autoload.php';
$config = require_once APP_PATH . '/config.php';

var_dump($config);

use Kcloze\MultiProcess\Config;

$result=Config::hasRepeatingName($config['exec'], 'name');
var_dump($result);
