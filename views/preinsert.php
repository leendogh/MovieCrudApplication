<?php
include_once "../model/config.php";
include_once "../boostrap/plu.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add New Movies | User </title>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Zobrazit navigaci</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="welcome.php">Movie Crud Application</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="addmovies.php"><span class="glyphicon glyphicon-comment"></span>Insert Movies</a></li>
                    <li><a href="updatemovie.php"><span class="glyphicon glyphicon-book"></span> Update Movie</a></li>
                    <li><a href="deletemovie.php"><span class="glyphicon glyphicon-floppy-disk"></span> Delete Movie</a></li>
                    <li><a href="../controllers/preinsertcontroller.php"><span class="glyphicon glyphicon-info-sign"></span> Preinsert Movies</a></li>
                </ul>
                <div class="nav navbar-right">
                    <a href="../controllers/logoutcontrollers.php"><button type="button" class="btn btn-danger navbar-btn dropdown-toggle button-login" data-toggle="dropdown">logout</a></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="container">
            <h4>Do you no you can DELETE the Whole Movie List and Test it again if you wish BUT  </h4>
            <br><br>
            <form action="../controllers/preinsertdeletecontroller.php" method="POST">
                <div class="form-group">
                    <label for="title">Give us short Reason For deleting the whole Movie List ?:</label>

                    <textarea name="" class="form-control" id=""  placeholder="Start typing here ....." cols="30" rows="10" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">DELETE</button>
            </form>
        </div>
    </div>
    <br><br><br><br><br><br><br>
    <div class="container">
        <footer>
            <p class="pull-right"><a href="#">Lindo App</a></p>
            <p>© 2020 · <a href="#">Lindo App</a></p>
        </footer>
    </div>
</body>

</html>