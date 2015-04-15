<?php
  function relations($name){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "VanKelly";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
      die("Connection failed: " . $conn.connect_error);
    }

    $sql = "SELECT * FROM $name";
    $result = $conn->query($sql);
    $count = mysqli_field_count($conn);
    echo "<h3>". $name ."</h3>";
    display($result,$count);
    $conn->close();
  }

  function display($result, $count){
    $datatype = array(
    1=>'tinyint',
    2=>'smallint',
    3=>'int',
    4=>'float',
    5=>'double',
    7=>'timestamp',
    8=>'bigint',
    9=>'mediumint',
    10=>'date',
    11=>'time',
    12=>'datetime',
    13=>'year',
    16=>'bit',
    252=>'text',
    253=>'varchar',
    254=>'char',
    246=>'decimal');


    $fieldinfo = mysqli_fetch_fields($result);
    if($result->num_rows > 0){
      echo "<table class='table'>
          <thead>
            <tr>";
      foreach($fieldinfo as $val){
        $i = $val->type;
        echo "<th>". $val->name . "(" . $datatype[$i] . ")</th>";
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
                relations('Student');
              }

              if(isset($_GET['person'])){
                relations('Person');
              }

              if(isset($_GET['faculty'])){
                relations('Faculty');
              }

              if(isset($_GET['academic'])){
                relations('Academic');
              }

              if(isset($_GET['administrator'])){
                relations('Administrator');
              }

              if(isset($_GET['cd'])){
                relations('CD');
              }

              if(isset($_GET['coach'])){
                relations('Coach');
              }

              if(isset($_GET['course'])){
                relations('Course');
              }

              if(isset($_GET['college'])){
                relations('College');
              }

              if(isset($_GET['currentSection'])){
                relations('Current_Section');
              }

              if(isset($_GET['department'])){
                relations('Department');
              }

              if(isset($_GET['grant'])){
                relations('Grantt');
              }

              if(isset($_GET['instructorResearcher'])){
                relations('Instructor_Researcher');
              }

              if(isset($_GET['major'])){
                relations('Major');
              }

              if(isset($_GET['minor'])){
                relations('Minor');
              }

              if(isset($_GET['nonacademic'])){
                relations('Non_Academic');
              }

              if(isset($_GET['offered'])){
                relations('Offered');
              }

              if(isset($_GET['primary'])){
                relations('Primaryy');
              }

              if(isset($_GET['grade'])){
                relations('Grade');
              }

              if(isset($_GET['primary'])){
                relations('Primaryy');
              }

              if(isset($_GET['registered'])){
                relations('Registered');
              }

              if(isset($_GET['secondary'])){
                relations('Secondary');
              }

              if(isset($_GET['section'])){
                relations('Section');
              }

              if(isset($_GET['sport'])){
                relations('Sport');
              }

              if(isset($_GET['staff'])){
                relations('Staff');
              }

              if(isset($_GET['teaches'])){
                relations('Teaches');
              }

              if(isset($_GET['transcript'])){
                relations('Transcript');
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
          <a href='DBRelations.php?person=true'class="btn btn-primary">Person</a>
        </div>
        <div class="col-md-4">
          <a href='DBRelations.php?faculty=true' class="btn btn-primary">Faculty</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <a href='DBRelations.php?academic=true'class="btn btn-primary">Academic</a>
        </div>
        <div class="col-md-4">
          <a href='DBRelations.php?administrator=true'class="btn btn-primary">Administrator</a>
        </div>
        <div class="col-md-4">
          <a href='DBRelations.php?cd=true'class="btn btn-primary">CD</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <a href='DBRelations.php?coach=true' class="btn btn-primary">Coach</a>
        </div>
        <div class="col-md-4">
          <a href='DBRelations.php?college=true' class="btn btn-primary">College</a>
        </div>
        <div class="col-md-4">
          <a href='DBRelations.php?course=true' class="btn btn-primary">Course</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <a href='DBRelations.php?currentSection=true' class="btn btn-primary">Current_Section</a>
        </div>
        <div class="col-md-4">
          <a href='DBRelations.php?department=true' class="btn btn-primary">Department</a>
        </div>
        <div class="col-md-4">
          <a href='DBRelations.php?grade=true' class="btn btn-primary">Grade</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <a href='DBRelations.php?grant=true' class="btn btn-primary">Grant</a>
        </div>
        <div class="col-md-4">
          <a href='DBRelations.php?instructorResearcher=true' class="btn btn-primary">Instructor_Researcher</a>
        </div>
        <div class="col-md-4">
          <a href='DBRelations.php?major=true' class="btn btn-primary">Major</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <a href='DBRelations.php?minor=true' class="btn btn-primary">Minor</a>
        </div>
        <div class="col-md-4">
          <a href='DBRelations.php?nonacademic=true' class="btn btn-primary">Non_Academic</a>
        </div>
        <div class="col-md-4">
          <a href='DBRelations.php?offered=true' class="btn btn-primary">Offered</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <a href='DBRelations.php?primary=true' class="btn btn-primary">Primary</a>
        </div>
        <div class="col-md-4">
          <a href='DBRelations.php?registered=true' class="btn btn-primary">Registered</a>
        </div>
        <div class="col-md-4">
          <a href='DBRelations.php?secondary=true' class="btn btn-primary">Secondary</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <a href='DBRelations.php?section=true' class="btn btn-primary">Section</a>
        </div>
        <div class="col-md-4">
          <a href='DBRelations.php?sport=true' class="btn btn-primary">Sport</a>
        </div>
        <div class="col-md-4">
          <a href='DBRelations.php?staff=true' class="btn btn-primary">Staff</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4">
          <a href='DBRelations.php?teaches=true' class="btn btn-primary">Teaches</a>
        </div>
        <div class="col-md-4">
          <a href='DBRelations.php?transcript=true' class="btn btn-primary">Transcript</a>
        </div>
      </div>
    </div>
  </body>

</html>
