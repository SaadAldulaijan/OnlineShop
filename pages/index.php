<?php
// includes 
include 'header.php';

// db connection
require 'dbconnection.php';

// Get All Categories
$sql = "SELECT * FROM category";
$output = $dbconn->query($sql);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
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
            </div>
        </div>
        <!-- End Card Section -->
    </div>
    <!-- End of Body -->

    
</body>
</html>