<?php
define('START_TIME', microtime(true));

date_default_timezone_set("Asia/Shanghai");
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', dirname(dirname(__FILE__)));
define('APP_PATH', ROOT_PATH . DS . 'app');
$app = require_once APP_PATH . DS . 'bootstrap.php';
$app->start();

