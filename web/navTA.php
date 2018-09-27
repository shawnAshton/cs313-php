

      <nav>
         <h1>BATMAN BRAWLERS INC.</h1><br/>
         <?php 
            $file = basename($_SERVER["SCRIPT_FILENAME"], '.php');
            echo "$file";
         ?>




         <a
         <?php 
         if($file === 'homeTA') 
            echo "class='currentPage'";
         ?>

         href="homeTA.php">HOME</a> 





         <a href="about-usTA.php">ABOUT US</a>
         <a href="loginTA.php">LOGIN</a>
      </nav>
