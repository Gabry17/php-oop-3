<?php
trait Info{
    public $description;
    public $origin;

    public function addInfo(){
        return  " Descrizione: $this->description Origine: $this->origin";
    }
}
?>