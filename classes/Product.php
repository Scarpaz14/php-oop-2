<?php
    class Product {
        public $name;
        public $price;
        public $quantity;
        public $animalType;

        public function __construct(string $_name, float $_price, int $_quantity, string $_animalType = "") {
            $this->name = $_name;
            $this->price = $_price;
            $this->quantity = $_quantity;
            $this->animalType = $_animalType;
        }
    }
?>