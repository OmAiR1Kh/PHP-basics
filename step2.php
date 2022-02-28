<?php
$n = 5;
$x = 1;
$i=1;
while($i <= ($n-1)){
    $x*=($i+1); 

    $i++;
}
echo "The factorial of  $n = $x"."\n";
?>