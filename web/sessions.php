


<!DOCTYPE html>
<html>
<head>


<?php
// setcookie("fav-text", "c is for cookie", time() + (86400 * 7));
session_start();
$count = 1;
if (isset($_SESSION["count"])){
   $_SESSION["count"]++
}else{
   $_SESSION["count"] = $count;
}

?>



   <title></title>
</head>
<body>
<p>this is how many times you visited: <?php echo $_SESSION["count"]?></p>
</body>
</html>