<?php include "includes/header.php" ?>
    <h1>Switch statement</h1>
    <?php
    $grade='S';
    switch($grade){
        case 'A':
            echo '<h2>Grade A</h2>';
            break;
        case 'S':
             echo '<h2>Grade s</h2>';
             break;
        default:
         echo '<h3>No grade</h3>';
         break;
    }
    ?>
     <?php include "includes/footer.php" ?>
</body>
</html>