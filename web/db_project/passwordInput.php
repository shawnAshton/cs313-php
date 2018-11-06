<?php
   session_start();
   if(isset($_SESSION["error_create"]))
   {
      echo $_SESSION["error_create"];
   }
   session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="assignMe.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Create an Account</title>
</head>
<body>
   <form action="createAccount.php" method="POST">
      New Username: <input type="text" name="newUsername"><br><br>
      New Password: <input type="text" name="newPassword"><br><br>
   <input type="submit" value="Create Account">
   </form>
</body>
</html>