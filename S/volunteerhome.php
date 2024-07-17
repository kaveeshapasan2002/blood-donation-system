<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
        }
        nav a:hover {
            background-color: #555;
        }
        nav .active {
            background-color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        .button-container {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }
        .button-container button {
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            transition: background-color 0.3s;
        }
        .button-container button:hover {
            background-color: #0056b3;
        }
        .button-container input[type="text"] {
            padding: 8px;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        #addRowForm {
            margin-top: 20px;
        }
        #addRowForm input[type="text"],
        #addRowForm button[type="submit"] {
            padding: 10px;
            margin: 5px 0;
            width: 100%;
            box-sizing: border-box;
        }
        #addRowForm button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        #addRowForm button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
   
    <div style="padding: 20px;">
        <h2>Volunteer Table</h2>
        <table>
            <tr>
                <th>Username</th>
                <th>Event Code</th>
                <th>Blood Type</th>
                <th>Event Date</th>
                <th>Event Location</th>
                
                <th>Action</th>
            </tr>
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

          
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_username"])) {
  
                $delete_username = $_POST["delete_username"];
                $sql = "DELETE FROM $tableName WHERE UserName = '$delete_username'";

       
                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Record deleted successfully');</script>";
                } else {
                    echo "<script>alert('Error deleting record: " . $conn->error . "');</script>";
                }
            }


            $sql = "SELECT * FROM $tableName";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
         
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["UserName"]."</td>";
                    echo "<td>".$row["EventCode"]."</td>";
                    echo "<td>".$row["BloodType"]."</td>";
                    echo "<td>".$row["EventDate"]."</td>";
                    echo "<td>".$row["EventLocation"]."</td>";
                    echo "<td>";
                    echo "<button onclick=\"updateRow('".$row["UserName"]."')\">Update</button>";
                    echo "<form method='post' style='display: inline-block;' onsubmit=\"return confirm('Are you sure you want to delete this doctor?');\">";
                    echo "<input type='hidden' name='delete_username' value='".$row["UserName"]."'>";
                    echo "<button type='submit'>Delete</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
        <button onclick="window.location.href='Addevent.php'">Add Row</button>
        <div id="addRowForm" style="display: none;">
            <form action="add_row.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
                <input type="text" name="eventcode" placeholder="Event Code" required>
                <input type="text" name="bloodtype" placeholder="Blood Type" required>
                <input type="text" name="eventdate" placeholder="Event Date" required>
                <input type="text" name="eventlocation" placeholder="Event Location" required>
                
                <button type="submit">Add</button>
            </form>
        </div>
    </div>

    <script>
        function updateRow(username) {
        
            window.location.href = 'volunteerupdate.php?username=' + username;
        }
    </script>
</body>
</html>
