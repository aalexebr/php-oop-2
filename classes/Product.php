<?php
require_once __DIR__.'/./Category.php';

class Product {
    protected $id;
    public $name;
    public $price;
    public $description;
    public $category;
    

    public function __construct(
        string $name,
        float $price,
        string $description,
        Category $category,
    )
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
    }
};