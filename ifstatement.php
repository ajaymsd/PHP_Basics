<?php include "includes/header.php" ?>
    <?php
    echo "<h1>If statement</h1>";

    $grade=50;
    if($grade >=50){
        echo '<h3 style="color:green">You Have Passed</h3>';
    }
    else{
        echo '<h3>Failed</h3>';
    }

    $rank='B';
    if($rank=='B'){
        echo '<h3 style="color:yellow">You Have Passed in good marks</h3>';
    }
    elseif($rank=='A'){
        echo '<h3 style="color:blue">You Have Passed in better marks</h3>';
    }
    else{
        echo '<h3 style="color:green">You Have Passed in bad marks</h3>';
    }
    
    ?>
     <?php include "includes/footer.php" ?>
</body>
</html>