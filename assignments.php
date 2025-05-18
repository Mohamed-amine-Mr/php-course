<?php

// $genre = "Hack And Slash";

// switch ($genre) {
//   case ($genre === "RPG"):
//     echo "I Recommend Ys Games";
//     break;
//   case ($genre === "Hack And Slash"):
//     echo "I Recommend Castlevania Games";
//     break;
//   case ($genre === "FPS"):
//     echo "I Recommend Uncharted Games";
//     break;
//   case ($genre === "Platform"):
//     echo "I Recommend Megaman Games";
//     break;
//   case ($genre === "Puzzle"):
//     echo "I Recommend Megaman Games";
//     break;
//   default:
//     echo "I Recommend Shadow Of Mordor And Shadow Of War";

//     break;
// }

// Needed Output
// "I Recommend Castlevania Games";



// $num_one = 23;
// $num_two = 5;
// $op = "/";

// switch ($op) {
//   case ("+"):
//     echo $num_one + $num_two;
//     break;
//   case ("-"):
//     echo $num_one - $num_two;
//     break;
//   case ("/"):
//     echo (int)($num_one / $num_two);
//     echo "<br>";
//     echo $num_one % $num_two;

//     break;
//   case ("*"):
//     echo $num_one * $num_two;
//     break;
//   default:
//     echo "Unknown Operation";
//     break;
// }


// $day = "Wed";


// if ($day == "Sat" || $day == "Sun" || $day == "Mon") {
//   echo "We Are Open All The Day";
// } elseif ($day == "Tue" || $day == "Wed") {
//   echo "We Are Open From 08:12";
// } elseif ($day == "Thu" || $day == "Fri") {
//   echo "We Are Closed";
// } else  echo "Unknown Day";


// $name = "1";
// $age = 40;
// $country = "Egypt";

// switch (true) {
//   case ($age > 18):
//     echo ("The Age Is Good To Go<br>");
//   case ((gettype($name) === "string")):
//     echo "The Name Is Good To Go<br>";
//   case (($country === "Egypt")):
//     echo  "The Country Is Good To Go<br>";
// };

// Needed Output
// "The Age Is Good To Go"
// "The Name Is Good To Go"
// "The Country Is Good To Go"

// $index = 10;

// for ($i = $index; $i >= 1; $i--) {
//   echo "<br> $i";
// }

// Needed Output
// 10
// 9
// 8
// 7
// 6
// 5
// 4
// 3
// 2
// 1

// $index = 0;

// for ($i = $idex; $i <= 20; $i += 2) {
//   echo "<br> $i";
// }
// Needed Output
// 2
// 4 ...

// $i = $idex;
// while ($i <= 20) {
//   echo "<br> $i";;
//   $i += 2;
// }

// $i = $idex;
// do {
//   echo "<br> $i";
//   $i += 2;
// } while ($i <= 20);


// $num = 2;

// while ($num < 520) {

//   echo "<br> $num";
// }

// Needed Output
// 1 => 1 + 0
// 4 => 1 + 3
// 10=> 4 + 6
// 22 . ..  


// $start = 10;
// $end = 0;
// $stop = 3;

// for ($i = $start; $i >= $end; $i--) {
//   if ($i < 10) echo "<br > 0$i";
//   else echo "<br > $i";
//   if ($i == 3)  break;
// };
// // Needed Output
// 10
// 09
// 08

//  ??? 
// $start = 0;
// $mix = [1, 2, 3, "A", "B", "C", 4];

// // Output
// 2
// 3
// 4

// ////////////

// $start = 0;
// $mix = [1, 2, 3, "A", "B", "C", 4];

// for ($i = $start;;) {
//   if (gettype($i) <> "string")
//     echo "<br> $i";
//   $i++; // how i control each step of the loop inside the array 
// }

// Output
// 2
// 3
// 4





// $countries = ["EG", "SA", "QA", "SY", "USA", "GER"];
// foreach ($countries as $country) {
//   if ($country == "USA") continue;
//   echo "<br> $country";
// }

// $mix = [1, 2, "A", "B", "C", 3, 4];

// foreach ($mix as $value) {
//   if (gettype($value) <> "string") echo "<br> $value";

// }

// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"


// $countries = ["EG", "SA", "QA", "SY", "USA", "GER"];
// foreach ($countries as $country) {
//   if ($country == "USA") continue;
//   echo "<br> $country";
// }
// $nums = [1, 13, 12, 20, 51, 17, 30];
// foreach ($nums as $num) {
//   if ($num  % 2 == 0) {
//     echo (($num / 2) . "<br>");
//   };
// }
// Output
// 6
// 10
// 15

// ?

// $help_num = 3;
// $nums = [4, 5, 6, 1, 2, 3];
// $names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

// for ($i = $help_num; $i <= 10; $i++) {
//   echo $names[$i] . " <br>";
// }

// Output
// "Sayed"
// "Osama"


// $money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
// foreach ($money as $key => $value) {
//   echo "The Name Is $key And I Need $value Pound From Him <br><br>";
// }
// Output
// "The Name Is Ahmed And I Need 100 Pound From Him"
// "The Name Is Sayed And I Need 150 Pound From Him"
// "The Name Is Osama And I Need 100 Pound From Him"
// "The Name Is Maher And I Need 250 Pound From Him"

// $start = 0;
// $mix = [1, 2, 3, "A", "B", "C", 4];

// for ($i = 2; $i <= 4; $i++) {
//   echo $i . "<br>";
// }
// Output
// 2
// 3
// 4

// $help_num = 3;
// $nums = [4, 5, 6, 1, 2, 3];
// $names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];


// for ($i = $help_num / $help_num; $i <= $help_num - ($help_num / 3); $i++) {
//   echo $names[$i] . "<br>";
// }
// Output
// "Sayed"
// "Osama"


// قم بإنشاء Function تقوم بجمع كل الأرقام التي تعطى لها ك Arguments

// function sum_all()
// {
//     $result = 0;
//     foreach (func_get_args() as $number) {
//         if ($number == 5)  continue;
//         if ($number == 10)  $number = 20;
//         $result += $number;
//     };
//     echo "$result <br>";
// }


// sum_all(10, 12, 5, 6, 6, 10); // 64
// echo sum_all(5, 10, 5, 10); // 40

// function get_arguments()
// {
//     $concat = "";
//     foreach (func_get_args() as $word) {
//         $concat .= $word . " ";
//     };
//     return $concat;
// }
// Write Function Content Here

// Needed Output
// echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
// echo get_arguments("I", "Love", "PHP"); // I Love PHP







// function multiply()
// {
//   $result = 1;
//   foreach (func_get_args() as $number) {
//     if (gettype($number) == "string")    continue;

//     $result *= (int)$number;
//   }
//   return   $result . "<br>";
// }

// Write Function Content Here

// Needed Output
// echo multiply(10, 20); // 200
// echo multiply("A", 10, 30); // 300
// echo multiply(100.5, 10, "B"); // 1000

// function check_status($a, $b, $c)
// {

//   $isAvailable = true;
//   if (gettype($a) == "string") $name = $a;
//   if (gettype($b) == "string") $name = $b;
//   if (gettype($c) == "string") $name = $c;

//   if (gettype($a) == "integer") $age = $a;
//   if (gettype($b) == "integer") $age = $b;
//   if (gettype($c) == "integer") $age = $c;

//   if (gettype($a) == "boolean") $isAvailable = $a;
//   if (gettype($b) == "boolean") $isAvailable = $b;
//   if (gettype($c) == "boolean") $isAvailable = $c;

//   if ($isAvailable == true) $isAvailable = "You Are Available";
//   elseif ($isAvailable == false) {
//     $isAvailable = " You Are Not Available";
//   }
//   return  "Hello $name, Your Age Is $age,  $isAvailable For Hire <br><br>";
// }

// Needed Output
// echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
// echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
// echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
// echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"



// function calculate($a, $b, $op = "none")
// {

//   if (
//     gettype($a) == "integer"
//     &&
//     gettype($b) == "integer"
//     &&
//     gettype($op) == "string"
//   ) {
//     if ($op == "none" || $op == "a") {
//       return $a + $b;
//     } elseif ($op == "s" || $op == "subtract") {
//       return $a - $b;
//     } elseif ($op == "multiply" || $op == "m") {
//       return $a * $b;
//     }
//   };
// }
// function calculate($a = 0, $b = 0, $op = "none")
// {
//   $args = func_get_args();
//   $num1 = isset($args[0]) ? $args[0]  : null;
//   $num2 = isset($args[1]) ? $args[1] : null;
//   $operator = isset($args[2]) ? $args[2] : "none";

//   if ($operator == "none" ||  $operator == "a") {
//     $a = $num1;
//     $b = $num2;
//     $op = $operator;
//     return $num1 + $num2;
//   } elseif ($operator == "s" || $operator == "subtract") {
//     return $num1 - $num2;
//   } elseif ($operator == "multiply" || $operator == "m") {
//     return $num1 * $num2;
//   }
// }

// Needed Output
// echo calculate(10, 20, "multiply"); // 30
// echo calculate(10, 20, "a"); // 30
// echo calculate(10, 20, "s"); // -10
// echo calculate(10, 20, "subtract"); // -10
// echo calculate(10, 20, "multiply"); // 200
// echo calculate(10, 20, "m"); // 200


// same exercise using switch 
// ...$a when using ... it return array so u need to use foreach or loop , to make the condition u want for each value 

// function calculate(...$nums)
// {
  // echo "number of arguments : " . func_num_args() . "<br>";
  // echo "argument Index number 3 is : " . func_get_arg(3) . "<br>";
  // echo "<pre>";
  // print_r(func_get_args());
  // echo "</pre>";
  // $result = 0;
  // foreach (func_get_args() as $args) {
  //   $result += $args;
  // }
  // return $result;

  // instead of using func_get_args to get the array of value
  // print_r(func_get_args());

  // lets use spread

//   echo "<pre>";
//   print_r($nums);
//   echo "</pre>";

//   $result = 0;
//   foreach ($nums as $num) {

//     $result += $num;
//   }
//   echo "argument Index number 3 is : " . $nums[3] . "<br>";

//   return $result;
// }
// echo calculate(1, 99, 4, 40);


// ////// Function Training And Unpacking Arguments
