        <?php 
             session_start();
            if($_SESSION["cart"][$_POST["item"]] > 0){
               $_SESSION["cart"][$_POST["item"]]--;
            }
           //var_dump($_SESSION["cart"]);
           header("location: cart.php");
        ?>
