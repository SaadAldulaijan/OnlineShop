<?php

// includes 
include 'header.php';
// db connection
require 'dbconnection.php';

// get all products
$sql = "SELECT product.Id, 
               product.Name, 
               product.Description, 
               product.Price, 
               product.Image, 
               category.Name as 'Category'
               FROM product 
               INNER JOIN category 
               ON product.CategoryId = category.Id";
$output = $dbconn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Create Product</title>
</head>
<body>
    
    <!-- page title -->
    <div class="page-title">
        <h1>Stock Management</h1>
        <a class="btn btn-primary" href="createProduct.php">Create New</a>
    </div>
    <!-- End of page title -->

    <div class="container">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($dt = $output->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $dt['Name'] ?></td>
                    <td><?php echo $dt['Description'] ?></td>
                    <td><?php echo $dt['Price'] ?> SAR</td>
                    <td><?php echo $dt['Category'] ?></td>
                    <td><?php echo $dt['Image'] ?></td>
                    <?php require_once 'crud.php' ?>
                    <td>
                        <a href="crud.php?delete=<?php echo $dt['Id'] ?>">Delete</a>
                        <a href="updateProduct.php?id=<?php echo $dt['Id'] ?>"> | Update</a>
                    </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</body>
</html>