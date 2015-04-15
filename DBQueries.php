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
    $count = mysqli_field_count($conn);
    echo "<h3>Return students who are seniors</h3>";
    display($result,$count);
    $conn->close();
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
    $count = mysqli_field_count($conn);
    echo "<h3>Return students who's major is Computer Science</h3>";
    display($result,$count);
    $conn->close();
  }

  function studentCTranscript(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "VanKelly";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
      die("Connection failed: " . $conn.connect_error);
    }

    $sql = "SELECT S.SSN FROM Transcript T, Student S WHERE T.SSN = S.SSN AND T.SecNum = '100'";
    $result = $conn->query($sql);
    $count = mysqli_field_count($conn);
    echo "<h3>Return students are in GEN 100</h3>";
    display($result,$count);
    $conn->close();
  }
  function studentCount(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "VanKelly";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
      die("Connection failed: " . $conn.connect_error);
    }

    $sql = "SELECT SecNum, COUNT(*) as total FROM Registered GROUP BY SecNum";
    $result = $conn->query($sql);
    $count = mysqli_field_count($conn);
    echo "<h3>Return count of students in each class</h3>";
    display($result,$count);
    $conn->close();
  }

  function oneCredit(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "VanKelly";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
      die("Connection failed: " . $conn.connect_error);
    }

    $sql = "SELECT CNum, CName FROM Course WHERE Credit = '1'";
    $result = $conn->query($sql);
    $count = mysqli_field_count($conn);
    echo "<h3>Return all one credit courses</h3>";
    display($result,$count);
    $conn->close();
  }

  function femaleAverage(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "VanKelly";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
      die("Connection failed: " . $conn.connect_error);
    }

    $sql = "SELECT AVG(F.Salary) as avg FROM Faculty F, Person P WHERE F.SSN = P.SSN AND P.Sex = '1'";
    $result = $conn->query($sql);
    $count = mysqli_field_count($conn);
    echo "<h3>Return average salary of female Faculty</h3>";
    display($result,$count);
    $conn->close();
  }
  function highestSalary(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "VanKelly";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
      die("Connection failed: " . $conn.connect_error);
    }

    $sql = "SELECT SSN, Salary FROM Faculty WHERE Salary = (SELECT MAX(Salary) FROM Faculty)";
    $result = $conn->query($sql);
    $count = mysqli_field_count($conn);
    echo "<h3>Return faculty with highest salary</h3>";
    display($result,$count);
    $conn->close();
  }
  function registeredOne(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "VanKelly";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
      die("Connection failed: " . $conn.connect_error);
    }

    $sql = "SELECT DISTINCT SSN FROM Registered";
    $result = $conn->query($sql);
    $count = mysqli_field_count($conn);
    echo "<h3>Return students who are registered to a class</h3>";
    display($result,$count);
    $conn->close();
  }
  function sports(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "VanKelly";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
      die("Connection failed: " . $conn.connect_error);
    }

    $sql = "SELECT T.Name, P.Nos FROM Primaryy P, Person T WHERE P.SSN = T.SSN";
    $result = $conn->query($sql);
    $count = mysqli_field_count($conn);
    echo "<h3>Return name of primary sport for each student</h3>";
    display($result,$count);
    $conn->close();
  }
  function grants(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "VanKelly";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
      die("Connection failed: " . $conn.connect_error);
    }

    $sql = "SELECT Title, Agency FROM Grantt";
    $result = $conn->query($sql);
    $count = mysqli_field_count($conn);
    echo "<h3>Return name and agency of each grant</h3>";
    display($result,$count);
    $conn->close();
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
            if(isset($_GET['studentCTranscript'])){
              studentCTranscript();
            }
            if(isset($_GET['oneCredit'])){
              oneCredit();
            }
            if(isset($_GET['studentCount'])){
              studentCount();
            }
            if(isset($_GET['femaleAverage'])){
              femaleAverage();
            }
            if(isset($_GET['highestSalary'])){
              highestSalary();
            }
            if(isset($_GET['registeredOne'])){
              registeredOne();
            }
            if(isset($_GET['sports'])){
              sports();
            }
            if(isset($_GET['grants'])){
              grants();
            }

            if(isset($_GET['all'])){
              studentsenior();
              studentmajor();
              studentCTranscript();
              oneCredit();
              studentCount();
              femaleAverage();
              highestSalary();
              registeredOne();
              sports();
              grants();
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
          <a href = 'DBQueries.php?studentCTranscript=true' class="btn btn-primary">Return all students who got A in GEN 100</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <a href = 'DBQueries.php?oneCredit=true' class="btn btn-primary">Return all 1 credit courses</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <a href = 'DBQueries.php?studentCount=true' class="btn btn-primary">Return count of students registered in each section</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <a href = 'DBQueries.php?femaleAverage=true' class="btn btn-primary">Return average salary of female faculty</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <a href = 'DBQueries.php?highestSalary=true' class="btn btn-primary">Return faculty with highest salary</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <a href = 'DBQueries.php?registeredOne=true' class="btn btn-primary">Return students who are registered to a class</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <a href = 'DBQueries.php?sports=true' class="btn btn-primary">Return name of primary sport for each student</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <a href = 'DBQueries.php?grants=true' class="btn btn-primary">Return Grant name and agencies</a>
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
