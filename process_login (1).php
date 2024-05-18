<?php
include_once "db.php";
session_start(); 

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the user is registered
    $sql_check_user_exists = "SELECT * FROM users WHERE username = ?"; // Use a prepared statement
    $stmt = $conn->prepare($sql_check_user_exists);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result_check_user_exists = $stmt->get_result();

    if($result_check_user_exists->num_rows == 0){
        // User is not registered, redirect to index page with error
        header("location: index.php?error=user_not_registered");
        exit();
    }

    // User is registered, proceed with login
    $sql_check_user_info = "SELECT * FROM users WHERE username = ? AND password = ?"; // Use a prepared statement
    $stmt = $conn->prepare($sql_check_user_info);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result_check_user_info = $stmt->get_result(); 
    $count_result = $result_check_user_info->num_rows; 

    if($count_result == 1){
        // User found, set session variables and redirect
        $row = $result_check_user_info->fetch_assoc();

        // Set session variables
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        // Add other session variables as needed

        // Redirect to dashboard or any other page
        header("location: dashboard.php");
        exit();
        
    }
    else{
        // Incorrect password
        echo "Password is incorrect, please re-enter your password!";
        exit();
    }
}
else{
    // Username or password not provided
    echo "Please provide both username and password.";
    exit();
}
?>