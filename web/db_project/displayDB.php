<?php
// connect to db
require('dbConnect.php');
$db = get_db();
$usernamePassed = $_POST['username'];
$passwordPassed = $_POST['password'];
$stmt = $db->prepare("SELECT username, password FROM program_user;");
// I NEED TO BIND THINGS THAT I USE...
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
// lets see if the user has a project
$currentUser = FALSE;
$passwordError = FALSE;
foreach ($users as $user) {
   if ($user['username'] == $usernamePassed)
   {
      $currentUser = TRUE;
      if($user['password'] != $passwordPassed)
      {
         $passwordError = TRUE;
      }
   }
}
if ($currentUser == FALSE)
{
   echo "$usernamePassed is not a recognized username.";
 //  header("location: login.php");
}
if ($passwordError == TRUE && $currentUser == TRUE)
{
   echo "This password does not match the username's password.";
 //  header("location: login.php");
}

if ($currentUser)
{
   $stmt = $db->prepare("SELECT p.title FROM project p
   JOIN program_user pu ON p.program_user_id = pu.id
   WHERE pu.username = :usernamePassed;");
   $stmt->bindValue(":usernamePassed", $usernamePassed, PDO::PARAM_STR);
   $stmt->execute();
   $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
   // go through each movie in the result and display it
}

?>
<!DOCTYPE html>
<html>
   <script language="Javascript">
   function addTextBoxes() {
      //Create an input type dynamically and insert in front of the button
      var newTextBoxName = document.createElement("input");
      var newTextBoxJob = document.createElement("input");
      var button = document.getElementById("button");
      newTextBoxName.setAttribute("type", "text");
      newTextBoxJob.setAttribute("type", "text");

      newTextBoxName.setAttribute("name", "name[]");
      newTextBoxName.setAttribute("placeholder", "enter a name");
      newTextBoxJob.setAttribute("name", "job[]");
      newTextBoxJob.setAttribute("placeholder", "enter a job");

      var divTag = document.getElementById("textbox");
      divTag.appendChild(newTextBoxJob);
      divTag.appendChild(newTextBoxName);
      divTag.insertBefore(document.createElement("BR"), button);
      divTag.insertBefore(newTextBoxName, button);
      divTag.insertBefore(newTextBoxJob, button);
      divTag.insertBefore(document.createTextNode(" "), button);
   }

   </script>
<head>
   <title>projects</title>
</head>
<body>
   <?php 
   if ($passwordError != TRUE && $currentUser != FALSE)
   {
      echo "<h1>Projects</h1>";
      foreach ($projects as $project) 
      {
         $project_title = $project['title'];
         echo "<li><a href=";
         echo '"displayProject.php?projectName=';
         echo "$project_title" . '">';
         echo $project_title . "</a></li>";
      }
   }
   ?>
   <br><br>

   <form id = "nameForm">
      <h2>Add Names</h2>
      <br/>
      <div id="textbox">
         <input type="text" name="names[]" id="input" placeholder="enter a name">
         <input type="text" name="job[]" id="input" placeholder="enter a job">
         <input type="button" id="button" value="Add Name" onclick="addTextBoxes()"/>
      </div>
   </form>
   <ul>

   </ul>

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