<?php 
    $grocery = array('Eggs', 'Milk', 'Cheese', 'Water Pack', 'Tissues', 'Watermelon');
    echo "Hello Sir, do you have $grocery[0], $grocery[1], and $grocery[2]? Also if you sell fruits can I find a $grocery[5]?";

    $groceries = array(
        array("Eggs", 'balade', 'mazere3'),
        array("Milk", 'Fresh', 'taanayel'),
        array("Water Pack", 'Tannoureen', 'Reem')
    );
    echo "<br>";
    echo "Hey sir, I need 1 pack of " . $groceries[0][1] ." ". $groceries[0][0] . " and 3 " . $groceries[2][2] . $groceries[2][0];
?>