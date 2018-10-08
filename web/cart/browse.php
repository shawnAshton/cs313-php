

<?php
   session_start();
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
      <input type="hidden" name="purchase[]" value="apple">Apple<br>
      <input type="submit" value="Cart update">
   </form>

   <br>
   <form action="cartUpdate.php" method="post">
      <input type="hidden" name="purchase[]" value="Banana">Banana<br>
      <input type="submit" value="Cart update">
   </form>

   <br>
   <form action="cartUpdate.php" method="post">
      <input type="hidden" name="purchase[]" value="Curry Bowl">Curry Bowl<br>
      <input type="submit" value="Cart update">
   </form>

   <br>
   <form action="cartUpdate.php" method="post">
      <input type="hidden" name="purchase[]" value="Chicken">Chicken<br>
      <input type="submit" value="Cart update">
   </form>

   <br>
   <form action="cartUpdate.php" method="post">
      <input type="hidden" name="purchase[]" value="French fry">French fry<br>
      <input type="submit" value="Cart update">
   </form>
   
   <br>
   <form action="cartUpdate.php" method="post">
      <input type="hidden" name="purchase[]" value="Small hot dog">Small hot dog<br>
      <input type="submit" value="Cart update">
   </form>

   <br>
   <form action="cartUpdate.php" method="post">
      <input type="hidden" name="purchase[]" value="Rasberry Pie">Rasberry Pie<br>
      <input type="submit" value="Cart update">
   </form>

   <br>
   <form action="cartUpdate.php" method="post">
      <input type="hidden" name="purchase[]" value="lollipop">lollipop<br>
      <input type="submit" value="Cart update">
   </form>

      

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