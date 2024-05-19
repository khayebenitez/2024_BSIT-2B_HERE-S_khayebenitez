<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!-- css file -->
    <link rel="stylesheet" href="style_admin.css">
    <style>
    </style>

</head>

<body>
    <!-- navbar-->
    <div class="container-fluid p-0">
        <!--first part-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="adminlogo.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg>
                    <ul class=" navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome Khaye!</a>
                    </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!--second part-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!--third part-->
        <div class="row">
            <div class="col-md-12 bg-secondary align-items-center">
                <div class="p-3">
                    <a href="#"><img src="khaye.jpg" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Khaye</p>
                </div>
                <!-- button*10>a.nav-link.text-light.bg-info.my-1 -->
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert
                            Products</a></button>
                    <button><a href="view_products.php" class="nav-link text-light bg-info my-1">View
                            Products</a></button>
                    <button><a href="index_admin.php?insert_categories" class="nav-link text-light bg-info my-1">Insert
                            Categories</a></button>
                    <button><a href="view_categories.php" class="nav-link text-light bg-info my-1">View
                            Categories</a></button>
                    <button><a href="index_admin.php?insert_brands" class="nav-link text-light bg-info my-1">Insert
                            Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View
                            Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Payment</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                    </button>
                </div>
            </div>
        </div>

        <!-- fourth part -->
        <div class="container my-5">
            <?php 
            if (isset($_GET['insert_categories']))
                  include('insert_categories.php');
            ?>
            <?php 
            if (isset($_GET['insert_brands']))
                  include('insert_brands.php');
            ?>
        </div>
    </div>

    <!-- last child -->
    <div class="bg-info p-3 text-center">
        <p> All rights reserved, HERE'S 2024.</p>
    </div>
    </div>

    <!-- bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</body>

</html>