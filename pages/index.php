<?php

// Get All Categories

// Database Connection
$mysqli = new mysqli('localhost' , 'root', '', 'onlineshopdb') or die(mysqli_error($mysqli));
$sql = "SELECT * FROM category";
$output = $mysqli->query($sql);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Category</title>
</head>
<body>
    <!-- Navigation Bar -->
    <ul class="navList">
        <li class="navListItem"><a class="navListItemAnchor" href="#">Home</a></li>
        <li class="navListItem"><a class="navListItemAnchor" href="product.php">Product List</a></li>
        <li class="navListItem"><a class="navListItemAnchor" href="category.php">Product Categories</a></li>
    </ul>
    <!-- End of Navigation Bar -->

    
    <!-- page title -->
    <div class="page-title">
        <h1>Welcome To Our Online Shop</h1>
    </div>
    
    <!--End of page title -->
    <!-- Body -->
    <div class="container">
        <!-- Card Section -->
        <div class="container">
            <div class="row">
                <?php while ($category = $output->fetch_assoc()){ ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/<?php echo $category['Name'] ?>.jpg" height="250px" class="card-img-top" alt="Category Images">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $category['Name'] ?></h4>
                            <p class="card-text"> <?php echo $category['Slogan'] ?> </p>
                            <a href="products.php?id=<?php echo $category['Id'] ?>" name="explore" class="btn btn-primary">Explore</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/laptops.jpg" height="250px" class="card-img-top" alt="Mobile Phones Images">
                        <div class="card-body">
                            <h5 class="card-title">Laptops</h5>
                            <p class="card-text"> </p>
                            <a href="#" class="btn btn-primary">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="../images/tvs.jpg" height="250px" class="card-img-top" alt="Mobile Phones Images">
                        <div class="card-body">
                            <h5 class="card-title">Phones</h5>
                            <p class="card-text"> </p>
                            <a href="#" class="btn btn-primary">Explore</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- End Card Section -->
    </div>
    <!-- End of Body -->

    
</body>
</html>