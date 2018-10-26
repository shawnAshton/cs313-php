<?php
// connect to db
session_start();
$user = $_SESSION["user"];
$projectTitle = $_POST["projectTitle"];
$totalMeetings = $_POST["totalMeetings"];
$names = $_POST["names"];
$jobs = $_POST["jobs"];
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
      echo "user: $user";
      echo "projectTitle: $projectTitle";
      echo "totalMeetings: $totalMeetings";
      foreach($names as $name)
      {
         echo "name: $name";
      }
      foreach($jobs as $job)
      {
         echo "job: $job";
      }
   ?>
</body>
</html>