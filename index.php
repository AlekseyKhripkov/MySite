<?php

error_reporting (E_ALL);

include ('config.php');
include (SITE_PATH . 'core' . DS . 'core.php');

$router = new Router(SITE_PATH . 'Controller');
$router->start();
