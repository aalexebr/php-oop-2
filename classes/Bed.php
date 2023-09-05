<?php
// require_once __DIR__.'/../traits/Trait.php';
require_once __DIR__.'/./Product.php';
require_once __DIR__.'/./Category.php';


class Bed extends Product{
    public static $type = 'Bed';
    public $dimentions;
    public $materials;

    public function __construct(
        Category $category,
        string $name,
        float $price,
        string $description,
        
        $dimentions,
        $materials = null
    )
    {
        parent::__construct($category,$name,$price,$description);
        $this->materials = $materials;
        if(preg_match('/[0-9]/', $dimentions)){
            $this->dimentions = $dimentions;
        }
        else{
             throw new Exception('Incorrect Value for expitation dimentions');
        }
    }
}