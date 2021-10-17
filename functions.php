<?php

    // dbcontroller connection 
    require_once("Database/DBController.php");
    // require product class
    require_once("Database/Product.php");
    // require cart class
    require_once('Database/cart.php');

    // DBController object
    $db = new DBController();

    // product
    $product = new Product($db);

    // cart object 
    $cart = new Cart($db);
    $product_shuffle = $product->getData();














?>