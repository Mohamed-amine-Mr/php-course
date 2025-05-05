<?php

/*
    Demonstrating Variable Variables in PHP
    A variable variable allows you to use the value of a variable as the name of another variable.
*/

// Assign the string "med" to the variable $a
$a = "med";

// Create a variable with the name stored in $a (i.e., $med) and assign it the value "amine"
$$a = "amine";

// Create another variable using the value of $med (i.e., $amine) and assign it the value "Moun"
$ $$a = "Moun";

// Output the value of $a, which is "med"
echo $a;
echo "<br>";

// Output the value of $med, which is "amine"
// This works because $$a is equivalent to $med
echo $amine;
echo "<br>";

// Output a string concatenated with the value of $med (which is "amine")
echo "last name is ", $amine;
