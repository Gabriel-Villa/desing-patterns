<?php

namespace App\Access;

use App\Contracts\IProduct;

class Desserts implements IProduct
{

    public string $name;
    public string $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getResumeDessert()
    {
        dd("Dessert: {$this->getName()}. Total: \${$this->getPrice()}");
    }

}
