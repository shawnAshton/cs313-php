        <?php 
           session_start();
           $_SESSION["cart"][$_POST["item"]]++;
           //var_dump($_SESSION["cart"]);
           header("location: browse.php");
        ?>
