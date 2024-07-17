<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Event</title>
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
        <h2>Update event</h2>
<?php

    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "sewmin"; 
    $tableName = "volunteered";

  
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
                
                echo "<label for='eventcode'>Event code:</label>";
                echo "<input type='text' name='eventcode' value='" . $row["EventCode"] . "' readonly><br>";
                
                echo "<label for='bloodtype'>Blood type:</label>";
                echo "<input type='text' name='bloodtype' value='" . $row["BloodType"] . "' required><br>";
                
                echo "<label for='eventdate'>Event date:</label>";
                echo "<input type='text' name='eventdate' value='" . $row["EventDate"] . "' required><br>";
                
                echo "<label for='eventlocation'>Event location:</label>";
                echo "<input type='text' name='eventlocation' value='" . $row["EventLocation"] . "' required><br>";
               
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
              
                    $username = $_POST["username"];
                    $eventcode = $_POST["eventcode"];
                    $bloodtype = $_POST["bloodtype"];
                    $eventdate = $_POST["eventdate"];
                    $eventlocation = $_POST["eventlocation"];

              
                    $sql_update = "UPDATE $tableName SET EventCode='$eventcode', BloodType='$bloodtype',EventDate='$eventdate',EventLocation='$eventlocation' WHERE UserName='$username'";

                    if ($conn->query($sql_update) === TRUE) {
                        echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                }

               
            } else {
                echo "Event not found";
            }
        
    } else {
        echo "username not provided";
    }

    $conn->close();
?>
<button type="submit">Update</button>
</form>

<a href="volunteerhome.php">Back to Event Page</a>
</body>
</html>
