<?php
session_start();
// connect to db
require('dbConnect.php');
$db = get_db();
$usernamePassed = $_POST['username'];
$passwordPassed = $_POST['password'];
$usernamePassed = htmlspecialchars($usernamePassed);
$stmt = $db->prepare("SELECT username, password, id FROM program_user;");
// I NEED TO BIND THINGS THAT I USE...
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
// lets see if the user has a project
$currentUser = FALSE;
$passwordError = FALSE;
foreach ($users as $user) {
   if ($user['username'] == $usernamePassed)
   {
      $currentUser = TRUE;
      $_SESSION["user_id"] = $user["id"];
      if($user['password'] != $passwordPassed)
      {
         $passwordError = TRUE;
      }
   }
}
if ($currentUser == FALSE)
{
   echo "$usernamePassed is not a recognized username.";
   die();
}
if ($passwordError == TRUE && $currentUser == TRUE)
{
   echo "This password does not match the username's password.";
   die();
}

if ($currentUser)
{
   $_SESSION["user"] = $usernamePassed;
   header('location:displayDB.php');
}
die();
?>