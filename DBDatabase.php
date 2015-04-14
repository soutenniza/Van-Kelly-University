<?php

  function initializeDB(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "VanKelly";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
      die("Connection failed: " . $conn.connect_error);
    }

    $sql = "INSERT INTO Student (SNum, SSN, Class)
    VALUES (717171 , 123322123, 'Junior')";
    if($conn->query($sql) === TRUE){
      echo "<div class='alert alert-success'>
          <strong>Database has been initialized</strong></div>";
    }else {
      echo "<div class='alert alert-danger'>
        <strong>Error initializing the database</strong></div>";
    }
  }

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

  if(isset($_GET['initDB'])){
    initializeDB();
  }
  if(isset($_GET['clearDB'])){
    clearDB();
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
          <a class="navbar-brand" href="/project/DBHome.php">Van-Kelly University</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="/project/DBHome.php">Home</a>
            </li>
            <li class="active">
              <a href="/project/DBDatabase.php">Database</a>
            </li>
            <li>
              <a href="/project/DBAdHOC.php">Ad-Hoc</a>
            </li>
            <li>
              <a href="/project/DBQueries.php">Queries</a>
            </li>
            <li>
              <a href="/project/DBRelations.php">Relations</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 style="">Database Tools</h1>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <a href='DBDatabase.php?clearDB=true' class="btn btn-primary">Clear</a>
          </div>
          <div class="col-md-4">
            <a href='DBDatabase.php?initDB=true' class="btn btn-primary">Initialize</a>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
