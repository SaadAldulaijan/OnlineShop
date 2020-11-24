<?php 

// includes 
include 'header.php';

// db connection
require 'dbconnection.php';

if (isset($_GET['id'])){
    $productId = $_GET['id'];

    $sql = "SELECT product.Id, 
               product.Name, 
               product.Description, 
               product.Price, 
               product.Image, 
               category.Name as 'Category'
            FROM product 
            INNER JOIN category 
            ON product.CategoryId = category.Id 
            WHERE product.Id = $productId ";
    $output = $dbconn->query($sql);
    $item = $output->fetch_assoc();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/create-product.css">
    <title>Create Product</title>
</head>
<body>
    <!-- page title -->
    <div class="page-title">
        <h2>Edit <?php echo $item['Name'] ?></h2>
    </div>
    <!-- End of page title -->

    <!-- Form -->
    <div class="container">
        <div class="form-layout">
        <?php require_once 'crud.php'; ?>
            <form action="crud.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $productId ?>">
                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input name="productName" type="text" class="form-control" id="productName"
                        value="<?php echo $item['Name'] ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input name="description" type="text" class="form-control" id="description"
                        value="<?php echo $item['Description'] ?>">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input name="price" type="number" class="form-control" id="price"
                        value="<?php echo $item['Price'] ?>">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control"  name="categoryId">
                        <option value="" disabled selected></option>
                        <option value="1">Phone</option>
                        <option value="2">Laptop</option>
                        <option value="3">TV</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input name="image" type="file" class="form-control" id="image" 
                        value="<?php echo $item['Image'] ?>">
                </div>
                <button name="update" type="submit" class="btn btn-primary" 
                    onclick="alert('Item Updated Successfully');">Save Changes</button>
            </form>
        </div>
    </div>
    <!-- End of Form -->
</body>
</html>