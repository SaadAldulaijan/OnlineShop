<?php
// includes 
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/create-product.css">
    <title>Create Product</title>
</head>
<body>
    <!-- page title -->
    <div class="page-title">
        <h2>Create Product</h2>
    </div>
    <!-- End of page title -->

    <!-- Form -->
    <div class="container">
        <div class="form-layout">
        <?php require_once 'crud.php'; ?>
            <form onsubmit="return isValid()" action="crud.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input name="productName" type="text" class="form-control" id="productName">
                    <small class="form-text text-muted" id="errName"></small>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input name="description" type="text" class="form-control" id="description">
                    <small class="form-text text-muted" id="errDescription"></small>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input name="price" type="number" class="form-control" id="price">
                    <small class="form-text text-muted" id="errPrice"></small>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control"  name="categoryId" id="category">
                        <option value="" disabled selected></option>
                        <option value="1">Phone</option>
                        <option value="2">Laptop</option>
                        <option value="3">TV</option>
                    </select>
                    <small class="form-text text-muted" id="errCategory"></small>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input name="image" type="file" class="form-control" id="image">
                </div>
                <button name="save" type="submit" class="btn btn-primary"
                    onclick="successMessage()">Save</button>
            </form>
        </div>
    </div>
    <!-- End of Form -->
    <script src="../js/script.js"></script>
</body>
</html>