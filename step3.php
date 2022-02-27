<?php 
    $var1 = 32;
    $var2 = 45;
    echo $var1 . " " . $var2;
    $var3 = $var1;
    $var1 = $var2;
    $var2 = $var3;
    echo "<br>";
    echo $var1 . " " . $var2;
?>