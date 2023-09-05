<?php
// require_once __DIR__.'/../traits/Trait.php';
require_once __DIR__.'/./Product.php';
require_once __DIR__.'/./Category.php';

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
        // $this->expiration = $expiration;
       
        $this->refrigerated = $expiration;
        $this->ingredients = $ingredients;
        if(is_numeric($weight) && $weight > 0){
             $this->weight = $weight;
        }
        else{
            throw new Exception('Incorrect Numeric Value for weight');
        }
        if(!preg_match('/[a-zA-Z]/', $expiration)){
            $this->expiration = $expiration; 
         }
         else{
             throw new Exception('Incorrect Value for expitation date');
         }
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