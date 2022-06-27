<?php
      $title="Index";
      include "includes/header.php" 
 ?>
    <?php   
     echo "Ajay Mathesh";
     echo "</br>";
     echo "Nutella";
    
    ?>
    //If error occurs while using include, remaining page will be rendered 
    //If error happens while using require,remaining page will crash nothing will be rendered 
    <?php 
    $name="Vincent";
    $age=19;
    echo "</br>";
    echo $name;
    //CALLING A VARIABLE
    echo "<h1>Hi my name is $name </h1>";
    echo "<h1>Hi my age is $age </h1>";
    ?>
    <button type="button" class="btn btn-dark">Click Me!</button>
    <button type="button" class="btn btn-success">Click Me!</button>
    <button type="button" class="btn btn-dark">Click Me!</button>
    <?php include "includes/footer.php" ?>
</body>
</html>