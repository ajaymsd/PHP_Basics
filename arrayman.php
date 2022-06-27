<?php include "includes/header.php" ?>
    <h1>Array</h1>
    <?php
      $nos=array(1,2,3,4,5,6,7,8,9,10);
      echo $nos[5];
      echo "<p>$nos[2]</p>";

      $size=count($nos);
      echo "<p>Array size:$size</p>";

    
      for($count=0;$count<$size;$count++){
        echo "$nos[$count]";
      }
    ?>
     <?php include "includes/footer.php" ?>
</body>
</html>