<?php

if (!defined('DS')) {
  define('DS',DIRECTORY_SEPARATOR);
}

define('ROOT',dirname(__DIR__));

define('APP_DIR','src');

define('APP', ROOT . DS . APP_DIR . DS);

define('CONFIG', ROOT . DS . 'config' . DS);

define('WWW_ROOT', ROOT . DS . 'webroot' . DS);

define('CORE_PATH', ROOT . DS . 'Core'. DS );
