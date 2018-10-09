        <?php 
           session_start();
           $itemToAdd = $_POST["item"];
           $_SESSION["cart"][$itemToAdd]++;
           var_dump($_SESSION["cart"]);
           // header("location: browse.php");
        ?>
