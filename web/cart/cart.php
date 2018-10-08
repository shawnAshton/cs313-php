

<html>
<head>
    <title>cart</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <h1 class="glow"> Result </h1>

    <section id="main">
    
        <?php 
        $count = sizeof($_POST["purchase"]);
        $oneOrLess = false;
        if ($count <= 1){
            $oneOrLess = true;
        }else{
            $oneOrLess = false;
        }
        echo "you have picked: $count items";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach($_POST["purchase"] as $purchase){
                     
                     if(($count == 1) && ($oneOrLess == false)){
                        echo "<br>and";
                     }
                     echo "<br>You have picked $purchase";
                     $count--;
                }
            }
        ?>
 
     </section>
    
</body>
</html>