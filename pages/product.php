<?php

$mysqli = new mysqli('localhost' , 'root', '', 'onlineshopdb') or die(mysqli_error($mysqli));
$sql = "SELECT product.Id, product.Name, product.Description, product.Price, category.Name as 'Category'
        FROM product INNER JOIN category ON product.CategoryId = category.Id";
$output = $mysqli->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="../css/styles.css"> -->
    <link rel="stylesheet" href="../css/main.css">
    <title>Create Product</title>
</head>
<body>
    
    <!-- Navigation Bar -->
        <ul class="navList">
            <li class="navListItem"><a class="navListItemAnchor" href="#">Home</a></li>
            <li class="navListItem"><a class="navListItemAnchor" href="#">Product List</a></li>
            <li class="navListItem"><a class="navListItemAnchor" href="category.php">Product Categories</a></li>
        </ul>
    <!-- End of Navigation Bar -->
    
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
                    <?php require_once 'process.php' ?>
                    <td>
                        <a href="process.php?delete=<?php echo $dt['Id'] ?>">Delete</a>
                        <a href="process.php?edit=<?php echo $dt['Id'] ?>"> | Update</a>
                    </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</body>
</html>