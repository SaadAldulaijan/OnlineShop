<?php
// includes 
include 'header.php';
// db connection
require 'dbconnection.php';

//Session 
session_start();
//session_destroy();
$categoryId = 0;
// Get categoryId from url
if(isset($_GET['id'])){
    $categoryId = $_GET['id'];
}


// Get All Products by category
// Database Connection
if($categoryId != 0){
    $sql = "SELECT product.Id, 
                product.Name, 
                product.Description, 
                product.Price, 
                product.Image, 
                category.Name as 'Category'
                FROM product
                INNER JOIN category
                ON product.CategoryId = category.Id
                WHERE category.Id = $categoryId";
    $output = $dbconn->query($sql);
}else{
    echo mysqli_error($dbconn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
</head>
<body>
    <!--  -->
    <!-- page title -->
    <div class="page-title">
        <h1>Products</h1>
        <div style="margin-left: 80%">CART: 
            <a id="cart"></a>
            <a class="btn btn-primary" href="cart.php">GO TO CART</a>
        </div>
    </div>
    <!--End of page title -->
    <!-- Body -->
    <div class="container">
        <!-- Card Section -->
        <div class="container">
            <div class="row">
                <?php while ($product = $output->fetch_assoc()){ ?>
                <div class="col">
                    <div class="card" style="width: 19rem;">
                        <img src="../images/<?php echo $product['Image'] ?>" height="250px" class="card-img-top" alt="Product Image">
                        <form action="cartController.php" method="post">
                            <div class="card-body">
                                <input type="hidden" name="redirectId" value="<?php echo $categoryId?>">
                                <h4 class="card-title"><?php echo $product['Name'] ?></h4>
                                <input type="hidden" name="productName" 
                                    value="<?php echo $product['Name'] ?>">
                                <table>
                                    <tr>
                                        <th>Desc:</th>
                                        <td><?php echo $product['Description'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Price:</th>
                                        <td><?php echo $product['Price']?> SAR</td>
                                        <input type="hidden" name="productPrice" 
                                            value="<?php echo $product['Price'] ?>">
                                    </tr>
                                </table>
                                <button type="submit" name="addToCart" onclick="addToCart(<?php echo $product['Id']?>)" class="btn btn-primary">ADD TO CART</button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- End Card Section -->
    </div>
    <!-- End of Body -->
    <script>
        var i = 1;
        function addToCart(productId){
            var cart = document.getElementById("cart");
            cart.innerHTML = i++;
        }
    </script>
</body>
</html>