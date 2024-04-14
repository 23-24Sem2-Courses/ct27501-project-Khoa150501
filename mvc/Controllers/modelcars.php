<?php
require_once "./mvc/Models/cars.php";
require_once "./mvc/core/DB.php";

class Cars extends Controllers{
    private $carModel;

    public function __construct($conn) {
        $this->carModel = new Cars($conn);
    }

   
}
?>