<?php

class Cart
{
    private $items = [];

    public function addItem(Product $product)
    {
        $this->items[] = $product;
    }

    public function removeItem(Product $product)
    {
        $key = array_search($product, $this->items);
        if ($key !== false) {
            unset($this->items[$key]);
        }
    }

    public function getTotalCost() : float
    {
        $totalCost = 0;
        foreach ($this->items as $item) {
            $totalCost += $item->getCost();
        }
        return $totalCost;
    }
}