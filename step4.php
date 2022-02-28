<?php
function numbersSum($nums) {
    $numSum = 0;
      for ($i = 0; $i < strlen($nums); $i++) {
             $numSum += $nums[$i];
               }
      return $numSum;
}
echo numbersSum("12345")."\n";
echo numbersSum("9999")."\n";
?>