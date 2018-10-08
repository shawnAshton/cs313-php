

<!DOCTYPE html>
<html>
<head>





   <title>Shop</title>
</head>
<body>
   <div id="demo"></div>

<script type="text/javascript">
   var selected = new Array();

   $(document).ready(function() {

     $("input:checkbox[name=purchase[]]:checked").each(function() {
          selected.push($(this).val());
     });

   });

</script>


   <form action="cart.php" method="post">
      <input type="checkbox" name="purchase[]" value="apple">Apple<br>
      <input type="checkbox" name="purchase[]" value="Banana">Banana<br>
      <input type="checkbox" name="purchase[]" value="Curry Bowl">Curry Bowl<br>
      <input type="checkbox" name="purchase[]" value="Chicken">Chicken<br>
      <input type="checkbox" name="purchase[]" value="French fry">French fry<br>
      <input type="checkbox" name="purchase[]" value="Small hot dog">Small hot dog<br>
      <input type="checkbox" name="purchase[]" value="Rasberry Pie">Rasberry Pie<br>
      <input type="checkbox" name="purchase[]" value="lollipop">lollipop<br>
      <!-- <button type="button" onclick="check()">Change Content</button> -->
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