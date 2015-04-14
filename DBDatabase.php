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
    VALUES (100000 , 123322123, '3')";
    $conn->query($sql);
    $sql = "INSERT INTO Student (SNum, SSN, Class)
    VALUES (100001 , 123123123, '3')";
    $conn->query($sql);
    $sql = "INSERT INTO Student (SNum, SSN, Class)
    VALUES (100002 , 123456789, '4')";
    $conn->query($sql);
    $sql = "INSERT INTO Student (SNum, SSN, Class)
    VALUES (100003 , 981981981, '1')";
    $conn->query($sql);
    $sql = "INSERT INTO Student (SNum, SSN, Class)
    VALUES (100004 , 823123321, '4')";
    $conn->query($sql);

    $sql = "INSERT INTO Major (SSN, DName, DCode)
    VALUES (823123321 , 'Computer Science', '1')";
    $conn->query($sql);
    $sql = "INSERT INTO Major (SSN, DName, DCode)
    VALUES (981981981 , 'English', '2')";
    $conn->query($sql);

    $sql = "INSERT INTO Faculty (SSN, Rank, FOffice, FPhone, Salary)
    VALUES (100100100 , '1', '123 Van Lane', '3135867855', '100000')";
    $conn->query($sql);
    $sql = "INSERT INTO Faculty (SSN, Rank, FOffice, FPhone, Salary)
    VALUES (100100123 , '2', '123 Kelly Lane', '3135867866', '200000')";
    $conn->query($sql);
    $sql = "INSERT INTO Faculty (SSN, Rank, FOffice, FPhone, Salary)
    VALUES (100123100 , '1', '124 Van Lane', '3135867877', '150000')";
    $conn->query($sql);
    $sql = "INSERT INTO Faculty (SSN, Rank, FOffice, FPhone, Salary)
    VALUES (100100123 , '3', '124 Kelly Lane', '3135867888', '690000')";
    $conn->query($sql);

    $sql = "INSERT INTO Minor (SSN, DName, DCode)
    VALUES (823123321 , 'English', '2')";
    $conn->query($sql);
    $sql = "INSERT INTO Minor (SSN, DName, DCode)
    VALUES (981981981 , 'Computer Science', '1')";
    $conn->query($sql);

    $sql = "INSERT INTO Department (DName, DCode, DPhone, DNumber)
    VALUES ('English', '2', 3125648293, 222)";
    $conn->query($sql);
    $sql = "INSERT INTO Department (DName, DCode, DPhone, DNumber)
    VALUES ('Computer Science', '1', 3125648294, 111)";

    $sql = "INSERT INTO College (CName, COffice, CDean)
    VALUES ('Engineering', '6900 Kelly Road', 'Kelly Markait')";
    $sql = "INSERT INTO College (CName, COffice, CDean)
    VALUES ('Arts', '6900 Van Road', 'Van Nguyen')";
    $conn->query($sql);

    if($conn->query($sql) === TRUE){
      echo "<div class='alert alert-success'>Database Initialized</div>";
    }else {
      echo "<div class='alert alert-danger'>Database Initialization Error</div>";
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
    $conn->query($sql);

    $sql = "TRUNCATE TABLE Major";
    $conn->query($sql);

    $sql = "TRUNCATE TABLE Faculty";
    $conn->query($sql);

    $sql = "TRUNCATE TABLE Minor";
    $conn->query($sql);

    $sql = "TRUNCATE TABLE Department";
    $conn->query($sql);

    if($conn->query($sql) === TRUE){
      echo "<div class='alert alert-success'>Database Cleared</div>";
    }else {
      echo "<div class='alert alert-danger'>Database Cleared Error</div>";
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
            <li class="active">
              <a href="/DB/Van-Kelly-University/DBDatabase.php">Database</a>
            </li>
            <li>
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
          <div class="col-md-12">
            <h1 style="">Database Tools</h1>
            <hr>
          </div>
        </div>
        <div class="row">
        <?php
        if(isset($_GET['initDB'])){
          initializeDB();
        }
        if(isset($_GET['clearDB'])){
          clearDB();
        }
        ?>
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
