

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

         <a
         <?php 
         if($file === 'assignments') 
            echo "class='currentPage'";
         ?>
          href="assignments.php">ASSIGNMENTS</a> 


         <br/><br/><br/>
         <?php
            echo "Today is " . date("Y/m/d") . "<br>";
         ?>
      </nav>
