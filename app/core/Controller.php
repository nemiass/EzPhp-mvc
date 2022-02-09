<?php

namespace app\core;

abstract class Controller
{

    public function render($view, $data=[])
    {
       //
    }

    abstract public function index(Request $request);
}
