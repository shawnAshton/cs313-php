

<html>
<head>
    <title>Your Cart</title>
    <link rel="stylesheet" href="../style.css">

</head>
<body>
    <section>
        <?php 
        header("location: browse.php");
        session_start();
            if ($_SERVER["REQUEST_METHOD"] == "POST") {


               // if it's not set, just copy it.
               if (!isset($_SESSION["cart"])){
                  $_SESSION["cart"] = $_POST["purchase"];
               }else{

                  //add individual 
                  foreach($_POST["purchase"] as $purchase){
                     array_push($_SESSION['cart'], $purchase);
                  }
              }
            }
        ?>
 
     </section>
<a href="browse.php">Browse More?</a><br>
<a href="checkout.php">Checkout</a>


    
</body>
</html>