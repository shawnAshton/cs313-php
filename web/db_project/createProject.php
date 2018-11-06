<?php
// connect to db
session_start();
if(!isset($_SESSION["user"]))
{
   $_SESSION["login_error"] = "You need to login before you can create a project!<br><br>";
   header('location:login.php');
}
$user = $_SESSION["user"];
require('dbConnect.php');
$db = get_db();
?>
<!DOCTYPE html>
<html>
   <script language="Javascript">
   function addTextBoxes() {
      //Create input types dynamically and insert in front of the button
      var newTextBoxName = document.createElement("input");
      var newTextBoxJob = document.createElement("input");
      var button = document.getElementById("button");

      //change the attributes of the input tag to make sure they are correct
      newTextBoxName.setAttribute("type", "text");
      newTextBoxName.setAttribute("name", "names[]");
      newTextBoxName.setAttribute("placeholder", "enter a name");
      newTextBoxName.setAttribute("required", "true");
      newTextBoxJob.setAttribute("type", "text");
      newTextBoxJob.setAttribute("name", "jobs[]");
      newTextBoxJob.setAttribute("placeholder", "enter a job");
      newTextBoxJob.setAttribute("required", "true");

      var divTag = document.getElementById("textbox");
      divTag.appendChild(newTextBoxName);
      divTag.appendChild(newTextBoxJob);
      divTag.insertBefore(document.createElement("BR"), newTextBoxName);
      divTag.insertBefore(document.createElement("BR"), newTextBoxName);
      // divTag.insertBefore(newTextBoxName, button);
      // divTag.insertBefore(newTextBoxJob, button);
      // divTag.insertBefore(document.createTextNode(" "), button);
      divTag.insertBefore(document.createTextNode(" "), newTextBoxJob);
   }

   </script>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="assignMe.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Create project</title>
</head>
<body>
   <form id = "nameForm" action="insertProject.php" method="POST">
      <h1>Creating a New Project</h1><hr>
      <h2>Information:</h2>
      <p>Create a way to rotate jobs and people. For example if you are a college student, then you could rotate chores with your roomates.</p>
      <h3>Group name</h3>
      <input type="text" name="projectTitle"  placeholder="enter a title" required>
      <h3>Enter The number of times you want to rotate jobs</h3>
      <input type="text" name="totalMeetings"  placeholder="1-100" maxlength="3" required>

      <h3>Add People Names and Jobs to rotate through</h3>
      <br/>
      <div id="textbox">
         <input type="button" id="button" value="Add Person and Job box" onclick="addTextBoxes()"/><br><br>
         <input type="text" name="names[]" id="input" placeholder="enter a name" required>
         <input type="text" name="jobs[]"  placeholder="enter a job" required>
         
      </div>
      <br>
      <input type="submit" value="Create Project">
   </form>
   <ul>

   </ul>

</body>
</html>