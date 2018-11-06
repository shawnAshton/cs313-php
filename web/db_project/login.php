<?php
   session_start();
   if(isset($_SESSION["login_error"]))
   {
      echo $_SESSION["login_error"];
   }
   session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
   <title>Login</title>
</head>
<body>
   <form action="loginSubmission.php" method="POST">
      Username: <input type="text" name="username"><br>
      Password: <input type="text" name="password"><br>
      <input type="submit" name="submit" value="login">
   </form>
   <a href="passwordInput.php">Create an Account</a>
</body>
</html>