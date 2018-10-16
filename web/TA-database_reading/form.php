<?php
   try
   {
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
   <form action="readScripture.php" method="POST">
      <input type="text" name="scripture"><br>
      <input type="submit" value="submit">
   </form>
</body>
</html>