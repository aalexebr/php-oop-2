<?php
require_once __DIR__.'./classes/Category.php';
require_once __DIR__.'./classes/Product.php';
require_once __DIR__.'./classes/Sub_categories.php';

$product_one = new Product(new Category(1,'dog'),'leash',12.99,'wow',);
var_dump($product_one);

// echo $product_one->category->name;
// echo $product_one->getCategory();

$product_two = new Food(new Category(1,'dog'),'dogfood',15.99,'deliscious','11/23','meat',15.5);
var_dump($product_two);

$item1 = new Bed(new Category(2,'cat'),'Superbed1',99.99,'best bed','25x25');
var_dump($item1);

$item2 = new Food(new Category(2,'cat'),'Happy Meal',14.99,'amazing for cats','22/22','chicken',150);
var_dump($item2);