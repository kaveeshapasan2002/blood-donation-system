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
            background-color: #820a14;
            color: #fff;
            cursor: pointer;
            border: none;
        }
        button[type="submit"]:hover {
            background-color: #820a14;
        }
    </style>
</head>
<body>
    <form method="post">
        <h2>Add Donor details</h2>
        <label for="Name">Name:</label>
        <input type="text" name="Name" required>
        <label for="Donor_ID">Donor ID:</label>
        <input type="text" name="Donor_ID" required>
        <label for="birthday">Birthday:</label>
        <input type="text" name="birthday" required>
        <label for="Blood_Group">Blood Group:</label>
        <input type="text" name="Blood_Group" required>
        <label for="Health_History">Health History:</label>
        <textarea name="Health_History" required></textarea>
        <label for="Eligibilityness"> Eligibilityness:</label>
        <input type="text" name="Eligibilityness" required>
        <button type="submit">Add Donor details</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $servername = "localhost";
        $username = "root"; 
        $password = ""; 
        $dbname = "blood_donation_system"; 
        $tableName = "info_donor"; 

        
        $conn = new mysqli($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $Name = $_POST["Name"];
        $Donor_ID = $_POST["Donor_ID"];
        $birthday = $_POST["birthday"];
        $Blood_Group = $_POST["Blood_Group"];
        $Health_History = $_POST["Health_History"];
        $Eligibilityness=$_POST["Eligibilityness"];

        
        $sql = "INSERT INTO $tableName (Name, Donor_ID, Birthday, Blood_Group, Health_History,Eligibilityness) 
                VALUES ('$Name', '$Donor_ID', '$birthday', '$Blood_Group', '$Health_History','$Eligibilityness')";

        if ($conn->query($sql) === TRUE) {
            echo "<p style='text-align: center; color: green;'>New New donor details created successfully</p>";
        } else {
            echo "<p style='text-align: center; color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }

      
        $conn->close();
    }
    ?>
    <a href="ViewDonorDetails.php" style="display: block; text-align: center; color: #820a14;">View added details</a>

</body>
</html>
