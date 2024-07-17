<?php

$conn = new mysqli("localhost", "root", "", "blood_donation_system");

if($conn -> connect_error)
{
   die("Connection faild".$conn->connect_error); 
}

   $password = $_POST["password"];
   $username = $_POST["username"]; 


function validUser($username, $password, $conn) {
   
    $sql = "SELECT * FROM register_information WHERE Name='$username' AND Password='$password'";
    $result = $conn->query($sql);

  
    if ($result->num_rows > 0) {
        
        return true;
    } else {
        
        return false;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from form
    $user = $_POST["username"];
    $pass = $_POST["password"];

    // Authenticate user
    if (validUser($username, $password, $conn)) {
        
        // header("Location: HomePage.php");
        // exit();
        header("Location: ../HomePage/HomePage.php");
        exit();
        
    } else {
        echo "Invalid username or password!";
    }
}

// Close database connection
$conn->close();


?>