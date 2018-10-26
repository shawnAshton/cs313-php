<?php
// connect to db
session_start();
$user = $_SESSION["user"];
$user_id = $_SESSION["user_id"];
$projectTitle = $_GET["projectTitle"];
$totalMeetings = $_GET["totalMeetings"];
$names = $_GET["names"];
$jobs = $_GET["jobs"];
require('dbConnect.php');
$db = get_db();

echo "USER ID: $user_id;<br>";
//insert project into database

//insert names into worker

//insert jobs into job

//insert into job_worker...
?>

