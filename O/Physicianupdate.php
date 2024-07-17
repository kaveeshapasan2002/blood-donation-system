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
        
        }
        button[type="submit"] {
            background-color: #820a14;
            color: #fff;
            cursor: pointer;
            border: none;
        }
        button[type="submit"]:hover {
            background-color: #820a14;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #820a14;
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
        $tableName = "info_donor"; 


        $conn = new mysqli($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

    
        if (isset($_GET["Donor_ID"])) {
            $Donor_ID = $_GET["Donor_ID"];

    
            $sql = "SELECT * FROM $tableName WHERE Donor_ID='$Donor_ID'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc(); 
            
                echo "<label for='Name'>Name:</label>";
                echo "<input type='text' name='Name' value='" . $row["Name"] . "' required><br>";
                echo "<label for='Donor_ID'>Donor_ID:</label>";
                echo "<input type='text' name='Donor_ID' value='" . $row["Donor_ID"] . "' readonly><br>";
                echo "<label for='birthday'>Birthday:</label>";
                echo "<input type='text' name='birthday' value='" . $row["Birthday"] . "' required><br>";
                echo "<label for='Blood_Group'>Blood_Group:</label>";
                echo "<input type='text' name='Blood_Group' value='" . $row["Blood_Group"] . "' required><br>";
                echo "<label for='Health_History'>Health_History:</label>";
                echo "<input type='text' name='Health_History' value='" . $row["Health_History"] . "' required><br>";
                echo "<label for='Eligibilityness'>Eligibilityness:</label>";
                echo "<input type='text' name='Eligibilityness' value='" . $row["Eligibilityness"] . "' required><br>";


                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  
                    $Name = $_POST["Name"];
                    $Donor_ID = $_POST["Donor_ID"];
                    $birthday = $_POST["birthday"];
                    $Blood_Group = $_POST["Blood_Group"];
                    $Health_History = $_POST["Health_History"];
                    $Eligibilityness = $_POST["Eligibilityness"];

                 
                    $sql_update = "UPDATE $tableName SET Name='$Name', Birthday='$birthday', Blood_Group='$Blood_Group', Health_History='$Health_History', Eligibilityness='$Eligibilityness'WHERE Donor_ID='$Donor_ID'";

                    if ($conn->query($sql_update) === TRUE) {
                        echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                }
            } else {
                echo "Donor not found";
            }
        } else {
            echo "Donor ID not provided";
        }

        $conn->close();
        ?>
        <button type="submit">Update</button>
    </form>
    <a href="ViewDonorDetails.php">Back to Physician page </a>
</body>
</html>
