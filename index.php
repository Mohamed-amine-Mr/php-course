 <?php



  ///////////// - Anonymous Function
  /*
    Function
    - Anonymous Function
    --- When We Create A Function We Give It A Name So We Can Call It Later With That Name
    --- Sometimes We Need To Create A Function For Specific Task <= This Is Not Against DRY

    - Variable Inherit From Parent Scope
    - Variable Inherit By Reference From Parent Scope
    - Anonymous Function Can Be Passed To A Function
    - Anonymous Function Can Be Return From A Function

  */

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
  // echo $say_hi("amine"); -->
  // echo "<br><br><br>";


  // $nums = [10, 20, 30, 40, 50];

  // function add_five($item)
  // {
  //   return $item + 5;
  // }
  // $nums_After_adding_five = array_map(("add_five"), $nums);
  // echo "<pre>";
  // print_r($nums_After_adding);
  // echo "</pre>";

  // echo "<br><br><br>";

  // we use Anonymous Function to add 10 
  // $nums_After_adding_ten = array_map(function ($item) {
  //   $item + 10;
  // }, $nums);

  // echo "<pre>";
  // print_r($nums_After_adding_ten);
  // echo "</pre>";


  /*
    Function
    - Arrow Function
    --- Short Syntax For Anonymous Function
    --- Automatic Use Variables From Parent Scope

    - Syntax
    --- Function Replaces With fn
    --- No Need For Curly Braces
    --- Return Is Omitted
  */
  //normal function
  // function say_hello_to($someone)
  // {
  //   return "Hello $someone";
  // }

  // echo say_hello_to("Osama");

  echo '<br>#########<br>';

  // // change to arrow function
  // $say_hello_to = fn($someone) => "Hello $someone";

  // echo $say_hello_to("Osama");

  // $say_hola = fn() => "Hola";
  // echo $say_hola();  


  // $say_hola = fn($someone) => "Hola $someone";

  // echo $say_hola("Osama");
  echo "<br>";
  // we don't need to use use lik in the anynomyse function , when we use arrow function we dont need to use use to call the outside variable in the scope 

  $msg = "Hi";

  // $say_hi = function ($someone) use ($msg) {
  //   return "$msg $someone";
  // };
  // echo $say_hi("amine");
  // 

  $say_hi = fn($someone) => "$msg $someone";

  echo $say_hi("taki");
