<?php

use App\Router;

Router::get('/user/{id}/{name}', function ($id, $name) {
    $data = ["id" => $id, "name" => $name];
    $json = json_encode($data);

    header('Content-Type: application/json');
    echo $json;
});
