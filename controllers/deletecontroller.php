<?php
require_once "../model/config.php";
require_once "../boostrap/plu.php";

$oldid = mysqli_real_escape_string($mysqli,$_POST['id']);
$sqldeletemoviedata = "DELETE FROM movies WHERE id=$oldid";

if (mysqli_query($mysqli, $sqldeletemoviedata)) {
    echo "<center> 
    <div class='alert alert text-center'>
     <strong>Success Message!</strong> You have sucessfully Delete a Moview From the List!
    </div>
    </center>".header("refresh:2 ../views/welcome.php");

} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
mysqli_close($mysqli);

?>


