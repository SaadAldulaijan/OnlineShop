<?php 
include 'header.php'; 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Quantity</th>
            </thead>
            <tbody>
                <?php 
                    $total = 0;
                    $index = 0;
                    if(isset($_SESSION['cartSession'])){
                        foreach ($_SESSION['cartSession'] as $key => $value){
                            $index++;
                            $total = $total+$value['productPrice'];
                            echo"
                            <tr>
                                <td>$index</td>
                                <td>$value[productName]</td>
                                <td>$value[productPrice]</td>
                            </tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
        <div>
            <!-- TODO: needs some styling -->
            <h4>Total Price: </h4>
            <h5><?php echo $total ?> SAR </h5>
        </div>
    </div>
</body>
</html>