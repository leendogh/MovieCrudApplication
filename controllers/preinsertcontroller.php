<?php
require_once "../model/config.php";
require_once "../boostrap/plu.php";

$sqlpreinsertedata ="INSERT INTO movies (title, duration, rating) VALUES
            ('The Ex Men Part 1', '10 Hours', '* * * * * '),
            ('The Ex Men Part 2', '10 Hours', '* * * * * '),
            ('The Ex Men Part 3', '10 Hours', '* * * * * '),
            ('The Ex Men Part 4', '10 Hours', '* * * * * '),
            ('The Ex Men Part 5', '10 Hours', '* * * * * '),
            ('The Ex Men Part 6', '10 Hours', '* * * * * '),
            ('The Ex Men Part 7', '10 Hours', '* * * * * '),
            ('The Ex Men Part 8', '10 Hours', '* * * * * '),
            ('The Ex Men Part 9', '10 Hours', '* * * * * '),
            ('The Ex Men Part 10', '10 Hours', '* * * * * ')";  

$duplicate=mysqli_query($mysqli,"SELECT * FROM movies ");

            if (mysqli_num_rows($duplicate) == 10) {

                echo "<center> 
                <div class='alert alert text-center'>
                 <strong>Error Message!</strong>  You are not allow to Preinsert Data more than ONCE Please wait !
                </div>
                </center>".header("refresh:4 ../views/preinsert.php");

            }
            elseif(mysqli_query($mysqli,$sqlpreinsertedata) == true){

    
                echo "<center> 
                <div class='alert alert text-center'>
                 <strong>Success Message!</strong> You have succesfully loaded the once off 10 Preinserted data as instructed!
                </div>
                </center>".header("refresh:2 ../views/welcome.php");
}
mysqli_close($mysqli);

?>