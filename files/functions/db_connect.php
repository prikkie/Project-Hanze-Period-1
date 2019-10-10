<?php
$dbservername = "localhost";
$dbusername = "u636479626_pro";
$dbpassword = "F08@q>91?";
$database = "u636479626_project";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $database);

// Check connection
   if(! $conn )
   {
     die('Could not connect: ' . mysqli_error($conn));
   }

?>