<?php
namespace App;
class Product {

    private $name;
    private $quantity;
    
    public function __construct($name , $quantity)
    {
        $this->name = $name;
        $this->quantity = $quantity;
    }

    public function increaseQuantity($quantity)
    {
        if($quantity <= 0){
            throw new \InvalidArgumentException('Quantity Can not be 0 or less!');
        }
        $this->quantity += $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function decreaseQuantity($quantity)
    {
        if($this->quantity - $quantity < 0){
            $this->quantity = 0;
        }
        else $this->quantity -= $quantity;
    }

}