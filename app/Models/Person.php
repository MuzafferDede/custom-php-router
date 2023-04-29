<?php

namespace  App\Models;

class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
