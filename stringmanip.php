<?php include "includes/header.php" ?>
    <h1>String Manipulation</h1>
    <?php
    $phrase1="Ajay Mathesh is a good boy";
    $phrase2="He scores good marks";
    $name="trevor williams";
    echo $phrase1." named as scholar ," .$phrase2;//Concatenation
    echo "<br>";
    //String Transformation
    echo 'Uppercase first letter:' .ucfirst($name).'<br/>';
    echo 'Uppercase first letter of Each Word:' .ucwords($name).'<br/>';
    echo 'Uppercase:' .strtoupper($name).'<br/>';
    echo 'Lowercase:' .strtolower("ffffjhf").'<br/>';
    echo 'Repeat String:' .str_repeat($name,5). "<br/>";
    echo 'Get Substring:' .substr($phrase1,5,10).'<br/>';
    echo 'Find  Character:' .strchr($phrase1,'j').'<br/>';
    echo 'Find Length:' .strlen($phrase1).'<br/>';
    echo 'Replace String:' .str_replace("is","was",$phrase1).'<br/>';






    ?>
     <?php include "includes/footer.php" ?>
</body>
</html>