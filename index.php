<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if ($_POST["lang"] == "ar") {
    header(header: "Location:ar.php");
    exit();
  } elseif ($_POST["lang"] == "en") {
    header(header: "Location:en.php");
    exit();
  } elseif ($_POST["lang"] == "es") {
    header(header: "Location:sp.php");
    exit();
  }
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
    <input type="text" name="username">
    <select name="lang">
      <option value="ar">Arabic</option>
      <option value="en">English</option>
      <option value="es">Spanish</option>
    </select>
    <input type="submit" value="Go">
  </form>
</body>

</html>