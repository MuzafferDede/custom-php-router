<?php

namespace App\Controllers;

use App\Models\Person;
use App\View;

class AccountController
{
    public function index($name)
    {
        $person = new Person($name);

        $view = View::make("person-detail")->with(["person" => $person]);

        return $view->render();
    }
}
