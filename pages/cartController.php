<?php

session_start();
//session_destroy();
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if (isset($_POST['addToCart'])){
        if (isset($_SESSION['cartSession'])){
            $myProducts = array_column($_SESSION['cartSession'], 'productName');
            if (in_array($_POST['productName'], $myProducts)){
                echo "<script> 
                        alert('Item is already added');
                        window.location.href='products.php?id=$_POST[redirectId]';
                     </script>";
            }
            else{
                $count = count($_SESSION['cartSession']);
            $_SESSION['cartSession'][$count] = array('productName' => $_POST['productName'], 'productPrice' => $_POST['productPrice'], 'quantity' => 1);
            echo "<script> 
                        alert('Item added');
                        window.location.href='products.php?id=$_POST[redirectId]';
                     </script>";

            }
        }
        else{
            $_SESSION['cartSession'][0] = array('productName' => $_POST['productName'], 'productPrice' => $_POST['productPrice'], 'quantity' => 1);
            echo "<script> 
                    alert('Item added');
                    window.location.href='products.php?id=$_POST[redirectId]';
                </script>";
        }
    }

    if(isset($_POST['removeFromCart'])){
        foreach ($_SESSION['cartSession'] as $key => $value){
             if($value['productName']==$_POST['productName']){
                 unset($_SESSION['cartSession'][$key]);
                 $_SESSION['cartSession']= array_values($_SESSION['cartSession']);
                 echo "<script>
                     alert('Item removed');
                     window.location.href='cart.php';
                     </script>";
             }
        }
    }
}
?>