<?php

use App\Router;
use App\Controllers\AccountController;
use App\Models\Person;
use App\View;

// use Router with get, post, put, delete

Router::get('/', function () {
    $person = new Person("Ian the PHP master!");
    return View::use("person-detail")->with("person", $person)->render();
});

Router::get('/person/{name}', [AccountController::class, 'index']);
