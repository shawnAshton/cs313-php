

      <nav>
         <h1>BATMAN BRAWLERS INC.</h1><br/>
         <?php 
            $file = basename($_SERVER["SCRIPT_FILENAME"], '.php');
         ?>




         <a
         <?php 
         if($file === 'homeTA') 
            echo "class='currentPage'";
         ?>
         href="homeTA.php">HOME</a> 

         <a
         <?php 
         if($file === 'about-usTA') 
            echo "class='currentPage'";
         ?>
          href="about-usTA.php">ABOUT US</a>

         <a
         <?php 
         if($file === 'loginTA') 
            echo "class='currentPage'";
         ?>
          href="loginTA.php">LOGIN</a>
      </nav>
