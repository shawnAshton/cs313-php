<?php
// connect to db
require('dbConnect.php');
$db = get_db();
$usernamePassed = $_POST['username'];
$passwordPassed = $_POST['password'];
$stmt = $db->prepare("SELECT username, password FROM program_user;");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
// lets see if the user has a project
$currentUser = FALSE;
foreach ($users as $user) {
   if ($user['username'] == $usernamePassed)
   {
      $currentUser = TRUE;
   }
}
if ($currentUser == FALSE)
{
   echo "you are not a user in the system";
}
else
{
   echo "you are in the system";
}

$stmt = $db->prepare("SELECT w.name, j.job_title, jw.instance_of_meeting, p.title, pu.username FROM worker w
   JOIN job_worker jw ON w.id = jw.worker_id
   JOIN job j ON jw.job_id = j.id
   JOIN project p ON j.project_id = p.id
   JOIN program_user pu ON p.program_user_id = pu.id
   WHERE p.title = 'Scouts';");
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

   <h1>projects</h1>

   <ul>
<?php
foreach ($projects as $project) {
   $username = $project['username'];
   $name = $project['name'];
   $job = $project['job_title'];
   $projectName = $project['title'];
   echo "<li><p>$username - $name - $job - $projectName</p></li>";
}
?>
   </ul>

</body>
</html>

<!-- foreach ($projects as $project) {
   $name = $project['name'];
   $job = $project['job_title'];
   $projectName = $project['title'];
   echo "<li><p>$name - $job - $projectName</p></li>"; -->