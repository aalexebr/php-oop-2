<?php
require_once __DIR__.'/./Product.php';
require_once __DIR__.'/./Category.php';

class Food extends Product{
    public $expiration;
    public $weight;
    public $refrigerated;
    public $ingredients;

    public function __construct(
        $expiration,
        string $ingredients,
        float $weight = null,
        bool $refrigerated = false,
    )
    {
        $this->expiration = $expiration;
        $this->weight = $weight;
        $this->refrigerated = $expiration;
        $this->ingredients = $ingredients;
    }
};

class Toy extends Product{

};

class Bed extends Product{
    public $dimensions;
    public $materials;

    public function __construct(
        $dimensions,
        $materials
    )
    {
        $this->dimensions = $dimensions;
        $this->materials = $materials;
    }
}