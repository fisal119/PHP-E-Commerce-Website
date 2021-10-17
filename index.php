<?php

ob_start();

// include header 
include_once('header.php')
?>

<?php

// include banner area
include_once('template/_banner-area.php');

// include top sale
include_once('template/_top-sale.php');

// include special price
include_once('template/_special-price.php');

// include banner ads
include_once('template/_banner-adds.php');

// include new phones
include_once('template/_new-phones.php');

// include blogs
include_once('template/_blogs.php');

?>

<?php
//   include footer
include_once('footer.php')
?>