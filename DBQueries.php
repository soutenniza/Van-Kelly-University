<?php

  function studentsenior(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "VanKelly";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
      die("Connection failed: " . $conn.connect_error);
    }

    $sql = "SELECT SSN FROM Student WHERE Class='4' ";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      echo "<h3>Return all students who are seniors</h3>";
      echo "<table class='table'>
          <thead>
            <tr>
              <th>SSN</th>
            </tr>
          </thead>
          <tbody>";
      while($row = $result->fetch_assoc()){
        echo "<tr>
                <td>" . $row["SSN"] . "</td>
              </tr>";
      }
      echo "</table></tbody>";
    }else{
      echo "0 results";
    }
  }

  function studentmajor(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "VanKelly";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
      die("Connection failed: " . $conn.connect_error);
    }

    $sql = "SELECT * FROM Major M, Student S WHERE M.SSN = S.SSN AND DName = 'Computer Science'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      echo "<h3>Return all computer science majors</h3>";
      echo "<table class='table'>
          <thead>
            <tr>
              <th>SSN</th>
            </tr>
          </thead>
          <tbody>";
      while($row = $result->fetch_assoc()){
        echo "<tr>
                <td>" . $row["SSN"] . "</td>
              </tr>";
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
            <li>
              <a href="/DB/Van-Kelly-University/DBAdHOC.php">Ad-Hoc</a>
            </li>
            <li class="active">
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
          <div class="col-md-12">
            <h1 style="">Queries</h1>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?php
            if(isset($_GET['studentsenior'])){
              studentsenior();
            }
            if(isset($_GET['studentmajor'])){
              studentmajor();
            }
            if(isset($_GET['all'])){
              studentsenior();
              studentmajor();
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a href='DBQueries.php?studentsenior=true' class="btn btn-primary" style="">Return all students who are seniors</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <a href = 'DBQueries.php?studentmajor=true' class="btn btn-primary">Return all computer science majors</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <a href = 'DBQueries.php?all=true' class="btn btn-primary">All of the above</a>
        </div>
      </div>
    </div>
  </body>

</html>
