<?php

use App\Router;

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../routes/api.php';
require __DIR__ . '/../routes/web.php';

Router::dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
