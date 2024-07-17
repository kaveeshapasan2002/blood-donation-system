<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>
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
        <h2>Add Doctor</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <label for="birthday">Birthday:</label>
        <input type="text" name="birthday" required>
        <label for="telephone">Contact Information:</label>
        <input type="text" name="telephone" required>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Add Doctor</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $servername = "localhost";
        $username = "root"; 
        $password = ""; 
        $dbname = "blood_donation_system"; 
        $tableName = "doctordb"; 

        
        $conn = new mysqli($servername, $username, $password, $dbname);

        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $username = $_POST["username"];
        $name = $_POST["name"];
        $birthday = $_POST["birthday"];
        $telephone = $_POST["telephone"];
        $password = $_POST["password"];

       
        $sql = "INSERT INTO $tableName (UserName, Name, Birthday, Telephone, PassWord) 
                VALUES ('$username', '$name', '$birthday', '$telephone', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<p style='text-align: center; color: green;'>New doctor record created successfully</p>";
        } else {
            echo "<p style='text-align: center; color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }

       
        $conn->close();
    }
    ?>
</body>
</html>
