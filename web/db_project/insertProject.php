<?php
// connect to db
session_start();
//get variables...
$user = $_SESSION["user"];
//echo "USER IS - $user";
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

//connect to database
require('dbConnect.php');
$db = get_db();

//insert project into database
$query = "INSERT INTO project(program_user_id, title) VALUES (:user_id, :projectTitle);";
$stmt = $db->prepare($query);
$stmt->bindValue(":user_id", $user_id, PDO::PARAM_INT);
$stmt->bindValue(":projectTitle", $projectTitle, PDO::PARAM_STR);
$stmt->execute();
$new_project_id = $db->lastInsertId('project_id_seq');

//insert names into worker
$worker_id_list = [];
foreach($names as $name)
{
   $name = htmlspecialchars($name);
   $query = "INSERT INTO worker(name) VALUES(:name);";
   $stmt = $db->prepare($query);
   $stmt->bindValue(":name", $name);
   $stmt->execute();//I WAS HERE..THOUGHT PROCESS put the new id into an array for later.
   $worker_id_list[]= $db->lastInsertId('worker_id_seq');
}

//insert jobs into job
$job_id_list = [];
foreach($jobs as $job)
{
   $job = htmlspecialchars($job);
   $query = "INSERT INTO job(job_title, project_id) VALUES(:job, $new_project_id);";
   $stmt = $db->prepare($query);
   $stmt->bindValue(":job", $job);
   $stmt->execute();//I WAS HERE..THOUGHT PROCESS put the new id into an array for later.
   $job_id_list[]= $db->lastInsertId('job_id_seq');
}

foreach ($worker_id_list as $id) {
   echo "worker: $id<br>";
}
foreach ($job_id_list as $id) {
   echo "job: $id<br>";
}
//insert into job_worker...
$job_offset = 0;
foreach($worker_id_list as $worker){
   for($i = 0; $i < $totalMeetings; $i++) {
      $indexToInsert = ($job_offset + $i) % sizeof($job_id_list);
      $job_id = $job_id_list[$indexToInsert];     
      $meetingToInsert = $i + 1;
      $query = "INSERT INTO job_worker(worker_id, job_id, instance_of_meeting)
      VALUES ($worker,$job_id,$meetingToInsert);";
      $stmt = $db->prepare($query);
      $stmt->execute();
   }
   $job_offset += 1;
}
header("location: displayDB.php");
?>

