<?php

  function clearDB(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "VanKelly";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
      die("Connection failed: " . $conn.connect_error);
    }

    $sql = "TRUNCATE TABLE Student";
    if($conn->query($sql) === TRUE){
      echo "<div class='alert alert-success'>Database Cleared</div>";
    }else {
      echo "<div class='alert alert-danger'>Database Cleared Error</div>";
    }
  }

  function student(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "VanKelly";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
      die("Connection failed: " . $conn.connect_error);
    }

    $sql = "SELECT SNum, SSN, Class FROM Student";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      echo "<table class='table'>
          <thead>
            <tr>
              <th>SNum</th>
              <th>SSN</th>
              <th>Class</th>
            </tr>
          </thead>
          <tbody>";
      while($row = $result->fetch_assoc()){
        echo "<tr>
                <td>" . $row["SNum"] . "</td>
                <td>" . $row["SSN"] . "</td>
                <td>" . $row["Class"] . "</td>
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
            <li>
              <a href="/DB/Van-Kelly-University/DBQueries.php">Queries</a>
            </li>
            <li class="active">
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
            <h1 style="">Relations</h1>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?php
            if(isset($_GET['student'])){
              student();
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href='DBRelations.php?student=true'class="btn btn-primary" style="">Student</a>
        </div>
        <div class="col-md-4">
          <a class="btn btn-primary">Inset Relation Here</a>
        </div>
        <div class="col-md-4">
          <a class="btn btn-primary">Inset Relation Here</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a class="btn btn-primary">Insert Relation Here</a>
        </div>
        <div class="col-md-4">
          <a class="btn btn-primary">Insert Relation Here</a>
        </div>
        <div class="col-md-4">
          <a class="btn btn-primary">Insert Relation Here</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a class="btn btn-primary">Inser Relatin Here</a>
        </div>
        <div class="col-md-4">
          <a class="btn btn-primary">Inser Relatin Here</a>
        </div>
        <div class="col-md-4">
          <a class="btn btn-primary">Inser Relatin Here</a>
        </div>
      </div>
    </div>
  </body>

</html>
