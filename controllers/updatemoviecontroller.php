<?php
require_once "../model/config.php";
require_once "../boostrap/plu.php";

   // Cleaining/Sanitizing  the data 
   $sameid = mysqli_real_escape_string($mysqli,$_POST['id']);
   $newtitle = mysqli_real_escape_string($mysqli,$_POST['title']);
   $newduration = mysqli_real_escape_string($mysqli,$_POST['duration']); 
   $newrating = mysqli_real_escape_string($mysqli,$_POST['rating']); 

$movieupdate = "UPDATE movies set title='$newtitle', 
duration='$newduration',rating='$newrating' WHERE id='$sameid'";

$query = mysqli_query($mysqli, $movieupdate);


if ($query != false) {

   echo "<center> 
   <div class='alert alert text-center'>
    <strong>Success Message!</strong> You have sucessfully updated your Movie List!
   </div>
   </center>".header("refresh:2 ../views/welcome.php");

} else{

    echo "<center> 
    <div class='alert alert text-center'>
     <strong>Error Message!</strong> You are unable to update movie list!
    </div>
    </center>".header("refresh:2 ../views/welcome.php");
   
}
mysqli_close($mysqli);

?>




