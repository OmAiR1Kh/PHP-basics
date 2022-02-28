<?php 
    $text = "omair is a web developer who studied in lebanon and hated his life, omair's father is a teacher, and omair's brother is also a web developer";
    $num = count(explode("omair", $text));
    echo "that word was mentioned in the text " . ($num-1) . " times";
?>