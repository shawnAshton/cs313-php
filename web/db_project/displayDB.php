<?php
   session_start();
   // connect to db
   require('dbConnect.php');
   $db = get_db();

   if(!isset($_SESSION["user"]))
   {
      $_SESSION["login_error"] = "You need to login before you can see your projects!<br><br>";
      header('location:login.php');
   }
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
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="assignMe.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>My Projects</title>
</head>
<body>
   <?php 
   if(count($projects) > 0)
   {
      if(count($projects) == 1)
      {
         echo "<h1>My Project</h1>";
      }
      else
      {
         echo "<h1>My Projects</h1>";
      }
      echo "<hr>";
   }
      foreach ($projects as $project) 
      {
         $project_title = $project['title'];
         $project_id = $project['id'];
         echo "<a href='displayProject.php?id=$project_id&title=$project_title'>$project_title</a><br><br>";

         // echo "<li><a href=";
         // echo '"displayProject.php?project_id=';
         // echo "$project_id" . '">';
         // echo $project_title . "</a></li>";
      }
      echo "<br><br>";
      echo "<a style='background-color: #4CAF50; color: white;' href='createProject.php'>Create Project</a>";
   ?>
<br><br>
<a style="background-color: #4CAF50; color: white;" href='login.php'>logout</a>

</body>
</html>

<!-- TODO: 

error messages appear when creating account and when not able to log in... session variables... !!!!!!!!!!!!!!!!CHECK!!!!!!!!!!!!!!!!!!!

people cant have a project with the same name as another project.... or set it up so info is set up with id rather than project name..!!!!!!!!!!!!!!!CHECK!!!!!!!!!!!!!!!!!!!!

logout method...!!!!!!!!!!!!!!!!!!!CHECK!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

css!!!CHECK!!!!!!!!!

CREATE A REMOVE INPUT FUNCTION for name and box.
   button stays at top

create a way to prevent the word "projects" from showing up when a user has no projects. !!!!!!!!!!!!!!!!!!!!!!!!!!CHECK!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

CREATE A WAY TO DELETE A PROJECT... that will erase jobs and rows in the job_worker table as well as project...

have a link back to this page before submitting a project

CREATE A WAY TO PREVENT A PERSON FROM CREATING A PORJECT if they didnt log in... as well as prevent them from being on home page!!!!!!CHECK!!!!!!

Make sure the number input is a number, not a string or something else.

workers have a user.....when inserting a worker, check if there is already one by that name.. so don't create another

comment all code nicely

STRETCH***********************************************************
a swap section, to swap 2 peoples jobs once the auto population has taken place.

a way to have a project with a different amount of people and jobs

a way to have projects be time sensative... to delete stuff... so the database doesn't fill up to much..
       -->