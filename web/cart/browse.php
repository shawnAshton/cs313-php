

<!DOCTYPE html>
<html>
<head>


<?php
// setcookie("fav-text", "c is for cookie", time() + (86400 * 7));
session_start();
$count = 1;
if (isset($_SESSION["count"])){
   $_SESSION["count"]++; 
}else{
   $_SESSION["count"] = $count;
}

?>



   <title></title>
</head>
<body>
   <form action="cart.php" method="post">
      <input type="checkbox" name="purchase[]" value="apple">Apple<br>
      <input type="checkbox" name="purchase[]" value="Banana">Banana<br>
      <input type="checkbox" name="purchase[]" value="Curry">Curry<br>
      <input type="checkbox" name="purchase[]" value="Chicke">Chicken<br>
      <input type="checkbox" name="purchase[]" value="French frie">French frie<br>
      <input type="checkbox" name="purchase[]" value="Small hot dog">Small hot dog<br>
      <input type="checkbox" name="purchase[]" value="Rasberry Pie">Rasberry Pie<br>
      <input type="checkbox" name="purchase[]" value="Dog food">Dog food<br>
      <input type="checkbox" name="purchase[]" value="lollipo">lollipop<br>
      <input type="submit">
   </form>
<p>this is how many times you visited: <?php echo $_SESSION["count"]?></p>
</body>
</html>