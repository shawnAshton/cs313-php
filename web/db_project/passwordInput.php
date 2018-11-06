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
   <title>Create an Account</title>
</head>
<body>
   <form action="createAccount.php" method="POST">
      New Username: <input type="text" name="newUsername"><br>
      New Password: <input type="text" name="newPassword"><br>
   <input type="submit" name="submit">
   </form>
</body>
</html>