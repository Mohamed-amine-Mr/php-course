<?php

/////////////////////// Switch Statement Exercise ///////////////////////
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

/////////////////////// Arithmetic Operations with Switch ///////////////////////
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

/////////////////////// Day Opening Hours Conditionals ///////////////////////
// $day = "Wed";

// if ($day == "Sat" || $day == "Sun" || $day == "Mon") {
//   echo "We Are Open All The Day";
// } elseif ($day == "Tue" || $day == "Wed") {
//   echo "We Are Open From 08:12";
// } elseif ($day == "Thu" || $day == "Fri") {
//   echo "We Are Closed";
// } else  echo "Unknown Day";

/////////////////////// Switch with Multiple Conditions ///////////////////////
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

/////////////////////// Countdown For Loop ///////////////////////
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

/////////////////////// Even Numbers For Loop ///////////////////////
// $index = 0;

// for ($i = $idex; $i <= 20; $i += 2) {
//   echo "<br> $i";
// }
// Needed Output
// 2
// 4 ...

/////////////////////// Even Numbers While Loop ///////////////////////
// $i = $idex;
// while ($i <= 20) {
//   echo "<br> $i";;
//   $i += 2;
// }

/////////////////////// Even Numbers Do While Loop ///////////////////////
// $i = $idex;
// do {
//   echo "<br> $i";
//   $i += 2;
// } while ($i <= 20);

/////////////////////// Custom Sequence While Loop ///////////////////////
// $num = 2;

// while ($num < 520) {

//   echo "<br> $num";
// }

// Needed Output
// 1 => 1 + 0
// 4 => 1 + 3
// 10=> 4 + 6
// 22 . ..  

/////////////////////// Countdown with Leading Zeros ///////////////////////
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

/////////////////////// Filtered Array Output ///////////////////////
// $start = 0;
// $mix = [1, 2, 3, "A", "B", "C", 4];

// // Output
// 2
// 3
// 4

/////////////////////// Filtered Array Output with For Loop ///////////////////////
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

/////////////////////// Countries Array Foreach ///////////////////////
// $countries = ["EG", "SA", "QA", "SY", "USA", "GER"];
// foreach ($countries as $country) {
//   if ($country == "USA") continue;
//   echo "<br> $country";
// }

/////////////////////// Mixed Array Foreach ///////////////////////
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

/////////////////////// Even Numbers Division ///////////////////////
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

/////////////////////// Names Array For Loop ///////////////////////
// $help_num = 3;
// $nums = [4, 5, 6, 1, 2, 3];
// $names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

// for ($i = $help_num; $i <= 10; $i++) {
//   echo $names[$i] . " <br>";
// }

// Output
// "Sayed"
// "Osama"

/////////////////////// Money Associative Array ///////////////////////
// $money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
// foreach ($money as $key => $value) {
//   echo "The Name Is $key And I Need $value Pound From Him <br><br>";
// }
// Output
// "The Name Is Ahmed And I Need 100 Pound From Him"
// "The Name Is Sayed And I Need 150 Pound From Him"
// "The Name Is Osama And I Need 100 Pound From Him"
// "The Name Is Maher And I Need 250 Pound From Him"

/////////////////////// For Loop with Range ///////////////////////
// $start = 0;
// $mix = [1, 2, 3, "A", "B", "C", 4];

// for ($i = 2; $i <= 4; $i++) {
//   echo $i . "<br>";
// }
// Output
// 2
// 3
// 4

/////////////////////// Names Array For Loop with Math ///////////////////////
// $help_num = 3;
// $nums = [4, 5, 6, 1, 2, 3];
// $names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];


// for ($i = $help_num / $help_num; $i <= $help_num - ($help_num / 3); $i++) {
//   echo $names[$i] . "<br>";
// }
// Output
// "Sayed"
// "Osama"

/////////////////////// Sum All Function ///////////////////////
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

/////////////////////// Get Arguments Function ///////////////////////
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

/////////////////////// Multiply Function ///////////////////////
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

/////////////////////// Check Status Function ///////////////////////
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

/////////////////////// Calculate Function ///////////////////////
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

/////////////////////// Calculate Function with Switch ///////////////////////
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
// you can't add splat at first , because it will take all arguments , best way to add it in the end 
// function get_data(
//   $name,
//   $country = "Private",
//   ...$skills
// ) {
//   echo "Hello $name your Country is $country  <br>";
//   // lets loop over the splat , as we know it return array
//   foreach ($skills as $index  => $skill) {
//     echo "skill number " . $index + 1 . " is : 
//     -- $skill <br>";
//   }
// }
// get_data("med", "morroco", "HTML", "CSS", "JS");

// function get_data(
//   $name,                    // Required parameter for the name
//   $country = "Private",     // Optional parameter with a default value
//   ...$skills                // Variadic parameter: gathers any additional arguments into an array
// ) {
// Predefined array of skills
// $group_of_skills = ["HTML", "CSS", "JS"];

// Uncomment the lines below to debug the collected skills
// echo "<pre>";
// print_r($skills);
// echo "<br>Hello $name, your Country is $country <br>";

// Loop through the predefined skills array and print each skill with its number
//   foreach ($group_of_skills as $i => $skill) {
//     echo "Skill number " . ($i + 1) . " is: $skill <br>";
//   }
// }

// Call the function with a name, a country, and an unpacked array of skills
// get_data(
//   "mohamed",           // First argument: name
//   "morocco",           // Second argument: country
//   ...["HTML", "CSS", "JS"] // Unpacking the array into individual arguments using the splat operator
// );

/**
 * 🔍 Explanation of the Splat Operator (...)
 *
 * In the function definition: `...$skills` packs all extra arguments into an array.
 * In the function call: `...$array` unpacks an array into individual arguments.
 *
 * So instead of:
 *    get_data("mohamed", "morocco", "HTML", "CSS", "JS");
 * You can write:
 *    $group_of_skills = ["HTML", "CSS", "JS"];
 *    get_data("mohamed", "morocco", ...$group_of_skills);
 * 
 * This makes the code more dynamic and reusable.
 */

/////////////////////// Variable Function and function_exists ///////////////////////
/*
    Function
    - Variable Function
    --- PHP Allow To Use Variable Like Function
    --- When You Append Parentheses () To Variable PHP Will Look For Function With That Name
    - Function Exists
    --- function_exists("Func Name")
  */
// function one()
// {
//   return "One From Function";
// }

// echo one();

// $func1 = "one";

// echo $func1(); // this same as echo one();

// function say_hello_to($someone)
// {
//   return "Hello $someone";
// }
// $func2 = "say_hello_to";

// echo $func2("amine");
// echo "<br>";

// if (function_exists("testing")) {
//   echo testing();
// } else {
//   echo "Function not found";
// }
// echo "<br>";

// echo strlen("Amine");//5

// $strLength = "strlen";
// echo $strLength("med");//3

///////////// ////
/*
    Function
    - Passing Arguments by Reference
    --- By Default, Function Arguments Are Passed By Value
    --- If The Value Of The Argument Inside The Function Changed It Will Not Change Outside
    --- To Change It Outside Pass The Argument By Reference

    - Return Type Declarations

    Search
    - PHP Strict Mode
  */
// function add_five($number)
// {
//   $number += 5;
//   return $number;
// }
// $n = 15;

// echo add_five($n) . "<br>"; //20

// echo $n;//15
// why 15 not 20 ? because : By Default, Function Arguments Are Passed By Value

// to change it outside pass argument by reference : 

// function add_five(&$numTwo)
// {
//   return  $numTwo += 5;
//   // $num = $num + 5 this will change the $num even outside the function because when we use (&arg) it change it everywhere not lik normal 
// }
// $num = 5;

// echo add_five($num) . "<br>";

// echo $num; // 5 before adding & behind (Arg)
// after adding  & before the argument in the function
// echo $num;// 10 

// echo '<pre>';
// print_r(["A", "B", 100 => "C",  "D", "E", 3 => "F", "h", "I", 200 => "G", "K", 105 => "L", "M", "N", 106 => "K", "Y", "Z"]); //DUMA katkemel ela biggest last value , as we know array by default start from zero , ila 3tina l index 3 , 100 f index dyalo , l value li men baad , 100 atkon 101 , 102 ... , even ila bghuty trje3ha l smaller value , 3tinni matalan 5=>"x", bghuty tkhroj mn 100ers liderty u can't , radi tchof 5 liderty liha add bohdha , after it aykml fin wsal f hundreds
// // print_r([
// //   0 => "Ahmed",
// //   1 => "Bochaib",
// //   "mahmoud",
// //   false => "sayed", // false = 0 , so key 0 will overide the value from Ahmed to ANA sayed
// //   10 => "Amura",
// //   "gharub", #11 kaykemel mn last index
// //   8 => "med", // madaroch lfo9 9bel 10 ya3ni madarch sorting 
// //   "medo", //12,
// //   "names" => [
// //     "osama",
// //     "karim"
// //     => ["1", "2"]
// //   ]

// // ]);
// echo '</pre>';


// // Write Function Content Here
// function multiply(...$a)
// //  masach i its just a value katbeda mn 0 oktb9a tzad , its not not value inside the array 
// {
//   $result = 1;
//   for ($i = 0; $i < count($a); $i++) {
//     if (is_numeric($a[$i])) {
//       // return $result =  $a[$i] * $a[$i + 1]; but this same as using two arg in function , if there third arg will not multiply 
//       $result *= $a[$i];
//     } elseif ((gettype($a[$i])) <> "integer") $result;
//   }
//   return $result;
// }
// Needed Output
// echo multiply(10, 20); // 200
// echo multiply("A", 10, 30); // 300
// echo multiply(100.5, 10, "B"); // 1000

///////////// ////


// function multiply(...$nums)
// {
//   $result = 1;
//   foreach ($nums as $num) {
//     if (gettype($num) == "string") continue;
//     if (is_float($num)) ((int)$num);

//     $result *= (int)$num;
//   }
//   return $result;
// }
// Write Function Content Here

// Needed Output
// echo multiply(10, 20); // 200
// echo multiply("A", 10, 30); // 300
// echo multiply(100.5, 10, "B"); // 1000
// Write Function Content Here


function sum_all(...$args)
{
  $results = 0;
  foreach ($args as $arg) {
    if ($arg == 5) {
      continue;
    } elseif ($arg == 10) {
      $arg = 20;
    }
    $results += $arg;
  }
  return $results;
}
// Write Function Content Here

// Needed Output
// echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40