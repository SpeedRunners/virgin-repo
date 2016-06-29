<?php

$http = 'http://localhost:'.$_SERVER["SERVER_PORT"].'/virgin-repo/';

define('DATABASE_NAME', 'test');
define('DATABASE_USER', 'root');
define('DATABASE_HOST', 'localhost');
define('DATABASE_PASSOWD', '');
define('DIR_VENDOR', 'vendor/');
define('DIR_TEMPLATE', 'src/template/');
define('DIR_CONTROLLER', 'src/Controller/');
define('HTTP_SERVER', $http);

define('DEBUG_MODE' , true);