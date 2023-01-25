<?php

class Product
{

    public $name;
    public $animal;
    public $type;

    public function __construct($name, $animal, $type)
    {
        $this->name = $name;
        $this->animal = $animal;
        $this->type = $type;
    }

    public function getFullProducts()
    {

        return "<div> <h1> name: " . $this->name . "</h1>"
            . "<h2> animal: " . $this->animal . "</h2>"
            . "<h2> type: " . $this->type . "</h2> </div>";
    }

}