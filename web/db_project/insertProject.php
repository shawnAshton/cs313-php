<?php
// connect to db
session_start();
$user = $_SESSION["user"];
$projectTitle = $_GET["projectTitle"];
$totalMeetings = $_GET["totalMeetings"];
$names = $_GET["names"];
$jobs = $_GET["jobs"];
require('dbConnect.php');
$db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
      <?php
      echo "user: $user<br>";
      echo "projectTitle: $projectTitle<br>";
      echo "totalMeetings: $totalMeetings<br>";
      foreach($names as $name)
      {
         echo "name: $name<br>";
      }
      foreach($jobs as $job)
      {
         echo "job: $job<br>";
      }
   ?>
</body>
</html>