<?php

use App\Request;
use App\Router;

Router::get('/user/{id}/{name}', function ($id, $name) {
    $requestParameter = Request::get("age");

    $data = ["id" => $id, "name" => $name, 'age' => $requestParameter];
    $json = json_encode($data);

    header('Content-Type: application/json');
    echo $json;
});
