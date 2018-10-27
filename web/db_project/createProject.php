<?php
// connect to db
session_start();
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
      newTextBoxJob.setAttribute("type", "text");
      newTextBoxJob.setAttribute("name", "jobs[]");
      newTextBoxJob.setAttribute("placeholder", "enter a job");

      var divTag = document.getElementById("textbox");
      divTag.appendChild(newTextBoxJob);
      divTag.appendChild(newTextBoxName);
      divTag.insertBefore(document.createElement("BR"), button);
      divTag.insertBefore(newTextBoxName, button);
      divTag.insertBefore(newTextBoxJob, button);
      divTag.insertBefore(document.createTextNode(" "), button);
      divTag.insertBefore(document.createTextNode(" "), newTextBoxJob);
   }

   </script>
<head>
   <title>Create projects</title>
</head>
<body>
   <form id = "nameForm" action="insertProject.php" method="POST">
      <h1>Creating a New Project</h1>
      <h2>Information:</h2>
      <p>Create a way to rotate jobs and people. For example if you are a college student, then you could rotate chores with your roomates.</p>
      <h3>New Project</h3>
      <input type="text" name="projectTitle"  placeholder="enter a title">
      <h3>Enter The number of times you want to rotate jobs</h3>
      <input type="text" name="totalMeetings"  placeholder="1-100" maxlength="3">

      <h3>Add People Names and Jobs to rotate through</h3>
      <br/>
      <div id="textbox">
         <input type="text" name="names[]" id="input" placeholder="enter a name">
         <input type="text" name="jobs[]"  placeholder="enter a job">
         <input type="button" id="button" value="Add Input Fields" onclick="addTextBoxes()"/>
      </div>
      <input type="submit" value="Create Project">
   </form>
   <ul>

   </ul>

</body>
</html>