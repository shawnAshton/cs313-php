<?php
// connect to db
require('dbConnect.php');
$db = get_db();
// query for all projects
// $stmt = $db->prepare('SELECT * FROM table WHERE id=:id AND name=:name');
// $stmt->bindValue(':id', $id, PDO::PARAM_INT);
// $stmt->bindValue(':name', $name, PDO::PARAM_STR);
// $stmt->execute();
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = $db->prepare("SELECT w.name, j.job_title, jw.instance_of_meeting, p.title FROM worker w
   JOIN job_worker jw ON w.id = jw.worker_id
   JOIN job j ON jw.job_id = j.id
   JOIN project p ON j.project_id = p.id
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
   $name = $project['name'];
   $job = $project['job_title'];
   echo "<li><p>$name ($job)</p></li>";
}
?>
   </ul>

</body>
</html>