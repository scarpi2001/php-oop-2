<?php

class Toy extends Product
{

    public function __construct($name, $animal, $type, $price)
    {
        parent::__construct($name, $animal, $type, $price);
    }

    public function getFullProducts()
    {
        return parent::getFullProducts();
    }

}