<?php
session_start();
// connect to db
require('dbConnect.php');
$db = get_db();

   $username = $_SESSION["user"];
   $stmt = $db->prepare("SELECT p.title FROM project p
   JOIN program_user pu ON p.program_user_id = pu.id
   WHERE pu.username = :username;");
   $stmt->bindValue(":username", $username, PDO::PARAM_STR);
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

<!-- TODO: 
CREATE A WAY TO LOG IN
CREATE A REMOVE INPUT FUNCTION? OR DEAL WITH EMPTY INPUT SO THAT THE DATABASE ISNT FILLED WITH TRASH
CREATE A WAY TO DELETE A PROJECT
have a link back to this page after submitting a project and then one before

a swap section, to swap 2 peoples jobs once the auto population has taken place.
       -->