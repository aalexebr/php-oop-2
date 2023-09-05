<?php
require_once __DIR__.'/../traits/Trait.php';
require_once __DIR__.'/./Category.php';
require_once __DIR__.'/./Sub_categories.php';



class Product {
    // protected $id;
    // public $name;
    use Id;
    public $price;
    public $description;
    public $category;
    

    public function __construct(
        Category $category,
        string $name,
        float $price,
        string $description,
    )
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
    }

    public function getCategory(){
       return $this->category->name;
    }
};