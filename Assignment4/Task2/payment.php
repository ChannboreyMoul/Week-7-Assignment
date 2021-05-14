<?php

    abstract class Payment {

        private string $product;
        private float $price;
        private int $quantity;
        private string $paymentName;

        abstract public function TotalPrice();

    }

?>