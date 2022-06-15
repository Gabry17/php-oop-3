<?php
require_once __DIR__ . "/info.php";

class Product {
    use Info;

    public $type;
    public $price;
    public $weight;
    public $quantity;
    public $available = true;

    function __construct($_type, $_price, $_weight, $_quantity){
        $this->type = $_type;
        $this->price = $_price;
        $this->weight = $_weight;
        $this->quantity = $_quantity;
    }

    public function productInfo() {
        return "Tipo: $this->type Peso: $this->weight gr Prezzo: $this->price €";
    }

    public function productPrice(){
        $product_price = $this->price * $this->quantity;

        return $product_price;
    }

    public function notAvailable(){
        $disp = "";
        if (!$this->available) {
            $disp = "Non Disponibile";
        }
        return $disp;
    }
}

?>