<?php
    require_once __DIR__ . '/Product.php';

    class Food extends Product {
        public $expireDate;

        public function __construct(string $_name, int $_price, int $_quantity, string $_expireDate, string $_animalType = "") {
            parent::__construct($_name, $_price, $_quantity, $_animalType);
            $this->expireDate = $_expireDate;
        }
    }
?>