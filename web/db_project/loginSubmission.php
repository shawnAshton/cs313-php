<?php
session_start();
// connect to db
require('dbConnect.php');
$db = get_db();
$usernamePassed = $_POST['username'];
$passwordPassed = $_POST['password'];
$usernamePassed = htmlspecialchars($usernamePassed);
$passwordPassed = htmlspecialchars($passwordPassed);

//echo "username passed in = " . $usernamePassed . "\n";
$stmt = $db->prepare("SELECT username, password, id FROM program_user WHERE username = :usernamePassed;");
$stmt->bindValue(":usernamePassed", $usernamePassed, PDO::PARAM_STR);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);



foreach ($users as $user)
{  
   // echo "user - " . $user['username'];
   // echo"<br>password sent in is -  $passwordPassed";
   // echo "<br>password - " . $user['password'];
   $databasePassword = $user['password'];
   if(password_verify($passwordPassed, $databasePassword))
   {
      //correct
      $_SESSION["user"] = $usernamePassed;
      $_SESSION["user_id"] = $user["id"];
      header('location:displayDB.php');

      die();
      //echo "<br>1";
   }
   else
   {
      $_SESSION["login_error"] = "Your username or password was incorrect";
      header('location:login.php');
      die();
      //echo "<br>2";
      //incorrect
   }
}
$_SESSION["login_error"] = "Your username or password was incorrect";
header('location:login.php');









// // lets see if the user has a project
// $currentUser = FALSE;
// $passwordError = FALSE;
// foreach ($users as $user) {
//    if ($user['username'] == $usernamePassed)
//    {
//       $currentUser = TRUE;
//       $_SESSION["user_id"] = $user["id"];
//       if($user['password'] != $passwordPassed)
//       {
//          $passwordError = TRUE;
//       }
//    }
// }
// if ($currentUser == FALSE)
// {
//    echo "$usernamePassed is not a recognized username.";
//    die();
// }
// if ($passwordError == TRUE && $currentUser == TRUE)
// {
//    echo "This password does not match the username's password.";
//    die();
// }

// if ($currentUser)
// {
//    $_SESSION["user"] = $usernamePassed;
//    header('location:displayDB.php');
// }
die();
?>