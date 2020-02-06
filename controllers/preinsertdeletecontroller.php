<?php
require_once "../model/config.php";
require_once "../boostrap/plu.php";


$deletemovielist ="TRUNCATE TABLE movies";

if (mysqli_query($mysqli, $deletemovielist)== true) {
    echo "<center> 
    <div class='alert alert text-center'>
     <strong>Success Message!</strong> You have sucessfully Delete all the DATA in the Movie List!
    </div>
    </center>".header("refresh:2 ../views/welcome.php");

} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
mysqli_close($mysqli);

?>


