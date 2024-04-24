<?php
    session_start(); 
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $database = "project";
    $conn = new mysqli($servername, $username, $password, $database, "3308");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

if (isset($_POST['userId'])) {
    $userId = $_POST['userId'];
    
    $sql = "UPDATE employee SET password = 'password' WHERE employeeID = '$userId'";
    if ($conn->query($sql) === TRUE) {
        echo "Password reset successfully.";
    } else {
        echo "Error resetting password: " . $conn->error;
    }
} else {
    echo "User ID not provided.";
}

$conn->close();
?>