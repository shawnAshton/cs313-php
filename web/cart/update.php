
        <?php 
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
                foreach($_POST["purchase"] as $purchase){
                     
                     if(($count == 1) && ($oneOrLess == false)){
                        echo "<br>and,";
                        echo "<br>a $purchase";
                     }else{
                        echo "<br>$purchase";
                     }
                     
                     $count--;
                }
            }
        ?>
 
