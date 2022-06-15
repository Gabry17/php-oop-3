<?php
require_once __DIR__ . "/product.php";

class Food extends Product{
    public $food;
    public $taste;

    function __construct($type, $_price, $_weight, $_quantity, $_food, $_taste){
        parent::__construct($type, $_price, $_weight, $_quantity);
        $this->food = $_food;
        $this->taste = $_taste;
    }
}
?>