<!-- connect file -->
<?php 
include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<!-- font awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- css file -->
<link rel="stylesheet" href="indexhomepageclient.css">
</head>

<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!--first step-->
        <nav class="navbar navbar-expand-lg navbar-light bg-custom-pink">
            <div class="container-fluid">
                <img src="logohere.jpg"" class=" logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="process_registration.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-shopping-cart"
                                    aria-hidden="true"></i><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total Price: 200/-</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- second step -->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Log Out</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- third step -->
    <div class="bg-light">
        <h3 class="text-center">HIS & HERS</h3>
        <p class="text-center">WELCOME GUEST, BAG WITH US!</p>
    </div>

    <div class="bg-light">
        <h2 class="text-center">SHOPPING LIST</h2>
    </div>
    <!-- fourth step -->
    <div class="row">
        <div class="col-md-10">
            <!-- product -->
            <div class="bg-light">
                <h5 class="text-center">UNISEX CATEGORY</h5>
            </div>
            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="uni1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cross Bottle Backpack</h5>
                            <p class="card-text">Men's Category</p>
                            <a href="#" class="btn btn-info btn-light-pink">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="uni2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rise Boy's Bags (JORDAN)</h5>
                            <p class="card-text">Men's Category</p>
                            <a href="#" class="btn btn-info btn-light-pink">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="uni3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Crossbody Bag</h5>
                            <p class="card-text">Men's Category</p>
                            <a href="#" class="btn btn-info btn-light-pink">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>

                        </div>
                    </div>
                </div>

                <div class="bg-light">
                    <h5 class="text-center">TREND'S CATEGORY</h5>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="trend1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Curved Hobo Bag</h5>
                            <p class="card-text">Trend's Category</p>
                            <a href="#" class="btn btn-info btn-light-pink">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="trend2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tote-Holdall Hybrids</h5>
                            <p class="card-text">Trend's Category</p>
                            <a href="#" class="btn btn-info btn-light-pink">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="trend3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mini Leather Bag</h5>
                            <p class="card-text">Trend's Category</p>
                            <a href="#" class="btn btn-info btn-light-pink">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>

                <div class="bg-light">
                    <h5 class="text-center">WOMEN'S CATEGORY</h5>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="w1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Canvas Totebag</h5>
                            <p class="card-text">Women's Category</p>
                            <a href="#" class="btn btn-info btn-light-pink">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="w2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Scarf Print Totebag</h5>
                            <p class="card-text">Women's Category</p>
                            <a href="#" class="btn btn-info btn-light-pink">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="w3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Shoulder Totebag</h5>
                            <p class="card-text">Women's Category</p>
                            <a href="#" class="btn btn-info btn-light-pink">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>

                <div class="bg-light">
                    <h5 class="text-center">MEN'S CATEGORY</h5>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="m1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Crossbody Bag</h5>
                            <p class="card-text">Men's Category</p>
                            <a href="#" class="btn btn-info btn-light-pink">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="m2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">West Pack</h5>
                            <p class="card-text">Men's Category</p>
                            <a href="#" class="btn btn-info btn-light-pink">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="m3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Backpack</h5>
                            <p class="card-text">Men's Category</p>
                            <a href="#" class="btn btn-info btn-light-pink">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>

                        </div>
                    </div>
                </div>

                <div class="bg-light">
                    <h5 class="text-center">KID'S CATEGORY</h5>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="k1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Asge Backpacks</h5>
                            <p class="card-text">Kid's Category</p>
                            <a href="#" class="btn btn-info btn-light-pink">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="k2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Joyhill Backpack</h5>
                            <p class="card-text">Kid's Category</p>
                            <a href="#" class="btn btn-info btn-light-pink">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="k3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Spiderman Backpack</h5>
                            <p class="card-text">Kid's Category</p>
                            <a href="#" class="btn btn-info btn-light-pink">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-2 bg-secondary p-0">
            <!-- categories to be displayed -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-custom-pink">
                    <a href="" class="nav-link text-light">
                        <h4>Categories</h4>
                    </a>
                    </a>
                </li>

                <?php
                $select_categories="Select * from `categories`";
                $result_categories=mysqli_query($con,$select_categories);
                //$row_data=mysqli_fetch_assoc($result_categories);
                //echo $row_data['cat_title'];
                //echo $row_data['cat_title'];
                while($row_data=mysqli_fetch_assoc($result_categories)){
                    $category_title=$row_data['category_title'];
                    $category_id=$row_data['category_id'];
                    echo "<li class='nav-item'>
                    <a href='dashboard.php?category=$category_id' class='nav-link text-light'>$category_title</a>
                    </a>
                </li>";
                }

                ?>

            </ul>
            <!-- delivery brands to be displayed -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-custom-pink">
                    <a href="" class="nav-link text-light">
                        <h4>Delivery Brands</h4>
                    </a>
                    </a>
                </li>

                <?php
                $select_brands="Select * from `brands`";
                $result_brands=mysqli_query($con,$select_brands);
                //$row_data=mysqli_fetch_assoc($result_brands);
                //echo $row_data['brand_title'];
                //echo $row_data['brand_title'];
                while($row_data=mysqli_fetch_assoc($result_brands)){
                    $brand_title=$row_data['brand_title'];
                    $brand_id=$row_data['brand_id'];
                    echo "<li class='nav-item'>
                    <a href='dashboard.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
                    </a>
                </li>";
                }

                ?>


        </div>
    </div>






    </div>
    </div>

    </div>
    </div>

    <!-- last child -->
    <div class="bg-light-pink p-3 text-center">
        <p> All rights reserved, HERE'S 2024.</p>
    </div>
    </div>


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <?php echo $_SESSION["username"] ?>
</body>
</body>

</html>