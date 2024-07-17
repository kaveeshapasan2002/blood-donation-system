<?php

$con = new mysqli("localhost", "root", "", "blood_donation_system");

if($con -> connect_error)
{
   die("Connection faild".$con->connect_error); 
}

?>