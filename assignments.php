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
// $a = @$b or die("variable not exist");

// Code 2
// $f = @file("Not_A_File") or die("file not exist");

// Code 3
// (@include("Not_A_File")) or die("file not exist");;


/*
  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"
*/
// Code 1
// $a = @$b or die ( "b now exist");

// Code 2
// $f = @file("Not_A_File") or die("wrong file name");

// Code 3
echo DEFAULT_INCLUDE_PATH;
if (1 > 2) echo "hi";
elseif(2<5)echo "no";
echo "hi";
else "hi";