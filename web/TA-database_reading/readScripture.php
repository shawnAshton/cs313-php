<?php
   try
   {
     $inputScripture = $_POST["scripture"];
     $dbUrl = getenv('DATABASE_URL');

     $dbOpts = parse_url($dbUrl);

     $dbHost = $dbOpts["host"];
     $dbPort = $dbOpts["port"];
     $dbUser = $dbOpts["user"];
     $dbPassword = $dbOpts["pass"];
     $dbName = ltrim($dbOpts["path"],'/');

     $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch (PDOException $ex)
   {
     echo 'Error!: ' . $ex->getMessage();
     die();
   }
?>


<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
   <form>
      
   </form>

   <?php
      foreach ($db->query('select * FROM scripture') as $script) 
      { //this is bad practice...only display what u need
         echo "<b> " . $script['book'] . "</b> " . $script['chapter'] . ": " . $script['verse']. "<br>" . $script['content'] . "<br>";
      }


      echo "<br><br><br> GOOD WAY<br>";
      foreach ($db->query("select book, chapter, verse, content FROM scripture WHERE book = 'D&C'") as $script) {
         echo "<b> " . $script['book'] . "</b> " . $script['chapter'] . ": " . $script['verse']. "<br>" . $script['content'] . "<br>";
      }



      echo "<br><br><br> BEST WAY<br>";
      foreach ($db->query("select book, chapter, verse, content FROM scripture WHERE book = '$inputScripture'") as $script) {
         echo "<b> " . $script['book'] . "</b> " . $script['chapter'] . ": " . $script['verse']. "<br>" . $script['content'] . "<br>";
      }


      echo "<br><br><br> BESTEST WAY<br>";
      foreach ($db->query("select book, chapter,verse, content FROM scripture WHERE book = '$inputScripture'") as $script) {
         echo "<a href=''> " . $script['book'] . "</b> " . $script['chapter'] . ": " . $script['verse']. "<br>";
      }
   ?>
</body>
</html>