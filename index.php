<?php

/*
    Operators
    - Used To Perform Operations On Values.

    Error Control Operator
    - Control The Errors

    @
    - Variable
    - File
    - Include
  */
// Variable

// ay haja tketbat baad die("") makat9rach
$a = 10;
$b = @$a or die("var not found");
echo $b;
echo "Test $b";
echo '<br>';

// File (read file into array so output when u read file is array so use print_r not echo) 
echo "<pre>";
// $f = file("./amine.txt");
$f = @file("./amine.txt") or die("file amine not exist"); // try wrong src apply error control 
echo "</pre>";
print_r($f);
// Include
echo '<br>';
echo '<br>';
// include("./amine.php");
// to add or die u should wrap the include inside ()
(@include("./amine_data.php")) or die("the file amine_data not exist");// try wrong src file to handle err
