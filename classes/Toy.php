<?php
require_once __DIR__.'/./Product.php';
require_once __DIR__.'/./Category.php';


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
