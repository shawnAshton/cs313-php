

<html>
<head>
    <title>Your Cart</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="shop.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <h1>The Contents of Yor Cart</h1>

    <section>
    <?php
        session_start();
        $count = sizeof($_SESSION["cart"]); 
        $oneOrLess = false;
        if ($count <= 1){
            $oneOrLess = true;
        }else{
            $oneOrLess = false;
        }
        foreach($_SESSION["cart"] as $item => $amount){
             if($amount > 0){
                 if(($count == 1) && ($oneOrLess == false)){
                    echo "<br>and,";
                    echo "<br>$amount X $item";
                    echo '   <form action="cartUpdateSubtract.php" method="post">
                                <input type="hidden" name="item" value="'. $item . '">'. $item . '<br>
                                 <input type="submit" value="Remove an Item">
                             </form>';
                    echo "<br><br>";
                 
                 }else{
                    echo "<br>$amount X $item"; 
                    echo '   <form action="cartUpdateSubtract.php" method="post">
                                <input type="hidden" name="item" value="'. $item . '">'. $item . '<br>
                                 <input type="submit" value="Remove an Item">
                             </form>';
                 }
             }
             $count--;
        }

    ?>
       
 
    </section>
<a href="browse.php">Browse More</a><br><br>
<a href="checkout.php">Checkout</a>





<!--  <?php 
        session_start();
        $count = sizeof($_SESSION["cart"]);
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
 -->

    
</body>
</html>