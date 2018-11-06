<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="assignMe.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Login</title>
</head>
<body>
   <h1>WELCOME TO ASSIGN ME</h1>
   <?php
      session_start();
      if(isset($_SESSION["login_error"]))
      {
         echo $_SESSION["login_error"];
      }
      session_destroy();
   ?>
   <br><br><br>
   <form action="loginSubmission.php" method="POST">
      Username: <input type="text" name="username"><br><br>
      Password: <input type="text" name="password"><br><br>
      <input type="submit" name="submit" value="login">
   </form><br>
   <a style="background-color: #4CAF50; color: white;" href="passwordInput.php">Create Account</a>
</body>
</html>