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
    <link rel="stylesheet" href="style/style.css">
    <title>PHP OOP 2</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div class="container">
            <div class="row wrap justify-center">
                <?php foreach($allProducts as $index => $product){
                ?>
                    <div class="col">
                        <div class="card">
                            <div>
                                <span class="capitalize">
                                    category : <?php 
                                        echo $product->category->name;
                                    ?>
                                </span>
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