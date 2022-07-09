<?php
    class CreditCard {
        public $number;
        public $expireDate;
        public $brand;
        public $name;
        public $surname;
        public $cvc;

        public function __construct(string $_number, string $_expireDate, string $_brand, string $_name, string $_surname, int $_cvc) {
            $this->number = $_number;
            $this->expireDate = $_expireDate;
            $this->brand = $_brand;
            $this->name = $_name;
            $this->surname = $_surname;
            $this->cvc = $_cvc;
        }

        public function setExpireDate($_expireDate) {
            $today = date('Y-m-d');
            if ($_expireDate < $today) {
                throw new Exception('La carta è scaduta');
            }
            $this->expireDate = $_expireDate;
        }
    }
?>