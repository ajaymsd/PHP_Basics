<?php include "includes/header.php" ?>
    <h1>Simple Functions</h1>
    <?php
       function writeMsg(){
        echo "Hi bro";
       }

       writeMsg();

       function addnos($num1,$num2){
        $sum1=$num1 + $num2;
        echo $sum1;

       }
       addnos(15,25);
       //&=>> symbol used for reference
    ?>
     <?php include "includes/footer.php" ?>
</body>
</html>