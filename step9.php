<?php 
    function getSqwr($num)
    {
      $x = $num;
      $y = 1;
      while($x > $y)
      {
        $x = ($x + $y)/2;
        $y = $num/$x;
      }
      return $x;
    }
    echo getSqwr(16) . "<br>";
    echo getSqwr(14) . "<br>";
?>