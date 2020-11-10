<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Create Product</title>
</head>
<body>
    
        <!-- Navigation Bar -->
        <div>
            <ul class="navList">
                <li><a href="#">Home</a></li>
                <li><a href="#">Product List</a></li>
                <li><a href="category.php">Product Categories</a></li>
            </ul>
        </div>
        <!-- End of Navigation Bar -->

        <!-- Action area -->
        <div class="actionArea">
            <h2>Stock Management</h2>
            <a class="btn btn-primary" href="createProduct.php">Create New</a>
        </div>
        <!-- End of Action area -->
        <br />

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
                    <tr>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>
                            <a href="#">Delete</a>
                            <a href="#"> | Update</a>
                        </td>
                    </tr>
                    <tr>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>
                            <a href="#">Delete</a>
                            <a href="#"> | Update</a>
                        </td>
                    </tr>
                    <tr>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>
                            <a href="#">Delete</a>
                            <a href="#"> | Update</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>
</html>