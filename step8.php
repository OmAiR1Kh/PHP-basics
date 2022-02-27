<?php 
    function checkPow($n) {
    $x = $n;
    while ($x % 2 == 0) {
    $x /= 2;
   }
     
  if($x == 1)
  {
      return "$n is power of 2";
  }
  else
  {
      return "$n is not power of 2";
  }

}
echo checkPow(4) . "<br>";
echo checkpow(12);
?>