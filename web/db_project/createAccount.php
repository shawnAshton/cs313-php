<?php
   // connect to db
   require('dbConnect.php');
   session_start();
   $db = get_db();
   $newUsername = $_POST['newUsername'];
   $newUsername = htmlspecialchars($newUsername);
   $newPassword = $_POST['newPassword'];

   $query = "SELECT username FROM program_user WHERE username = :newUsername;";
   $stmt = $db->prepare($query);
   $stmt->bindValue(":newUsername", $newUsername, PDO::PARAM_STR);
   $stmt->execute();
   $user = $stmt->fetch(PDO::FETCH_ASSOC);

   $inputUnique = TRUE;

   if(isset($user['username'])){
      $inputUnique = FALSE;
   }

   if($inputUnique){
      $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
      $query = "INSERT INTO program_user(username, password) 
      VALUES (:newUsername, :newPassword);";
      $stmt = $db->prepare($query);
      $stmt->bindValue(":newUsername", $newUsername, PDO::PARAM_STR);
      $stmt->bindValue(":newPassword", $hashedPassword, PDO::PARAM_STR);
      $stmt->execute();
      header("location:login.php");
      //TODO: link to login page.
   }
   else{
      $_SESSION["error_create"] = "An account with that username already exists.<br><br>";
      header("location:passwordInput.php");
      //TODO: link back to password input for creation
   }
     

?>