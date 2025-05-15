<!--If, Elseif, Else - Alternate Syntax -->


<!-- if i have page i want to display it by condition -->
<!-- lets use  : and endif , bach code more readble -->

<?php if (10 > 11) : ?>
  <!-- 
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <p>display content page</p>
  </body>

  </html> -->

<?php elseif (10 > 9): echo "second condition mesage"; ?>

  <!-- <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>default page</title>
  </head>

  <body>
    <p>display default content page (else condition is valid)</p>
  </body>

  </html>

<?php endif; ?>



<?php
// if (10 > 10) :
//   echo "first";
// elseif (10 > 51):
//   echo "second";
// else : echo "last";
// endif;

// function greeting($name, $gender = "")
// {
//     if ($gender === "male") {
//         return "Hello Mr $name <br>";
//     } elseif ($gender === "female") {
//         return "Hello Miss $name <br>";
//     } elseif ($gender === "") {
//         return "Hello  $name";
//     }
// }
// // Needed Output
// echo greeting("Osama", "male"); // Hello Mr Osama
// echo greeting("Eman", "female"); // Hello Miss Eman
// echo greeting("Sameh"); // Hello Sameh



// function optional return & Null , eld after return

// function greeting($name, $gender = "")
// {
//     if ($gender === "male") {
//         echo "Hello Mr $name <br>";
//     } elseif ($gender === "female") {
//         echo "Hello Miss $name <br>";
//     } elseif ($gender === "") {
//         echo "Hello  $name";
//     }
// }
// Needed Output
// echo greeting("Osama", "Male"); // Hello Mr Osama
// echo greeting("Eman", "Female"); // Hello Miss Eman
// echo greeting("Sameh"); // Hello Sameh



// $prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];
// function getNum($one, $two)
// {
//     return $one + $two;
// }

// $prize_number = getNum(2, 1);
// var_dump($prize_number);Null
// Store the function result in a variable  // We use echo to print, so return is better // She didn’t wait for us,  // That’s why return gives control over when to print
// echo $prizes[getNum(2, 1)];


// lets use return

// $prize_number = getNum(2, 1);
// var_dump($prize_number);
// echo $prizes[getNum(1, 1)];


/*
    Function
    - Default Parameter Value
    --- Using
    --- Test Data
    --- Skip Arguments
  */

// function get_data(
//     $country = "private country",
//     $name = "private name",
//     $age = "private age",
//     $address = "Private address"
// ) {

//     $line_one = "Your Country Is $country <br><br> And Your Name Is $name <br><br>";
//     $line_two = "Your Age Is $age <br><br> And You Live In $address";
//     return $line_one . $line_two;
// }
// echo get_data(age: 22);


////////////////////
/*
    Function
    - Variable Arguments List
    --- func_num_args() // num of arg u did pass
    --- func_get_arg(index)
    --- func_get_args() // return array of arguments so use print_r to print it , u can loof over it normally with foreach

    Spread Syntax In JS
  */

function calculate()
{
  // echo "number of Arguments : " . func_num_args() . "<br>";
  // echo "Arguments before 3 : " . func_get_arg(3) . "<br>";
  print_r(func_get_args());
  //lets add the items to each other
  $result = 0;
  // lets use it as arg in foreach because as we know , func_get_args()return an array 
  foreach (func_get_args() as $arg):
    $result += $arg;
  endforeach;
  echo "result is " . $result;
}
echo calculate(10, 20, 30, 40);
