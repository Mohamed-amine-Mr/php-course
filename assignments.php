<?php
$admins = ["Osama", "Ahmed", "Sayed"];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if ($_POST["user"] == "Osama") {
    echo  "This Username $admins[0] Is Admin";
  } elseif ($_POST["user"] == "Ahmed") {
    echo  "This Username $admins[1] Is Admin";
  } elseif ($_POST["user"] == "Sayed") {
    echo  "This Username $admins[2] Is Admin";
  } else echo "The Request Method Is Post And Username Is {$_POST["user"]}";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
  </form>
</body>

</html>