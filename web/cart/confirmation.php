<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="shop.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmation</title>
</head>
<body>
    <h1>You Purchased the following...</h1>

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
                    echo "<br><br>";
                 
                 }else{
                    echo "<br>$amount X $item"; 

                 }
             }
             $count--;
        }

    ?>
    <h1>And it will be sent to the following address...</h1>
    <?php
        echo $_POST["street"];
        echo '<br>';
        echo $_POST["city"] . ', ' . $_POST["state"] . ', ' . $_POST["zip"];
        
    ?>
</body>
</html>