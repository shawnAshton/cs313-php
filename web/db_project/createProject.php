<?php
// connect to db
session_start();
$user = $_SESSION["user"];
echo "XX $user XX";
require('dbConnect.php');
$db = get_db();
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

      newTextBoxName.setAttribute("name", "names[]");
      newTextBoxName.setAttribute("placeholder", "enter a name");
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
   <form id = "nameForm" action="insertProject.php" method="GET">
      <h2>Project Title</h2>
      <input type="text" name="projectTitle"  placeholder="enter a title">
      <h2>Enter The number of meetings you want to populate</h2>
      <input type="text" name="totalMeetings"  placeholder="1-100" maxlength="3">

      <h2>Add Names and Jobs</h2>
      <br/>
      <div id="textbox">
         <input type="text" name="names[]" id="input" placeholder="enter a name">
         <input type="text" name="jobs[]"  placeholder="enter a job">
         <input type="button" id="button" value="Add Input Field" onclick="addTextBoxes()"/>
      </div>
      <input type="submit" value="Create Project">
   </form>
   <ul>

   </ul>

</body>
</html>