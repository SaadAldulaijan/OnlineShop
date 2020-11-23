<?php


$mysqli = new mysqli('localhost' , 'root', '', 'onlineshopdb') or die(mysqli_error($mysqli));

// Total Products
$sql_AllProduct = "SELECT count(*) AS 'Total' FROM product";

$output1 = $mysqli->query($sql_AllProduct) or die(mysqli_error($mysqli));
$getProducts = $output1->fetch_assoc();
//echo $getProducts['Total'];

// Get TVs 
$sql_GetTv = "SELECT count(*) AS 'TV'
        FROM product 
        INNER JOIN category
        ON product.CategoryId = category.Id
        WHERE category.Name = 'TV'";

$output2 = $mysqli->query($sql_GetTv) or die(mysqli_error($mysqli));
$getTv = $output2->fetch_assoc();
//echo $getTv['TV'];

// Get Phones
$sql_GetPhone = "SELECT count(*) AS 'Phone'
        FROM product 
        INNER JOIN category
        ON product.CategoryId = category.Id
        WHERE category.Name = 'Phone'";
$output3 = $mysqli->query($sql_GetPhone) or die(mysqli_error($mysqli));
$getPhone = $output3->fetch_assoc();
//echo $getPhone['Phone'];

// Get Laptops
$sql_GetLaptops = "SELECT count(*) AS 'Laptop'
        FROM product 
        INNER JOIN category
        ON product.CategoryId = category.Id
        WHERE category.Name = 'Laptop'";
$output4 = $mysqli->query($sql_GetLaptops) or die(mysqli_error($mysqli));
$getLaptop = $output4->fetch_assoc();
//echo $getLaptop['Laptop'];

?>