<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctor Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #820a14;
            color: #fff;
            cursor: pointer;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #820a14;
        }
        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
        .back-button {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #820a14;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Physician Login</h2>
        <?php
      
        $servername = "localhost";
        $username = "root"; 
        $password = ""; 
        $dbname = "blood_donation_system"; 
        $tableName = "login"; 

    
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

   
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $username = $_POST["username"];
            $password = $_POST["password"];

            
            $sql = "SELECT * FROM $tableName WHERE UserName='$username'";

           
            $result = $conn->query($sql);

        
            if ($result->num_rows > 0) {

                $row = $result->fetch_assoc();

                if ($password === $row["PassWord"]) { 
                    header("Location:pHysician_Dash.php");
                    exit();
                } else {
                  
                    echo '<div class="error-message">Invalid username or password</div>';
                }
            } else {
             
                echo '<div class="error-message">Invalid username or password</div>';
            }
        }

        $conn->close();
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
        <a href="Landing.php" class="back-button">Back to Landing Page</a>
    </div>
</body>
</html>
