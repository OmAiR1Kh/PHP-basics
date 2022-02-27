<?php
function greaterFn($n){
    $r = $n > 30
    ? "greater than 30"
    : ($n > 20
    ? "greater than 20"
    : ($n >10
    ? "greater than 10"
    : "is less than 10")); 
    echo $n." : ".$r."\n";
    }
    greaterFn(40);
    greaterFn(21);
    greaterFn(12);
    greaterFn(8);
?>