<?php

    $name = "Ricks MF";
    $food = "pizza";
    $email = "mfricks777@gmail.com";

    $age = 21;
    $user = 2;
    $quantity = 4;

    $gpa = 2.5;
    $price = 5.99;
    $tax_rate = 5.1;

    $employed = true;
    $online = false;
    $forSale = true;

    echo "Hello {$name}<br>";
    echo "You like {$food}<br>";
    echo "Your email is {$email}<br>";

    echo "Your are {$age} years old<br>";
    echo "There are {$user} users online<br>";
    echo "Your would like to buy {$quantity} items<br>";

    echo "Your GPA is {$gpa}<br>";
    echo "Your {$food} costs \${$price}<br>";
    echo "The sale tax rate is: \${$tax_rate}%<br>";

    echo"Online status: {$online}<br>";

    echo "You ordered {$quantity} x {$food}<br>";
    $total = $quantity * $price;
    echo"Your total is: \${$total}";
?>