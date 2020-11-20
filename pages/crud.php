<?php 

// Database Connection
$mysqli = new mysqli('localhost' , 'root', '', 'onlineshopdb') or die(mysqli_error($mysqli));

// Create 
if (isset($_POST['save'])){
    $productName = $_POST['productName'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if(!empty($_POST['categoryId'])) {
        $categoryId = $_POST['categoryId'];
    } else {
        echo 'Error, please select a category';
    }
     $mysqli->query("INSERT INTO product (Name, Description, Price, CategoryId) VALUES ('$productName', '$description', '$price', '$categoryId')") or die($mysqli->error());
     header("Location: http://localhost:4444/OnlineShop/pages/product.php");
     exit();
}

// Delete
if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   $mysqli->query("DELETE FROM product WHERE Id=$id") or die($mysqli->error());
   header("Location: http://localhost:4444/OnlineShop/pages/product.php");
   exit();
}


// Update 
if (isset($_POST['update'])){

    // TODO: 
    // img folder path on solution
    //$target = "../images/".basename($_FILES['image']['name']);

    $productId = $_POST['id'];
    $productName = $_POST['productName'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $categoryId = $_POST['categoryId'];
    $image = null;
    // get the name of the image
    if (isset($_FILES['image'])){
        $image = $_FILES['image']['name'];
    }
    else{
        echo "error";
    }
    $sql = "UPDATE product SET 
            product.Name='$productName',
            product.Description = '$description',
            product.Price = '$price',
            product.CategoryId = '$categoryId',
            product.Image = '$image'
            WHERE product.Id = '$productId'";
    $mysqli->query($sql);
    header("Location: http://localhost:4444/OnlineShop/pages/product.php");
    exit();
}
?>