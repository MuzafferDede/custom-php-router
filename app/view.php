<?php

namespace App;

class View
{
    protected $view;
    protected $data;

    public function __construct($view, $data = [])
    {
        $this->view = $view;
        $this->data = $data;
    }

    public static function use($view)
    {
        return new static($view);
    }

    public function with($key, $value = null)
    {
        if (is_array($key)) {
            $this->data = array_merge($this->data, $key);
        } else {
            $this->data[$key] = $value;
        }
        return $this;
    }

    public function render()
    {
        extract($this->data);
        ob_start();
        require_once  __DIR__ . '/Views/' . $this->view . '.php';
        $content = ob_get_clean();
        echo $content;
    }
}
