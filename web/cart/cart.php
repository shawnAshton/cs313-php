

<html>
<head>
    <title>cart</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <h1 class="glow"> Result </h1>

    <section id="main">
    
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach($_POST["purchase"] as $purchase){
                    echo "<br>You have picked $purchase";
                }
            }
        ?>
 
     </section>
    
</body>
</html>