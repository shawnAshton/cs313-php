
<html>
<head>
    <title>Your Cart</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <h1>Your Cart Results</h1>

    <section>
    
        <?php 
        session_start();
        $count = sizeof($_SESSION["purchase"]);
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
    
            foreach($_SESSION["purchase"] as $purchase){
                 
                 if(($count == 1) && ($oneOrLess == false)){
                    echo "<br>and,";
                    echo "<br>a $purchase<br><br>";
                 }else{
                    echo "<br>$purchase";
                 }
                
                 $count--;
            }
            
        ?>
 
     </section>


    
</body>
</html>