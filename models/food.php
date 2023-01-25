<?php

class Food extends Product
{

    public $expDate;


    public function __construct($name, $animal, $type, $price, $expDate)
    {
        $this->expDate = $expDate;
        parent::__construct($name, $animal, $type, $price);
    }

    public function getFullProducts()
    {

        return parent::getFullProducts()
            . "<h2> Data di scadenza: " . $this->expDate . "</h2>";

    }

}