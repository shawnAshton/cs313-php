<?php
setcookie("fav-text", "c is for cookie", time() + (86400 * 7));
session_start();
$count = 0;
if (isset($_SESSION["count"])){
   $_SESSION["count"] = $_SESSION["count"]++; 
}else{
   $_SESSION["count"] = $count;
}

?>


<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
<p>this is how many times you visited: <?php echo $SESSION["count"]?></p>
</body>
</html>