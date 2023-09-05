<?php
require_once __DIR__.'/../traits/Trait.php';
require_once __DIR__.'/./Product.php';
require_once __DIR__.'/./Category.php';
// require_once __DIR__.'/../traits/Trait.php';

class Food extends Product{
    // public static $type = 'Food';
    public $expiration;
    public $weight;
    public $refrigerated;
    public $ingredients;

    public function __construct(
        Category $category,
        string $name,
        float $price,
        string $description,
        $expiration,
        string $ingredients,
        float $weight = null,
        bool $refrigerated = false,
    )
    {
        parent::__construct($category,$name,$price,$description,);
        $this->expiration = $expiration;
        $this->weight = $weight;
        $this->refrigerated = $expiration;
        $this->ingredients = $ingredients;
    }
};

class Toy extends Product{
    public static $type = 'Toy';
    public function __construct(
        Category $category,
        string $name,
        float $price,
        string $description,
    )
    {
        parent::__construct($category,$name,$price,$description);
    }
};

class Bed extends Product{
    public static $type = 'Bed';
    public $dimensions;
    public $materials;

    public function __construct(
        Category $category,
        string $name,
        float $price,
        string $description,
        
        $dimensions,
        $materials = null
    )
    {
        parent::__construct($category,$name,$price,$description);
        $this->dimensions = $dimensions;
        $this->materials = $materials;
    }
}