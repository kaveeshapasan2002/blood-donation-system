<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physician Page</title>
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
        <h2>Donor eligibility list</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Donor ID</th>
                <th>Birthday</th>
                <th>Blood Group</th>
                <th>Health History</th>
                <th>Eligibilityness</th>
                <th>Action</th>
            </tr>
            <?php
    
            $servername = "localhost";
            $username = "root"; 
            $password = ""; 
            $dbname = "blood_donation_system"; 
            $tableName = "info_donor"; 

           
            $conn = new mysqli($servername, $username, $password, $dbname);

      
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

  
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_donor_id"])) {
            
                $delete_Donor_ID = $_POST["delete_donor_id"];
                $sql = "DELETE FROM $tableName WHERE Donor_ID = '$delete_Donor_ID'";

                
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
                    echo "<td>".$row["Name"]."</td>";
                    echo "<td>".$row["Donor_ID"]."</td>";
                    echo "<td>".$row["Birthday"]."</td>";
                    echo "<td>".$row["Blood_Group"]."</td>";
                    echo "<td>".$row["Health_History"]."</td>";
                    echo "<td>".$row["Eligibilityness"]."</td>";
                    echo "<td>";
                    echo "<button onclick=\"updateRow('".$row["Donor_ID"]."')\">Update</button>";
                    echo "<form method='post' style='display: inline-block;' onsubmit=\"return confirm('Are you sure you want to delete this donor?');\">";
                    echo "<input type='hidden' name='delete_donor_id' value='".$row["Donor_ID"]."'>";
                    echo "<button type='submit'>Delete</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No records found</td></tr>";
            }
            $conn->close();
            ?>
    <script>
        function updateRow(Donor_ID) {
            
            window.location.href = 'Physicianupdate.php?Donor_ID=' + Donor_ID;
        }
    </script>
</body>
</html>

