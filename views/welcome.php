<?php
include_once "../model/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <title>Movie Crud App | Welcome Home </title>
</head>

<body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"></span>
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

    <?php
    $limit = 5;
    if (isset($_GET["page"])) {
      $page  = $_GET["page"];
    } else {
      $page = 1;
    };
    $start_from = ($page - 1) * $limit;

    $result = mysqli_query($mysqli, "SELECT id,title,duration,rating FROM movies ORDER BY id ASC LIMIT $start_from, $limit");
    ?>
<br><br><br>
    <h2 class="sub-header">Movie List From the Database</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <tr>
          <th>Movie ID</th>
          <th>Movie Tille </th>
          <th>Moview Duration</th>
          <th>Moview Rating </th>
        </tr>

        <?php

        while ($row = mysqli_fetch_array($result)) {


          ?>

          <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["title"]; ?></td>
            <td><?php echo $row["duration"]; ?></td>
            <td><?php echo $row["rating"]; ?></td>
          </tr>
        <?php
        };
        ?>
      </table>

      <?php

      $result_db = mysqli_query($mysqli, "SELECT COUNT(id) FROM movies");
      $row_db = mysqli_fetch_row($result_db);
      $total_records = $row_db[0];
      $total_pages = ceil($total_records / $limit);
      /* echo  $total_pages; */
      $pagLink = "<ul class='pagination'>";
      for ($i = 1; $i <= $total_pages; $i++) {
        $pagLink .= "<li class='page-item'><a class='page-link' href='paginationpage.php?page=" . $i . "'>" . $i . "</a></li>";
      }
      echo $pagLink . "</ul>";
      ?>
      <hr>
    </div>

    <br><br><br><br><br><br><br>


    <div class="container">

      <footer>
        <p class="pull-right"><a href="#">Lindo App</a></p>
        <p>© 2014 · <a href="#">Lindo App</a></p>
      </footer>

    </div>
</body>

</html>