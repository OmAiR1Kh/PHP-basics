<?php 
    echo "<p>Hello world, Help me I am using PHP</p>";
    echo "I am getting errors but I can't see the errors";
    $name = 'Omair';
    $email = 'Abd.alkhahhar@gmail.com';
    $height = 6;
    $width = 3;
    $area = $height * $width;
    $position = 'student';
    $github_URL = 'https://github.com/OmAiR1Kh';
    $course_name = 'PHP';
    $enrolled_student = 34;
    $price = 30.5;
    $on_discount = true;
    if($on_discount == 1)
    $on_discount = "yes";
    else
    $on_discount = "no";
    echo "<h2>My name is " . $name . " and my Email is" . $email . "</h2>";
    echo $area;
    // echo "<p> My name is " $name  " and I'm a " . $position . "Please check my github URL " . $github_URL . "</p>";
    echo "<br>";
    echo "My name is $name and I'm a $position  Please check my github URL $github_URL";
    echo "<br>";
    echo "Course name : $course_name";
    echo "<br>";
    echo "Enrolled student : $enrolled_student";
    echo "<br>";
    echo "Course Price : $price$";
    echo "<br>";
    echo "Course on discount : $on_discount";
?>