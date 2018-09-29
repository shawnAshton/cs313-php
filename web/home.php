<!doctype html>
<htnl lang = "en">
   <head>  
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="myHome.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Shawn's Home Page!</title>
      <script></script>
   </head>


   <body>
      <header>THIS IS MY HOME PAGE!</header>
      <?php
         include 'nav.php';
      ?> 
      <br>

      <div class="col3Grid">
         <div>
            <hr>
            <ul>
            <li><h3>This is my Family!</h3></li>
            <li><p>This is when we went hiking and enjoyed 
            our time sitting on the rocks</p></li>
            <li><p>I love hiking and teasing my nieces and nephews
               while I walk.</p></li>
            </ul>
         </div>
         <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="StewartFalls.jpg" alt="family picture">
         <div>
            <hr>
            <h3>Who am I?</h3>
            <p>I am Shawn</p>
            <p>I attend computer science major.</p>
            <p>I attend BYU-I</p>
            <p>I enjoy burritos</p>

         </div>
      </div>




<script>
function bigImg(x) {
    x.style.height = "auto";
    x.style.width = "1200px";
}

function normalImg(x) {
    x.style.height = "auto";
    x.style.width = "800px";
}
</script>


   </body>