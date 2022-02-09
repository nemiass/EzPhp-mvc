<?php
declare(strict_types=1);

use app\core\Router;

require_once("../config/autoload.php");
require_once("../config/config.php");

$router = new Router();
$router->run();
