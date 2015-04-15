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
    VALUES (100000 , 200200200, '3');";
    $sql .= "INSERT INTO Student (SNum, SSN, Class)
    VALUES (100001 , 200200201, '3');";
    $sql .= "INSERT INTO Student (SNum, SSN, Class)
    VALUES (100002 , 200200202, '4');";
    $sql .= "INSERT INTO Student (SNum, SSN, Class)
    VALUES (100003 , 200200203, '1');";
    $sql .= "INSERT INTO Student (SNum, SSN, Class)
    VALUES (100004 , 200200204, '4');";

    $sql .= "INSERT INTO Person (SSN, Name, BDate, Address, Sex)
    VALUES (200200200, 'Liam Neesons', '1001-12-25', '123 Liam Way', 0);";
    $sql .= "INSERT INTO Person (SSN, Name, BDate, Address, Sex)
    VALUES (200200201, 'Thorin Oakenshield', '1321-11-25', '124 Liam Way', 0);";
    $sql .= "INSERT INTO Person (SSN, Name, BDate, Address, Sex)
    VALUES (200200202, 'Tony Stark', '1433-01-5', '125 Greatwood Way', 0);";
    $sql .= "INSERT INTO Person (SSN, Name, BDate, Address, Sex)
    VALUES (200200203, 'Margaery Tyrell', '1643-03-28', '124 Greatwood Way', 1);";
    $sql .= "INSERT INTO Person (SSN, Name, BDate, Address, Sex)
    VALUES (200200204, 'Daenerys Targaryen', '1337-12-23', '124 Drogo Lane', 1);";
    $sql .= "INSERT INTO Person (SSN, Name, BDate, Address, Sex)
    VALUES (100100100, 'Jon Snow', '1437-02-23', '14 Castle Black Street', 0);";
    $sql .= "INSERT INTO Person (SSN, Name, BDate, Address, Sex)
    VALUES (100100123, 'Arya Stark', '1637-12-01', '4 Pentos Mile', 1);";
    $sql .= "INSERT INTO Person (SSN, Name, BDate, Address, Sex)
    VALUES (100123100, 'Oliver Queen', '1927-06-23', '124 Verdant Parkway', 0);";
    $sql .= "INSERT INTO Person (SSN, Name, BDate, Address, Sex)
    VALUES (123100100, 'Bruce Wayne', '1999-08-11', '124 Wayne Estate', 0);";

    $sql .= "INSERT INTO Faculty (SSN, Rank, FOffice, FPhone, Salary)
    VALUES (100100100 , '1', '123 Van Lane', '3135867855', '100000');";
    $sql .= "INSERT INTO Faculty (SSN, Rank, FOffice, FPhone, Salary)
    VALUES (100100123 , '2', '123 Kelly Lane', '3135867866', '200000');";
    $sql .= "INSERT INTO Faculty (SSN, Rank, FOffice, FPhone, Salary)
    VALUES (100123100 , '1', '124 Van Lane', '3135867877', '13370000');";
    $sql .= "INSERT INTO Faculty (SSN, Rank, FOffice, FPhone, Salary)
    VALUES (123100100 , '3', '124 Kelly Lane', '3135867888', '690000');";

    $sql .= "INSERT INTO Major (SSN, DName, DCode)
    VALUES (200200204 , 'Computer Science', '1');";
    $sql .= "INSERT INTO Major (SSN, DName, DCode)
    VALUES (200200203 , 'English', '2');";

    $sql .= "INSERT INTO Minor (SSN, DName, DCode)
    VALUES (200200204 , 'English', '2');";
    $sql .= "INSERT INTO Minor (SSN, DName, DCode)
    VALUES (200200203 , 'Computer Science', '1');";

    $sql .= "INSERT INTO Department (DName, DCode, DPhone, DNumber)
    VALUES ('English', '2', 3125648293, 222);";
    $sql .= "INSERT INTO Department (DName, DCode, DPhone, DNumber)
    VALUES ('Computer Science', '1', 3125648294, 111);";

    $sql .= "INSERT INTO College (CName, COffice, CDean)
    VALUES ('Engineering', '6900 Kelly Road', 'Kelly Markaity');";
    $sql .= "INSERT INTO College (CName, COffice, CDean)
    VALUES ('Arts', '6900 Van Road', 'Van Nguyen');";

    $sql .= "INSERT INTO Section (SecNum, Semster, InstructorName, Year, SecCourse)
    VALUES ('100', 'FALL', 'Jon Snow', 2102, 123);";
    $sql .= "INSERT INTO Section (SecNum, Semster, InstructorName, Year, SecCourse)
    VALUES ('101', 'WINTER', 'Arya Stark', 2103, 124);";

    $sql .= "INSERT INTO Course (CNum, CName, CDesc, Credit, Level, CDept)
    VALUES ('100', 'Intro to Databases', 'Learn about bases of data!', 3, 4, 'Computer Science');";
    $sql .= "INSERT INTO Course (CNum, CName, CDesc, Credit, Level, CDept)
    VALUES ('101', 'Intro to Beer Making', 'Beers', 2, 1, 'English');";

    $sql .= "INSERT INTO Current_Section (SecNum, CNum, Semester, Year)
    VALUES ('100', '100', 'FALL', 2102);";
    $sql .= "INSERT INTO Current_Section (SecNum, CNum, Semester, Year)
    VALUES ('101', '101', 'WINTER', 2103);";

    $sql .= "INSERT INTO Grade (SSN, Grade, SecNum)
    VALUES (200200200, 'A', 100);";
    $sql .= "INSERT INTO Grade (SSN, Grade, SecNum)
    VALUES (200200201, 'B', 100);";
    $sql .= "INSERT INTO Grade (SSN, Grade, SecNum)
    VALUES (200200202, 'C', 100);";
    $sql .= "INSERT INTO Grade (SSN, Grade, SecNum)
    VALUES (200200203, 'A', 100);";
    $sql .= "INSERT INTO Grade (SSN, Grade, SecNum)
    VALUES (200200202, 'A', 101);";
    $sql .= "INSERT INTO Grade (SSN, Grade, SecNum)
    VALUES (200200203, 'A', 101);";

    $sql .= "INSERT INTO Grantt (No, Title, Agency, St_Date)
    VALUES (100, 'Beer Research', 'Vaniel Charities', '1999-03-21');";
    $sql .= "INSERT INTO Grantt (No, Title, Agency, St_Date)
    VALUES (101, 'Arrow Research', 'Kelly Charities', '1999-03-21');";

    $sql .= "INSERT INTO Instructor_Researcher (SSN)
    VALUES (100100100);";
    $sql .= "INSERT INTO Instructor_Researcher (SSN)
    VALUES (100100123);";
    $sql .= "INSERT INTO Instructor_Researcher (SSN)
    VALUES (100123100);";
    $sql .= "INSERT INTO Instructor_Researcher (SSN)
    VALUES (123100100);";

    $sql .= "INSERT INTO Non_Academic (SSN)
    VALUES (100100100);";
    $sql .= "INSERT INTO Non_Academic (SSN)
    VALUES (100123100);";
    $sql .= "INSERT INTO Non_Academic (SSN)
    VALUES (123100100);";

    $sql .= "INSERT INTO Offered (SecNum, CNum)
    VALUES (100, 100);";
    $sql .= "INSERT INTO Offered (SecNum, CNum)
    VALUES (101, 101);";

    $sql .= "INSERT INTO Primaryy (Nos, SNum, SSN)
    VALUES ('Rock Climbing', 100000, 200200200);";
    $sql .= "INSERT INTO Primaryy (Nos, SNum, SSN)
    VALUES ('Hockey', 100001, 200200201);";

    $sql .= "INSERT INTO Secondary (Nos, SNum, SSN)
    VALUES ('Rock Climbing', 100001, 200200201);";
    $sql .= "INSERT INTO Secondary (Nos, SNum, SSN)
    VALUES ('Hockey', 100000, 200200200);";

    $sql .= "INSERT INTO Registered (SSN, SecNum)
    VALUES (200200200, 100);";
    $sql .= "INSERT INTO Registered (SSN, SecNum)
    VALUES (200200200, 101);";

    $sql .= "INSERT INTO Sport (PIC, OffLoc, NoS)
    VALUES ('Van Nguyen', '123 Van Way', 'Rock Climbing');";
    $sql .= "INSERT INTO Sport (PIC, OffLoc, NoS)
    VALUES ('Kelly Markaity', '123 Kelly Way', 'Hockey');";

    $sql .= "INSERT INTO Staff (SSN)
    VALUES (100100123);";

    $sql .= "INSERT INTO Teaches (SSN, SecNum)
    VALUES (100100100, 100);";
    $sql .= "INSERT INTO Teaches (SSN, SecNum)
    VALUES (100100123, 101);";

    $sql .= "INSERT INTO Transcript (SSN, SecNum, SNum_Grade)
    VALUES (200200200, 100, 'A');";
    $sql .= "INSERT INTO Transcript (SSN, SecNum, SNum_Grade)
    VALUES (200200201, 100, 'B');";
    $sql .= "INSERT INTO Transcript (SSN, SecNum, SNum_Grade)
    VALUES (200200202, 100, 'C');";
    $sql .= "INSERT INTO Transcript (SSN, SecNum, SNum_Grade)
    VALUES (200200203, 100, 'A');";
    $sql .= "INSERT INTO Transcript (SSN, SecNum, SNum_Grade)
    VALUES (200200202, 101, 'A');";
    $sql .= "INSERT INTO Transcript (SSN, SecNum, SNum_Grade)
    VALUES (200200203, 101, 'A');";

    $sql .= "INSERT INTO Coach (SSN, NoS)
    VALUES (100100123, 'Rock Climbing');";
    $sql .= "INSERT INTO Coach (SSN, NoS)
    VALUES (123100100, 'Hockey');";

    $sql .= "INSERT INTO CD (CName, DName)
    VALUES ('Engineering', 'Computer Science');";
    $sql .= "INSERT INTO CD (CName, DName)
    VALUES ('Arts', 'English');";

    $sql .= "INSERT INTO Administrator (SSN, ACode, AName, APhone, AOffice)
    VALUES (100123100, 'ENG' , 'AENG' , 3153151212, '12 Your Street');";

    $sql .= "INSERT INTO Academic (SSN)
    VALUES (123100100);";

    if($conn->multi_query($sql) === TRUE){
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

    $sql = "TRUNCATE TABLE Student;";
    $sql .= "TRUNCATE TABLE Major;";
    $sql .= "TRUNCATE TABLE Faculty;";
    $sql .= "TRUNCATE TABLE Minor;";
    $sql .= "TRUNCATE TABLE Department;";
    $sql .= "TRUNCATE TABLE College;";
    $sql .= "TRUNCATE TABLE Person;";
    $sql .= "TRUNCATE TABLE Section;";
    $sql .= "TRUNCATE TABLE Course;";
    $sql .= "TRUNCATE TABLE Current_Section;";
    $sql .= "TRUNCATE TABLE Grade;";
    $sql .= "TRUNCATE TABLE Grantt;";
    $sql .= "TRUNCATE TABLE Instructor_Researcher;";
    $sql .= "TRUNCATE TABLE Non_Academic;";
    $sql .= "TRUNCATE TABLE Offered;";
    $sql .= "TRUNCATE TABLE Primaryy;";
    $sql .= "TRUNCATE TABLE Secondary;";
    $sql .= "TRUNCATE TABLE Registered;";
    $sql .= "TRUNCATE TABLE Sport;";
    $sql .= "TRUNCATE TABLE Staff;";
    $sql .= "TRUNCATE TABLE Teaches;";
    $sql .= "TRUNCATE TABLE Transcript;";
    $sql .= "TRUNCATE TABLE Coach;";
    $sql .= "TRUNCATE TABLE CD;";
    $sql .= "TRUNCATE TABLE Administrator;";
    $sql .= "TRUNCATE TABLE Academic;";


    if($conn->multi_query($sql) === TRUE){
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
