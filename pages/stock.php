<?php require 'stockController.php';

$product = (int)$getProducts['Total'];
$tv = (int)$getTv['TV'];
$phone = (int)$getPhone['Phone'];
$laptop = (int)$getLaptop['Laptop'];

// echo $tv + $phone + $laptop;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <!-- Chartjs Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css" integrity="sha512-C7hOmCgGzihKXzyPU/z4nv97W0d9bv4ALuuEbSf6hm93myico9qa0hv4dODThvCsqQUmKmLcJmlpRmCaApr83g==" crossorigin="anonymous" />
    <title>Stock</title>
</head>
<body>
     <!-- Navigation Bar -->
    <ul class="navList">
        <li class="navListItem"><a class="navListItemAnchor" href="index.php">Home</a></li>
        <li class="navListItem"><a class="navListItemAnchor" href="product.php">Product List</a></li>
        <li class="navListItem"><a class="navListItemAnchor" href="stock.php">Stock</a></li>
    </ul>
    <!-- End of Navigation Bar -->

    
    <!-- page title -->
    <div class="page-title">
        <h1>Stock</h1>
    </div>
    <!--End of page title -->

    <div class="container">
        <div class="row">
            <div class="col">
                <canvas id="myChart" height="80%" width="170%"></canvas>
            </div>
            <div class="col">
                <br />
                <table class="table table-bordered">
                    <tr>
                        <th>Total No. of Laptops</th>
                        <td><?php echo $laptop ?></td>
                    </tr>
                    <tr>
                        <th>Total No. of TVs</th>
                        <td><?php echo $tv ?></td>
                    </tr>
                    <tr>
                        <th>Total No. of Phones</th>
                        <td><?php echo $phone ?></td>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align: center">Total No. of Products: <?php echo $product ?></th>
                    </tr>
                </table>
            </div>
        </div>
        
    </div>

    <!-- Chartjs Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js" integrity="sha512-hZf9Qhp3rlDJBvAKvmiG+goaaKRZA6LKUO35oK6EsM0/kjPK32Yw7URqrq3Q+Nvbbt8Usss+IekL7CRn83dYmw==" crossorigin="anonymous"></script>
    <!-- Chartjs Setup -->
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Laptops', 'TVs', 'Phones'],
            datasets: [{
                label: '# of Products',
                data: [<?php echo $laptop ?>, <?php echo $tv ?>, <?php echo $phone ?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>
</body>
</html>