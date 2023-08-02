<?php
require_once __DIR__.'/vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');


if (!defined('DIRECTORY_SEPARATOR')) {
    define('DIRECTORY_SEPARATOR', '/');
}

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

define('SITE_ROOT', __DIR__ . 'ConfigurationCore.php/');


define('APP_URL','http://localhost/');

define('PHP_AUTH_USER','emedia');
define('PHP_AUTH_PW','asdfkj34nt3434AWDFGA234rjkln234fq34J');