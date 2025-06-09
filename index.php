<?php



///////////// - Anonymous Function

// $say_hello = function () {
//   return "Hello";
// };

// echo $say_hello();
// echo "<br><br><br>";

// Anonymous Function with parameter

// $say_hola = function ($someone) {
//   return "HOLA $someone";
// };
// echo $say_hola("amine");
// echo "<br><br><br>";

// to use something outside the scope , whe use use(the variable outside scope)
// $msg = "hi";
// $say_hi = function ($someone) use ($msg) {
//   return "$msg $someone";
// };
// echo $say_hi("amine");
echo "<br><br><br>";


$nums = [10, 20, 30, 40, 50];

function add_five($item)
{
  return $item + 5;
}
$nums_After_adding_five = array_map(("add_five"), $nums);
echo "<pre>";
print_r($nums_After_adding);
echo "</pre>";

echo "<br><br><br>";


$nums_After_adding_ten = array_map(("add_five"), $nums);
echo "<pre>";
print_r($nums_After_adding_ten);
echo "</pre>";
