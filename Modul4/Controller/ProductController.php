<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";

use Traits\ResponseFormatter;

class ProductController extends Controller
{
    use ResponseFormatter;

    public function __construct()
    {
        $this->controllerName = "Get All Product";
        $this->controllerMethod = "Get";
    }

    public function getAllProduct()
    {
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Spageti",
            "Jus Jambu"
        ];

        $response = [
            "controller_attribut" => $this->getControllerAtribut(),
            "product" => $dummyData
        ];

        return $this->responseFormatter(200, "Success", $response);
    }
}