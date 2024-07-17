<?php

require 'config.php';

$UID = $_POST["ID"];
$Uname = $_POST["name"]; 
$Umail = $_POST["mail"];
$Upasswrd = $_POST["passwrd"];
$Uage = $_POST["age"]; 
$Udob = $_POST["dob"]; 
$Uphone = $_POST["phone"]; 

$sql = "INSERT INTO register_information VALUES ('$UID', '$Uname', '$Umail', '$Upasswrd', '$Uage', '$Udob', '$Uphone')";

   if($con -> query($sql))
   {
    echo "Insert Sucessful";
   }
   else {
    echo "Error".$con->error;
   }




?>