<?php include "includes/header.php" ?>
    <h1>Date and time functions</h1>
    <?php
    $datenow=getdate();
    echo "Today's Date: <br/>";
    echo $datenow['mday'].'<br/>';
    echo $datenow['mon'].'<br/>'; //Month
    echo $datenow['year'].'<br/>';

    echo "Today's date:" .$datenow['mday'] .'/'.$datenow['mon'].'/'.$datenow['year']  .'<br/>';
    echo time();
     ?>
      <?php include "includes/footer.php" ?>
</body>
</html>