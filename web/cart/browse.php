

<!DOCTYPE html>
<html>
<head>





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
      <input type="checkbox" name="purchase[]" value="lollipop">lollipop<br>
      <input type="submit">
   </form>
<p>this is how many times you visited: <?php echo $_SESSION["count"]?></p>
</body>
</html>