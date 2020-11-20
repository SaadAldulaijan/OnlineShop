<?php

$categoryId = 0;
// Get categoryId from url
if(isset($_GET['id'])){
    $categoryId = $_GET['id'];
}


// Get All Products by category
// Database Connection
$mysqli = new mysqli('localhost' , 'root', '', 'onlineshopdb') or die(mysqli_error($mysqli));
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
    $output = $mysqli->query($sql);
}else{
    echo mysqli_error($mysqli);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Online Shop</title>
</head>
<body>
     <!-- Navigation Bar -->
    <ul class="navList">
        <li class="navListItem"><a class="navListItemAnchor" href="index.php">Home</a></li>
        <li class="navListItem"><a class="navListItemAnchor" href="product.php">Product List</a></li>
        <li class="navListItem"><a class="navListItemAnchor" href="category.php">Product Categories</a></li>
    </ul>
    <!-- End of Navigation Bar -->

    
    <!-- page title -->
    <div class="page-title">
        <h1>Products</h1>
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
                        <img src="../images/<?php echo $product['Image'] ?>" height="250px" class="card-img-top" alt="Mobile Phones Images">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $product['Name'] ?></h4>

                            <table>
                                <tr>
                                    <th>Category:</th>
                                    <td><?php  ?></td>
                                </tr>
                                <tr>
                                    <th>Desc:</th>
                                    <td><?php echo $product['Description'] ?></td>
                                </tr>
                                <tr>
                                    <th>Price:</th>
                                    <td><?php echo $product['Price']?> SAR</td>
                                </tr>
                            </table>
                            <button onclick="alert('Added to Cart')" class="btn btn-primary">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- End Card Section -->
    </div>
    <!-- End of Body -->

    <script>
        // function saveToDB(){
        //     // this is ajax call
        //     $.ajax({
        //         url: "",
        //         method: "POST",
        //         dataType: 'json',
        //         data: {
        //             save: 1,
        //             ratedIndex: ratedIndex,
        //         }, success: function (response){
        //             //console.log(response);
        //         }
        //     });
        // }
    </script>
</body>
</html>