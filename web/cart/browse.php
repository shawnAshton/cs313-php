<?php
   session_start();

   if (!isset($_SESSION["cart"])){

      $_SESSION["cart"] = [
      'Apple' => 0,
      'Banana' => 0,
      'Curry_Bowl' => 0,
      'Chicken' => 0,
      'French_Fry' => 0,
      'Small_Hot_Dog' => 0,
      'Rasberry_Pie' => 0,
      'Lollipop' => 0


      ];
   }


   //check if session array is not set..
      //set it
       // create associative array...

   //
?>


<!DOCTYPE html>

<html>
<head>
   <title>Shop</title>
</head>
<body>
   <div id="demo"></div>
   <h1>BUY SOME OF THESE ITEMS</h1><br>

   <br>
   <form action="cartUpdate.php" method="post">
      <input type="hidden" name="item" value="Apple">Apple<br>
      <input type="submit" value="Add To Cart">
   </form>

   <br>
   <form action="cartUpdate.php" method="post">
      <input type="hidden" name="item" value="Banana">Banana<br>
      <input type="submit" value="Add To Cart">
   </form>

   <br>
   <form action="cartUpdate.php" method="post">
      <input type="hidden" name="item" value="Curry Bowl">Curry Bowl<br>
      <input type="submit" value="Add To Cart">
   </form>

   <br>
   <form action="cartUpdate.php" method="post">
      <input type="hidden" name="item" value="Chicken">Chicken<br>
      <input type="submit" value="Add To Cart">
   </form>

   <br>
   <form action="cartUpdate.php" method="post">
      <input type="hidden" name="item" value="French Fry">French Fry<br>
      <input type="submit" value="Add To Cart">
   </form>
   
   <br>
   <form action="cartUpdate.php" method="post">
      <input type="hidden" name="item" value="Small Hot Dog">Small Hot Dog<br>
      <input type="submit" value="Add To Cart">
   </form>

   <br>
   <form action="cartUpdate.php" method="post">
      <input type="hidden" name="item" value="Rasberry Pie">Rasberry Pie<br>
      <input type="submit" value="Add To Cart">
   </form>

   <br>
   <form action="cartUpdate.php" method="post">
      <input type="hidden" name="item" value="Lollipop">Lollipop<br>
      <input type="submit" value="Add To Cart">
   </form>

   <a href="cart.php">Go To Cart</a>

</body>
</html>


<!--    <script>
   function updateSessions() {
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
          document.getElementById("demo").innerHTML = this.responseText;
       }
     };
     xhttp.open("POST", "update.php", true);
     xhttp.send();
   }
   </script> -->





<!--    <script type="text/javascript">
      function check(){
         var selected = new Array();
         $("input:checkbox[name=purchase[]]:checked").each(function(){
             selected.push($(this).val());
             document.getElementById("demo").innerHTML = selected;
         });
      }
   </script> -->




<!-- <script type="text/javascript">
   var selected = new Array();

   $(document).ready(function() {

     $("input:checkbox[name=purchase[]]:checked").each(function() {
          selected.push($(this).val());
     });

   });

</script>