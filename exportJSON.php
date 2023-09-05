<?php
require_once __DIR__.'/./db.php';

$jsonProducts = json_encode($allProducts);
file_put_contents('./dbJSON.json', $jsonProducts);
header('Content-Type: application/json');
echo $jsonProducts;
