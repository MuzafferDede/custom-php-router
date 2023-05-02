<?php

namespace App\Controllers;

use App\Models\Person;
use App\Request;
use App\View;

class AccountController
{
    public function index($name)
    {
        $person = new Person($name);

        $view = View::use("person-detail")->with(["person" => $person]);

        return $view->render();
    }

    public function store()
    {
        $postData = Request::get("postData");
        $getData = Request::get("getData");
        var_dump([$postData, $getData]);
    }
}
