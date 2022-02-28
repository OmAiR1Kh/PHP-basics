<?php 
    for ($row=0; $row<=6 ; $row++)
    {
      for ($column=0; $column<=7; $column++)
        {
         if ((($row == 0 or $row == 6) && $column >= 0 and $column <= 6) || $row+$column==6)
                echo "*";    
            else  
                echo "&nbsp&nbsp";     
        }        
      echo "<br>";
    }
?>