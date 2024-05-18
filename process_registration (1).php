<?php
include_once "db.php";

$username = $_POST['username'];
$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];
$conf_passwd = $_POST['password'];
$contact_no = $_POST['contact_no'];
$user_type = 'customer'; // Default user type is customer

function chk_pass($p1, $p2) {
    return ($p1 == $p2) ? 1:0;
}
 
if (!chk_pass($password, $conf_passwd)) {
    header("location: index.php?error=password_mismatch");
    die;
}

// Check if the username is already existing
$sql_chk_user = "SELECT user_id FROM users WHERE username = '$username'";
$sql_result = mysqli_query($conn, $sql_chk_user);
$count_result = mysqli_num_rows($sql_result);

if ($count_result > 0) {
    // User already exists, redirect back to registration page with error message
    header("location: index.php?error=user_already_exist");
    die;
}

// Insert the new user into the database
$sql_new_user = "INSERT INTO users (username, email, fullname, address, gender, contact_no, password, user_type) 
                 VALUES ('$username','$email','$fullname','$address', '$gender', '$contact_no', '$password', '$user_type')";
$execute_query = mysqli_query($conn, $sql_new_user);

if (!$execute_query) {
    // Insertion failed, redirect back to registration page with error message
    header("location: index.php?error=Insert_Failed");
    die;
}

// User successfully registered, redirect to landing page
header("location: index.php?msg=successfully_registered");
?>