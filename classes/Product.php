<?php
require_once __DIR__.'/../traits/Trait.php';
require_once __DIR__.'/./Category.php';



class Product {
    protected $id;
    public $name;
    // use Id;
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
        
        $this->category = $category;
        if(preg_match("#^[a-zA-Z0-9äöüÄÖÜ ]+$#", $description)){
           $this->description = $description; 
        }
        else{
            throw new Exception('Incorrect Value for description');
        }

    }

    public function getCategory(){
       return $this->category->name;
    }
};