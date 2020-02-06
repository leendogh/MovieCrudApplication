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
    <div class="container">
            <h2>Add Movies </h2>
            <form action="../controllers/addmoviecontroller.php" method="POST">
                <div class="form-group">
                    <label for="title">Movie Title:</label>
                    <input type="text" class="form-control"  placeholder="Enter Movie Title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="title">Movie Duration:</label>
                    <input type="text" class="form-control" id="duration" placeholder="Enter Movie Durating" name="duration" required>
                </div>
                <div class="form-group">
                    <label for="title">Movie Rating:</label>
                    <input type="text" class="form-control" id="rating" placeholder="Enter Movie Rating" name="rating" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
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