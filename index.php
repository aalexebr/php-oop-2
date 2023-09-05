<?php
require_once __DIR__.'./classes/Category.php';
require_once __DIR__.'./classes/Product.php';
require_once __DIR__.'./classes/Sub_categories.php';
require_once __DIR__.'./items.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="style/style.css">
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP OOP 2</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div class="container">
            <div class="row wrap ">
                <?php foreach($allProducts as $index => $product){
                ?>
                    <div class="col">
                        <div class="card">
                            <div>
                                <span class="capitalize">
                                    category : <?php 
                                        // if($product->category->id == 1){
                                        //     echo '<i class="fa-solid fa-dog"></i>';
                                        // }
                                        // elseif($product->category->id == 2){
                                        //     echo '<i class="fa-solid fa-cat"></i>';
                                        // }
                                        // echo $product->category->name;
                                        echo $product->category->icon;
                                    ?>
                                </span>
                            </div>
                            <div class="text-center">
                                <h1 class="capitalize">
                                    <?php
                                    echo $product->name;
                                    ?>
                                </h1>
                            </div>
                            <div>
                                <p>
                                    <?php
                                        echo $product->description;
                                    ?>
                                </p>
                                <span>
                                    <?php
                                        if($product::$type <> null){
                                            echo 'type: '.$product::$type;
                                        }
                                    ?>
                                </span>
                                <h4>
                                    <?php
                                        echo $product->price.'$';
                                    ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                <?php   
                }
                ?>  
            </div>
        </div>
    </main>
</body>
</html>