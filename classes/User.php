<?php
    class User {
        public $name;
        public $surname;
        public $email;
        public $discount = 0;
        protected $creditCard;

        public function __construct(string $_name, string $_surname, string $_email) {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->email = $_email;
        }

        public function setCreditCard(object $_creditCard) {
            $this->creditCard = $_creditCard;
        }

        public function getCreditCard():object {
            return $this->creditCard;
        }
    }
?>