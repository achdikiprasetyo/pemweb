<?php
require_once 'product.php';
class cdcabinet extends product {
    private $capacity;
    private $model;

    public function __construct($name,$price,$discount,$capacity,$model){
        parent::__construct($name,$price,$discount);
        $this->capacity = $capacity;
        $this->model = $model;

        $this->price *= 1.15;
    }

    public function getCapacity(){
        return $this->capacity;
    }

    public function setCapacity($capacity){
        $this->capacity = $capacity;
    }

    public function getModel(){
        return $this->model;
    }

    public function setModel($model){
        $this->model = $model;
    }
}
?>