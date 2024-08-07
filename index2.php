<?php
    $name = "Bhagya loves Bikash<br>";
    $food = "Naan & Panner<br>";

    $age = 21;
    $quantity = 5;

    $gpa = 2.5;
    $price = 4.29;
    $tax = 5.1;


    $online = false;
    $for_sale = true;


    // $total = null;


    // echo "Hello $name";
    // echo "I like $food";

    // echo "I am $age years old <br>";

    // echo "Your gpa is: $gpa<br>";
    // echo "Your pizza is ${$price}.<br>"; //wrong
    // echo "Your pizza is \${$price}.<br>";  //right
    // 
    // echo "The sales tax rate is: $tax%<br>";


    echo"You have ordered $quantity slice of $food<br>";
    $total = $quantity * $price;
    echo"Your total is: \${$total}";
?>