<?php 
class User {
    public $name;
    public $surname;
    public $email;
    public $cash = false;
    public $cart = [];

    //aggiungere prodotti al carrello
    public function addCart($product){
        if($product->available){
            $this->cart[] = $product;
        } else {
            throw new Exception("Al momento non e disponibile");
        }
    } 

    //registration
    public function registration(){
        if($this->name && $this->surname && $this->email){
            return true;
        } 
        return false;
    }

    public function addRegistration($_name, $_surname, $_email){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }

    //totale prezzo carrello
    //se utente registrato sconto
    public function totalPrice(){
        $tot = 0;
        $discount = 0;
        foreach($this->cart as $item){
            if ($this->registration()) {
                $totPrice += $item->price * $item->quantity;
                $discount = $totPrice * 20 / 100;
                $tot = $totPrice - $discount;
            } else {
                $tot += $item->price * $item->quantity;
            }
        }

        return $tot;
    }

    //Pagamento
    public function pay(){
        $payment = "";
        if($this->cash){
            $payment = "Il tuo ordine è andato a buon fine";
        } else {
            $payment = "Pagamento annullato";
        }

        return $payment;
    }
}
?>