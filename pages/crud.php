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

    $image = null;
    // get the name of the image
    if (isset($_FILES['image'])){
        $image = $_FILES['image']['name'];
    }
    else{
        echo "error";
    }
     $mysqli->query("INSERT INTO product (Name, Description, Price, CategoryId, Image) VALUES ('$productName', '$description', '$price', '$categoryId', '$image')") or die($mysqli->error());
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
    $target = "../images/".basename($_FILES['image']['name']);

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

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $msg = "Photo uploaded successfully";
    }else{
        echo "Could not upload the image";
    }
    header("Location: http://localhost:4444/OnlineShop/pages/product.php");
    exit();
}
?>