<?php

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

    header("location: ../views/welcome.php");

}else{

echo "You are not allow to visit this page";


}
 


?>