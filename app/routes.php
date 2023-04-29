<?php

use App\Router;
use App\Controllers\AccountController;
use App\Models\Person;
use App\View;

// use Router with get, post, put, delete

Router::get('/user/{id}', function ($id) {
    $data = ["id" => $id];
    $json = json_encode($data);

    header('Content-Type: application/json');
    echo $json;
});

Router::get('/', function () {
    $person = new Person("Ian the PHP master!");
    return View::make("person-detail")->with("person", $person)->render();
});

Router::get('/person/{name}', [AccountController::class, 'index']);
