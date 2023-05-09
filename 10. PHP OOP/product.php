<?php
class product {
    protected $name;
    protected $price;
    protected $discount;

    public function __construct($name, $price, $discount) {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }
    
    public function getPrice(){
        return $this->price * (1 - $this->discount);
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getDiscount(){
        return $this->discount * 100 . '%';
    }

    public function setDiscount($discount){
        $this->discount = $discount;
    }
}
?>