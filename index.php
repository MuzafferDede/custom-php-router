<?php

use App\Router;

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/app/routes.php';

Router::dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
