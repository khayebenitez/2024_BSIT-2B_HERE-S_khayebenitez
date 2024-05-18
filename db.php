<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "heres";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepare SQL statement to prevent SQL injection
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User found, check usertype
        $row = $result->fetch_assoc();
        if ($row["usertype"] == "user") {
            $_SESSION["username"]=$username;
            header("location:dashboard.php");

        } elseif ($row["usertype"] == "admin") {
            $_SESSION["username"]=$username;
            header("location:dashboard.php");
        } else {
            echo "Invalid usertype";
        }
    } else {
        // No user found with the provided credentials
        echo "Username or password incorrect";
    }
}
?>