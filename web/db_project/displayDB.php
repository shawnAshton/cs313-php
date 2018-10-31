<?php
session_start();
// connect to db
require('dbConnect.php');
$db = get_db();

   $username = $_SESSION["user"];
   $stmt = $db->prepare("SELECT p.title, p.id FROM project p
   JOIN program_user pu ON p.program_user_id = pu.id
   WHERE pu.username = :username;");
   $stmt->bindValue(":username", $username, PDO::PARAM_STR);
   $stmt->execute();
   $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
         $project_id = $project['id'];
         echo "<li><a href='displayProject.php?id=$project_idS&title=$project_title'>$project_title</a></li>";

         // echo "<li><a href=";
         // echo '"displayProject.php?project_id=';
         // echo "$project_id" . '">';
         // echo $project_title . "</a></li>";
      }
      echo "<br><br>";
      echo "<a href='createProject.php'>New Job Rotation Project</a>";
   ?>


</body>
</html>

<!-- TODO: 

workers have a user... add to table...and to insert...

error messages appear when creating account and when not able to log in... session variables...

people cant have a project with the same name as another project.... or set it up so info is set up with id rather than project name..

logout method...

css!!!

CREATE A REMOVE INPUT FUNCTION for name and box.
   button stays at top

create a way to prevent the word "projects" from showing up when a user has no projects.

CREATE A WAY TO DELETE A PROJECT... that will erase jobs and rows in the job_worker table as well as project...

have a link back to this page before submitting a project

CREATE A WAY TO PREVENT A PERSON FROM CREATING A PORJECT if they didnt log in... as well as prevent them from being on home page

Make sure the number input is a number, not a string or something else.

comment all code nicely

STRETCH***********************************************************
a swap section, to swap 2 peoples jobs once the auto population has taken place.

a way to have a project with a different amount of people and jobs

a way to have projects be time sensative... to delete stuff... so the database doesn't fill up to much..
       -->