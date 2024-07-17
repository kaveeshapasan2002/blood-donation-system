<?php

require 'config.php';

$UID = $_POST["ID"];
$UMail = $_POST["mail"];

$Dsql = "DELETE FROM register_information WHERE id = '$UID' and email ='$UMail'";

if($con -> query($Dsql))
{
    echo "Deleted";
}
else
{
    echo "Not Success !";
}


?>