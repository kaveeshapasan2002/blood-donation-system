<?php
   require 'config.php';

   $rID = $_POST["ID"];
   $rmail = $_POST["mail"];
   $rpsswrd = $_POST["psswrd"];
   $rname = $_POST["name"]; 

   if(empty($rID) || ($rmail) || ($rpsswrd) || ($rname))
   {
    echo "All required !";
   }
   else {

    $sql="UPDATE register_information set email = '$rmai', password = '$rpsswrd', name = '$rname' WHERE id = '$rID'";

    if($con -> query($sql))
    {
        echo "Updated";
    }
    else {
        echo "Not Updated";
    }


   }











?>