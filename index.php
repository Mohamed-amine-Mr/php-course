<?php

/*
    Control Structure
    - If, Elseif, Else <= Basics

    Syntax
    if (Condition) {
      // If Condition Is True <= Run Me
    } else {
      // If Condition Is False <= Run Me
    }
  */
$page = "About";
if ($page == "About") {
  // echo "This Is The Page";
}
echo "<br>";
$title = "";
if ($title == "") {
  // echo "Unknown Page";
} else {
  // echo $title;
}

$lang = "Spanish";

if ($lang == "Arabic") {
  echo " سلام";
} elseif ($lang == "English") {
  echo " Hello user";
} elseif ($lang == "Spanish") {

  echo "Hola Amigo";
} else echo "Uknown language";
