<?php
require_once __DIR__.'./classes/Category.php';
require_once __DIR__.'./classes/Product.php';
require_once __DIR__.'./classes/Sub_categories.php';

$product_one = new Product('leash',12.99,'wow',new Category(1,'dog'));
var_dump($product_one);

// echo $product_one->category->name;
// echo $product_one->getCategory();

$product_two = new Food('dogfood',15.99,'deliscious',new Category(1,'dog'),'11/23','meat',15.5);
var_dump($product_two);