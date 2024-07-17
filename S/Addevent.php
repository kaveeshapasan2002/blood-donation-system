<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Event</title>
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
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            border: none;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form method="post">
        <h2>Add Event</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="eventcode">Event Code:</label>
        <input type="text" name="eventcode" required>
        
        <label for="bloodtype">Blood Type:</label>
        <input type="text" name="bloodtype" required>

        <label for="eventdate">Event date:</label>
        <input type="text" name="eventdate" required>

        <label for="eventlocation">Event location:</label>
        <input type="text" name="eventlocation" required>
       
        <button type="submit">Add event</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $servername = "localhost";
        $username = "root"; 
        $password = ""; 
        $dbname = "sewmin"; 
        $tableName = "volunteered"; 

        
        $conn = new mysqli($servername, $username, $password, $dbname);

        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

     
        $username = $_POST["username"];
        $eventcode = $_POST["eventcode"];
        $bloodtype = $_POST["bloodtype"];
        $eventdate = $_POST["eventdate"];
        $eventlocation = $_POST["eventlocation"];
    
        
        $sql = "INSERT INTO $tableName (UserName, EventCode, BloodType, EventDate, EventLocation) 
                VALUES ('$username', '$eventcode', '$bloodtype', '$eventdate','$eventlocation')";

        if ($conn->query($sql) === TRUE) {
            echo "<p style='text-align: center; color: green;'>New event record created successfully</p>";
        } else {
            echo "<p style='text-align: center; color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }

       
        $conn->close();
    }
    ?>
</body>
</html>
