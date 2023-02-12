<?php

class Product
{
    private $title;
    private $price;
    private $components = [];

    public function __construct(string $title, float $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function addComponent(Product $component)
    {
        $this->components[] = $component;
    }

    public function getCost() : float
    {
        $cost = $this->price;
        foreach ($this->components as $component) {
            $cost += $component->getCost();
        }
        return $cost;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getPrice() : float
    {
        return $this->price;
    }
}