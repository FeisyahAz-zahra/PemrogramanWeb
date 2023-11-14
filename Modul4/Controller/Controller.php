<?php

namespace Controller;

class Controller
{
    //variabel atribut
    var $controllerName;
    var $controllerMethod;

    //method untuk mengambil semua atribut
    public function getControllerAtribut()
    {
        return[
            "ControllerName" => $this->controllerName,
            "Method" => $this->controllerMethod
        ];
    }
}