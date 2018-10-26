<?php
session_start();
// connect to db
require('dbConnect.php');
$db = get_db();

   $_SESSION["user"] = $usernamePassed;
   $stmt = $db->prepare("SELECT p.title FROM project p
   JOIN program_user pu ON p.program_user_id = pu.id
   WHERE pu.username = :usernamePassed;");
   $stmt->bindValue(":usernamePassed", $usernamePassed, PDO::PARAM_STR);
   $stmt->execute();
   $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
   // go through each movie in the result and display it

?>
<!DOCTYPE html>
<html>
<head>
   <title>projects</title>
</head>
<body>
   <?php 
      echo "<h1>Projects</h1>";
      foreach ($projects as $project) 
      {
         $project_title = $project['title'];
         echo "<li><a href=";
         echo '"displayProject.php?projectName=';
         echo "$project_title" . '">';
         echo $project_title . "</a></li>";
      }
      echo "<br><br>";
      echo "<a href='createProject.php'>Create Project</a>";
   ?>


</body>
</html>

<!-- foreach ($projects as $project) {
   $name = $project['name'];
   $job = $project['job_title'];
   $projectName = $project['title'];
   echo "<li><p>$name - $job - $projectName</p></li>"; -->

<!--       $stmt = $db->prepare("SELECT w.name, j.job_title, jw.instance_of_meeting, p.title, pu.username FROM worker w
      JOIN job_worker jw ON w.id = jw.worker_id
      JOIN job j ON jw.job_id = j.id
      JOIN project p ON j.project_id = p.id
      JOIN program_user pu ON p.program_user_id = pu.id
      WHERE p.title = 'Scouts';"); -->