<?php

class Product
{

    public $name;
    public $animal;
    public $type;
    public $price;

    public function __construct($name, $animal, $type, $price)
    {
        $this->name = $name;
        $this->animal = $animal;
        $this->type = $type;
        $this->price = $price;
    }

    public function getFullProducts()
    {

        return "<h1>" . $this->name . "</h1>"
            . "<h2> animale: " . $this->animal . "</h2>"
            . "<h2> tipo di articolo: " . $this->type . "</h2>"
            . "<h4> Prezzo: €" . $this->price . "</h4>";
    }

}