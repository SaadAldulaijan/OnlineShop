<?php





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/create-product.css">
    <title>Create Product</title>
</head>
<body>

    <!-- Navigation Bar -->
    <div>
        <ul class="navList">
            <li><a href="#">Home</a></li>
            <li><a href="product.php">Product List</a></li>
            <li><a href="category.php">Product Categories</a></li>
        </ul>
    </div>
    <!-- End of Navigation Bar -->

    <!-- Action area -->
    <div class="actionArea">
        <h2>Create Product</h2>
    </div>
    <!-- End of Action area -->
    <!-- Form -->
    <div class="container">
        <div class="form">
            <form action="#">
                <label for="productName">Product Name</label>
                <input type="text" id="productName" name="productName" placeholder="Product Name">

                <label for="description">Product Description</label>
                <input type="text" id="description" name="description" placeholder="Product Description">

                <label for="price">Product Price</label>
                <input type="number" id="price" name="price" placeholder="Product Price">

                <label for="category">Category</label>
                <select id="category" name="category">
                    <option value=""></option>
                    <option value="1">Phone</option>
                    <option value="2">Laptop</option>
                    <option value="3">TV</option>
                </select>
            
                <input class="btn btn-primary" type="submit" value="Add">
            </form>
        </div>
    </div>
    <!-- End of Form -->
</body>
</html>