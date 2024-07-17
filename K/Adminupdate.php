<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Doctor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }
        input[type="text"],
        input[type="password"],
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="text"][readonly] {
            background-color: #f3f3f3;
            /* Prevent changing color when readonly */
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            border: none;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form method="post">
        <h2>Update Doctor</h2>
        <?php

        $servername = "localhost";
        $username = "root"; 
        $password = "";
        $dbname = "blood_donation_system"; 
        $tableName = "doctordb"; 
        $conn = new mysqli($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

      
        if (isset($_GET["username"])) {
            $username = $_GET["username"];

          
            $sql = "SELECT * FROM $tableName WHERE UserName='$username'";
            $result = $conn->query($sql);

            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc(); 
                echo "<label for='username'>Username:</label>";
                echo "<input type='text' name='username' value='" . $row["UserName"] . "' readonly><br>";
                echo "<label for='name'>Name:</label>";
                echo "<input type='text' name='name' value='" . $row["Name"] . "' required><br>";
                echo "<label for='birthday'>Birthday:</label>";
                echo "<input type='text' name='birthday' value='" . $row["Birthday"] . "' required><br>";
                echo "<label for='telephone'>Contact Information:</label>";
                echo "<input type='text' name='telephone' value='" . $row["Telephone"] . "' required><br>";
                echo "<label for='password'>Password:</label>";
                echo "<input type='password' name='password' value='" . $row["PassWord"] . "' required><br>";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  
                    $username = $_POST["username"];
                    $name = $_POST["name"];
                    $birthday = $_POST["birthday"];
                    $telephone = $_POST["telephone"];
                    $password = $_POST["password"];

                   
                    $sql_update = "UPDATE $tableName SET Name='$name', Birthday='$birthday', Telephone='$telephone', PassWord='$password' WHERE UserName='$username'";

                    if ($conn->query($sql_update) === TRUE) {
                        echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                }
            } else {
                echo "Doctor not found";
            }
        } else {
            echo "Username not provided";
        }

        $conn->close();
        ?>
        <button type="submit">Update</button>
    </form>
    <a href="Adminhome.php">Back to Doctor Page</a>
</body>
</html>
