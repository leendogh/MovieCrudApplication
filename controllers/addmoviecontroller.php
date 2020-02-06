<?php
require_once "../model/config.php";
require_once "../boostrap/plu.php";


if($_SERVER["REQUEST_METHOD"] == "POST") {

   // Cleaining/Sanitizing  the data 

   $title = mysqli_real_escape_string($mysqli,$_POST['title']);
   $duration = mysqli_real_escape_string($mysqli,$_POST['duration']); 
   $rating = mysqli_real_escape_string($mysqli,$_POST['rating']); 
}

$sql = "INSERT INTO movies (title, duration, rating)

VALUES (' $title', '$duration', '$rating')";

if (mysqli_query($mysqli, $sql)) {

   echo "<center> 
   <div class='alert alert text-center'>
    <strong>Success Message!</strong> You have sucessfully Added a new Movie List!
   </div>
   </center>".header("refresh:2 ../views/welcome.php");

} else {
   
   echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}

mysqli_close($mysqli);

?>




