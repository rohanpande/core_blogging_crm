<?php
## Auto Loading is not working as of now.

require __DIR__ .'/paths.php';

require CORE_PATH . 'Configure.php';
require CORE_PATH . 'functions.php';
require CORE_PATH . 'Request.php';

Configure::load('config');

//require ROOT. DS . 'vendor' . DS . 'autoload.php';
