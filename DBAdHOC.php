<?php

  function query(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "VanKelly";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
      die("Connection failed: " . $conn.connect_error);
    }

    $result = $conn->query($_GET['query']);
    $count = mysqli_field_count($conn);

    display($result, $count);
  }

  function display($result, $count){
    $fieldinfo = mysqli_fetch_fields($result);
    if($result->num_rows > 0){
      echo "<table class='table'>
          <thead>
            <tr>";
      foreach($fieldinfo as $val){
        echo "<th>". $val->name . "</th>";
      }
      echo "</tr>
          </thead>
          <tbody>";
      while($row = $result->fetch_array()){
        echo "<tr>";
        for($i = 0; $i < $count; $i++){
          echo "<td>" . $row[$i] . "</td>";
        }
        echo "</tr>";
      }
      echo "</table></tbody>";
    }else{
      echo "0 results";
    }
  }

?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="includes/css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="navbar navbar-default navbar-static-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></a>
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <a class="navbar-brand" href="/DB/Van-Kelly-University/DBHome.php">Van-Kelly University</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="/DB/Van-Kelly-University/DBHome.php">Home</a>
            </li>
            <li>
              <a href="/DB/Van-Kelly-University/DBDatabase.php">Database</a>
            </li>
            <li class="active">
              <a href="/DB/Van-Kelly-University/DBAdHOC.php">Ad-Hoc</a>
            </li>
            <li>
              <a href="/DB/Van-Kelly-University/DBQueries.php">Queries</a>
            </li>
            <li>
              <a href="/DB/Van-Kelly-University/DBRelations.php">Relations</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-md-12" draggable="true" style="">
            <h1>Ad-Hoc Queries</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?php
            if(isset($_GET['query'])){
              query();
            }
            ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <form action ="DBAdHoc.php" method="get" role="form">
              <div class="form-group">
                <input class="form-control" id="inputQuery" name="query"placeholder="Enter query"
                type="text">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
              <button type="reset" class="btn btn-default">Clear</button>
            </form>
          </div>
        </div>
        <div class="row"></div>
      </div>
    </div>
  </body>

</html>
