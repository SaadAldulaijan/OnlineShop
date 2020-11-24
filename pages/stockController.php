<?php

// db connection
require 'dbconnection.php';

// statistical data
// Total Products
$sql_AllProduct = "SELECT count(*) AS 'Total' FROM product";

$output1 = $dbconn->query($sql_AllProduct) or die(mysqli_error($dbconn));
$getProducts = $output1->fetch_assoc();
//echo $getProducts['Total'];

// Get TVs 
$sql_GetTv = "SELECT count(*) AS 'TV'
        FROM product 
        INNER JOIN category
        ON product.CategoryId = category.Id
        WHERE category.Name = 'TV'";

$output2 = $dbconn->query($sql_GetTv) or die(mysqli_error($dbconn));
$getTv = $output2->fetch_assoc();
//echo $getTv['TV'];

// Get Phones
$sql_GetPhone = "SELECT count(*) AS 'Phone'
        FROM product 
        INNER JOIN category
        ON product.CategoryId = category.Id
        WHERE category.Name = 'Phone'";
$output3 = $dbconn->query($sql_GetPhone) or die(mysqli_error($dbconn));
$getPhone = $output3->fetch_assoc();
//echo $getPhone['Phone'];

// Get Laptops
$sql_GetLaptops = "SELECT count(*) AS 'Laptop'
        FROM product 
        INNER JOIN category
        ON product.CategoryId = category.Id
        WHERE category.Name = 'Laptop'";
$output4 = $dbconn->query($sql_GetLaptops) or die(mysqli_error($dbconn));
$getLaptop = $output4->fetch_assoc();
//echo $getLaptop['Laptop'];

?>