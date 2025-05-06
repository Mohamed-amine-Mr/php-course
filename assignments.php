<?php
// $a = "Elzero";
// $b = "Web";
// $c = "School";

// $a .= " " . $b;
// $a .= " " . $c;
// $d = $a;
// Method One
// $d = " $a $b $c ";

// $d = " {$a} {$b} {$c} ";

// $d =  $a . " " . $b . " " . $c;


// Method Two
// $d = ???;

// Method Three
// $d = ???;

// Method Four
// $d = ???;

// echo $d; // Elzero Web School


// $a = 10;
// $b = 20;

// echo $a ? $b ? $a ? $b ? $a ? $a ? $a; // 10000


// Code 1
$a = @$b or die("variable not exist");

// Code 2
$f = @file("Not_A_File") or die("file not exist");

// Code 3
(@include("Not_A_File")) or die("file not exist");;
