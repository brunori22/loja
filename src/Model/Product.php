<?php

namespace APP\Model;

class Product
{
    private string $name;
    private float $price;
    private int $quantity;
    private Provider $provider;

    private function calculateFinalPrice(float $cost, float $tax, float $costOfOperation, float $lucre = 0.4): void
    {
        $this->price = ($cost + $tax + $costOfOperation) / (1 - $lucre);
    }

    public function calculateCostPrice(float $tax, float $costOfOperation, float $lucre = 0.4): float
    {
        return $this->price - $tax - $costOfOperation - ($this->price * $lucre);
    }

    public function calculateMarkup(float $costOfOperation): float
    {
        return $this->price / $costOfOperation;
    }
}
