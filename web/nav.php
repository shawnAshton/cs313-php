

      <nav>
         <?php 
            $file = basename($_SERVER["SCRIPT_FILENAME"], '.php');
         ?>


         <a

         <?php 
         if($file === 'home') 
            echo "class='currentPage'";
         ?>
         
         href="home.php">HOME</a> 

<!--          <a
         <?php 
         if($file === 'about-usTA') 
            echo "class='currentPage'";
         ?>
          href="about-usTA.php">ABOUT US</a> -->

      </nav>
