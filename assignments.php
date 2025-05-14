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


$countries = ["EG", "SA", "QA", "SY", "USA", "GER"];
foreach ($countries as $country) {
  if ($country == "USA") continue;
  echo "<br> $country";
}
