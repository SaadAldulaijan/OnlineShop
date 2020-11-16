<?php





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

    <!-- Navigation Bar -->
    <ul class="navList">
        <li class="navListItem"><a class="navListItemAnchor" href="#">Home</a></li>
        <li class="navListItem"><a class="navListItemAnchor" href="product.php">Product List</a></li>
        <li class="navListItem"><a class="navListItemAnchor" href="category.php">Product Categories</a></li>
    </ul>
    <!-- End of Navigation Bar -->

    <!-- page title -->
    <div class="page-title">
        <h2>Create Product</h2>
    </div>
    <!-- End of page title -->

    <!-- Form -->
    <div class="container">
        <div class="form-layout">
        <?php require_once 'process.php'; ?>
            <form action="process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input name="productName" type="text" class="form-control" id="productName">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input name="description" type="text" class="form-control" id="description">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input name="price" type="number" class="form-control" id="price">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control"  name="categoryId">
                        <option value="" disabled selected></option>
                        <option value="1">Phone</option>
                        <option value="2">Laptop</option>
                        <option value="3">TV</option>
                    </select>
                </div>
                <button name="save" type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
    <!-- End of Form -->
</body>
</html>