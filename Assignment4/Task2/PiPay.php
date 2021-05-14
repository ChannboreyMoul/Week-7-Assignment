<?php

    require_once 'payment.php';

    class PiPay_pay extends Payment {

        public function __construct($product, $price, $quantity, $paymentName) {

            $this->product = $product;
            $this->price = $price;
            $this->quantity = $quantity;
            $this->paymentName = $paymentName;
        }

        public function TotalPrice() {

            echo $this->price * $this->quantity;
        }
    }

?>