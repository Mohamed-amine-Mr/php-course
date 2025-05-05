<?php

/*
    Variable Variable
    Takes The Value Of A Variable And Treats That As The Name Of A Variable
  */
$a = "amine";
$$a = "mohamed";
echo $a;
echo "<br>";
echo  $amine; // because $a = amine , and we use this value as our variable name $$a
