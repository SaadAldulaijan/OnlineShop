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

 // Update
 // TODO: still not working
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql = "SELECT product.Id, product.Name, product.Description, product.Price, category.Name as 'Category'
            FROM product 
            INNER JOIN category ON product.CategoryId = category.Id
            AND product.Id = $id";
    $data = $mysqli->query($sql) or die($mysqli->error());

     
    if(count($data) == 1){
        $dt = $data->fetch_array();
        $productName = $dt['Name'];
        $description = $dt['Description'];
        $price = $dt['Price'];
        $category = $dt['Category'];
    }
}

// Update submit
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $productName = $_POST['Name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $sql = "UPDATE product 
            SET Name=$productName, Description=$description, Price=$price, CategoryId=$category 
            where Id=$id"
    $mysqli->query() or die($mysqli->error());
    header("Location: http://localhost:4444/OnlineShop/pages/product.php");
    exit();
}


// Delete
if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   $mysqli->query("DELETE FROM product WHERE Id=$id") or die($mysqli_error());
   header("Location: http://localhost:4444/OnlineShop/pages/product.php");
   exit();
}
?>