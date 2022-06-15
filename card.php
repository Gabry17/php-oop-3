<?php  
class Card{
    public $number;
    public $date;

    function __construct($_number, $_date){
        $this->number = $_number;
        $this->date = $_date;
    }

    public function pay(){
        $today = new \DateTime('midnight');
        $datetime = \DateTime::createFromFormat("m/y", $this->date);
        return $today < $datetime;
    }
}
?>