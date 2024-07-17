
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <title>User Registration</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 6px 12px;
            border: none;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border-radius: 3px;
        }

        .btn-update {
            background-color: #008CBA;
        }

        .btn-delete {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <?php
    require 'config.php';

    $sql = "SELECT id, Name, Email, Password, Age, DofB, Phone_Number FROM register_information ORDER BY id DESC LIMIT 1";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Age</th><th>Date of Birth</th><th>Phone Number</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["Name"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["Password"] . "</td>";
            echo "<td>" . $row["Age"] . "</td>";
            echo "<td>" . $row["DofB"] . "</td>";
            echo "<td>" . $row["Phone_Number"] . "</td>";
            echo "</tr>";
            echo "</br>";

            echo "<td><a href='update.php?id=" . $row["id"] . "' class='btn btn-update'>Update</a> <a href='delete.php?id=" . $row["id"] . "' class='btn btn-delete'>Delete</a></td>";
            
        }

        echo "</table>";
    } else {
        echo "No results found";
    }

    $con->close();
    ?>
</body>
</html>
