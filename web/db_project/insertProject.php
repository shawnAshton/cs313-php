<?php
// connect to db
session_start();
//get variables...
$user = $_SESSION["user"];
$user_id = $_SESSION["user_id"];
$projectTitle = $_POST["projectTitle"];
$totalMeetings = $_POST["totalMeetings"];
$names = $_POST["names"];
$jobs = $_POST["jobs"];

//cleanse variables
$user = htmlspecialchars($user);
$user_id = htmlspecialchars($user_id);
$projectTitle = htmlspecialchars($projectTitle);
$totalMeetings = htmlspecialchars($totalMeetings);
//the names and jobs array will be cleansed a little later...

require('dbConnect.php');
$db = get_db();
//insert project into database
$query = "INSERT INTO project(program_user_id, title) VALUES (:user_id, :projectTitle);";
$stmt = $db->prepare($query);
$stmt->bindValue(":user_id", $user_id, PDO::PARAM_INT);
$stmt->bindValue(":projectTitle", $projectTitle, PDO::PARAM_STR);
$stmt->execute();
//insert names into worker

//insert jobs into job

//insert into job_worker...
?>

