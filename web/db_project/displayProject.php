<?php
// connect to db
require('dbConnect.php');
$db = get_db();
$id = $_GET['id'];
$project_id = htmlspecialchars($projectName);
$projectName = $_GET['title'];
$projectName = htmlspecialchars($projectName);
echo "pid: $id
<br>pn: $projectName";
// $stmt = $db->prepare("SELECT w.name, j.job_title, jw.instance_of_meeting, p.title, p.id,p.program_user_id,pu.id, pu.username,
//                       j.project_id, j.id, jw.job_id, w.id, jw.worker_id FROM worker w
//    JOIN job_worker jw ON w.id = jw.worker_id
//    JOIN job j ON jw.job_id = j.id
//    JOIN project p ON j.project_id = p.id
//    JOIN program_user pu ON p.program_user_id = pu.id
//    WHERE p.id = :project_id
//    ORDER BY jw.instance_of_meeting, w.name;");
// $stmt->bindValue(":project_id", $project_id, PDO::PARAM_INT); //adds single quotes
// $stmt->execute();
// $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
// // go through each movie in the result and display it

?>
<!DOCTYPE html>
<html>
<head>
   <title>My Project</title>
</head>
<body>

   <h1>
      <?php echo $projectName;
      ?>   
   </h1>

   <ul>
<?php
// $instance = 0;
// foreach ($projects as $project) {
//    $name = $project['name'];
//    $job = $project['job_title'];
//    $projectName = $project['title'];
//    $instance_of_meeting = $project['instance_of_meeting'];
//    if($instance != $instance_of_meeting)
//    {
//       echo "<br><h4>Rotation # $instance_of_meeting</h4>"; 
//       $instance = $instance_of_meeting;
//    }
//    echo "<li>$name - $job</li>";

// }
?>
   </ul>

</body>
</html>


