<?php
$dbservername = "localhost";
$dbusername = "id141058_project";
$dbpassword = "1rick5";
$database = "id141058_project";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $database);

// Check connection
   if(! $conn )
   {
     die('Could not connect: ' . mysqli_error($conn));
   }

?>