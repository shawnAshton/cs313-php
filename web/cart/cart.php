

<html>
<head>
    <title>Your Cart</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <h1>Your Cart Results </h1>

    <section>
    
        <?php 
        session_start();
        $count = sizeof($_POST["purchase"]);
        $oneOrLess = false;
        if ($count <= 1){
            $oneOrLess = true;
        }else{
            $oneOrLess = false;
        }
        if($oneOrLess == true && $count == 1){
            echo "You have picked: $count item<br>";
        }else{
            echo "You have picked: $count items<br>";
        }
        
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               $_SESSION["cart"] = $_POST["purchase"];
                foreach($_SESSION["cart"] as $item){
                     
                     if(($count == 1) && ($oneOrLess == false)){
                        echo "<br>and,";
                        echo "<br>a $item<br><br>";
                     }else{
                        echo "<br>$item";
                     }
                     
                     $count--;
                }
            }
        ?>
 
     </section>
<a href="browse.php">Browse More?</a><br>
<a href="checkout.php">Checkout</a>


    
</body>
</html>