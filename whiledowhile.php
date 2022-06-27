<?php include "includes/header.php" ?>
    <h1>Do while and while</h1>
    <?php
    $grade=0;
     while($grade <10){
        echo "<p>Less than 10</p>";
        $grade++;
     }
     echo "exit loop";
      
     do{
        echo "<p>Less than 10</p>";
        $grade++; 
     }while($grade <10);
     echo "exit loop";
    ?>
     <?php include "includes/footer.php" ?>
</body>
</html>