<?php
   // connect to db
   require('dbConnect.php');
   $db = get_db();
   $newUsername = $_POST['newUsername'];
   $newUsername = htmlspecialchars($newUsername);
   $newPassword = $_POST['newPassword'];
   $newPassword = htmlspecialchars($newPassword);

   $query = "SELECT username FROM program_user WHERE username = :newUsername";
   $stmt = $db->prepare($query);
   $stmt->bindValue(":newUsername", $newUsername, PDO::PARAM_STR);
   $stmt->execute();
   $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

   $inputUnique = TRUE;

   if(isset($user['username'])){
      $inputUnique = FALSE;
   }

   if($inputUnique){
      $query = "INSERT INTO program_user(username, password) 
      VALUES (:newUsername, :newPassword";
      $stmt = $db->prepare($query);
      $stmt->bindValue(":newUsername", $newUsername, PDO::PARAM_STR);
      $stmt->bindValue(":newPassword", $newPassword, PDO::PARAM_STR);
      $stmt->execute();
      header("location:login.php");
      //TODO: link to login page.
   }
   else{
      echo "ERROR";
      header("location:passwordInput.php");
      //TODO: link back to password input for creation
   }
     

?>