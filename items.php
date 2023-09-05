<?php
require_once __DIR__.'./classes/Category.php';
require_once __DIR__.'./classes/Product.php';
require_once __DIR__.'./classes/Sub_categories.php';
require_once __DIR__.'/traits/Trait.php';



$allProducts =[];
try{
    $item1 = new Bed($categoryCat,'Superbed1',99.99,'best bed','25x25');
    $allProducts =[$item1];

    $item2 = new Food($categoryCat,'Happy Meal',14.99,'amazing for cats','22/22','chicken',150);
    $allProducts =[$item1,$item2];

    $item3 = new Toy($categoryDog,'bone',10.50,'for teeth');
    $allProducts =[$item1,$item2,$item3];
    $item4 = new Food($categoryCat,'catfood',9.99,'best for cats','11/24','fish',100);
    $allProducts =[$item1,$item2,$item3,$item4];
    $item5 = new Food($categoryDog,'dogfood',15.99,'the best food for dogs ever','11/23','meat',15.5);
    $allProducts =[$item1,$item2,$item3,$item4,$item5];
    $item6 = new Bed($categoryDog,'dogbed7000',199.99,'the greatest sleeping place of all time','20x20','cotton and linen');
    $allProducts =[$item1,$item2,$item3,$item4,$item5,$item6];
    // array_push($allProducts,$item1,$item2,$item3, $item4, $item5);
}
catch(Exception $e){
    echo $e->getMessage();
}

// $item1 = new Bed($categoryCat,'Superbed1',99.99,'best bed','25x25');
// $item2 = new Food($categoryCat,'Happy Meal',14.99,'amazing for cats','22/22','chicken',150);
// $item3 = new Toy($categoryDog,'bone',10.50,'for teeth');
// $item4 = new Food($categoryCat,'catfood',9.99,'best for cats','11/24','fish',100);
// $item5 = new Food($categoryDog,'dogfood',15.99,'deliscious','11/23','meat',15.5);
// array_push($allProducts,$item1,$item2,$item3, $item4, $item5);
// var_dump($allProducts);
