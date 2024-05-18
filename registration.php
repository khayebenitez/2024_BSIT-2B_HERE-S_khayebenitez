<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HERE'S WEBSITE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css">
    <!-- Including Boxicons CSS library -->
    <!-- Include custom CSS file -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Registration form -->
    <div class="form-box register">
        <h2>Registration</h2> <!-- Title -->
        <?php
                if(isset($_GET['error'])){
                    echo "Error:" . $_GET['error'];
                }
                ?>
        <form action="process_registration.php" method="POST">
            <div class="input-box">
                <!-- Username input -->
                <span class="icon"><i class='bx bx-user'></i></span>
                <input type="text" name="username">
                <label>Username</label>
            </div>

            <!-- Other input fields for registration -->
            <div class="input-box">
                <span class="icon"><i class='bx bx-user'></i></span>
                <input type="text" name="fullname">
                <label>Fullname</label>
            </div>

            <div class="input-box">
                <span class="icon"><i class='bx bx-user'></i></span>
                <select name="gender" required>
                    <!-- Gender selection -->
                    <option value="" disabled selected>Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Others</option>
                </select>
            </div>


            <div class="input-box">
                <span class="icon"><i class='bx bxs-contact'></i></span>
                <input type="text" name="contact_no">
                <label>Contact Number</label>
            </div>

            <div class="input-box">
                <span class="icon"><i class='bx bx-home'></i></span>
                <input type="text" name="address">
                <label>Address</label>
            </div>

            <div class="input-box">
                <span class="icon"><i class='bx bx-envelope'></i></span>
                <input type="email" name="email">
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><i class='bx bx-lock-alt'></i></span>
                <input type="password" name="password">
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> I agree to the terms and conditions.</label>
            </div>

            <button type="submit" class="btn" name="register">Register</button> <!-- Register button -->

            <div class="login-register">
                <!-- Link to login -->
                <p>Already have an account? <a href="#" class="login-link">Login</a></p>
            </div>
        </form>
    </div>
</div>

<script src="script.js"></script> <!-- Include JavaScript file -->
</body>