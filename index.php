<?php $username = "Amine" ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    "<meta charset=UTF-8>";
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | <?php echo $username ?>
    </title>
</head>

<body>
    <div>
        welcom <?php echo $username ?></div>
    <div><?php echo $username ?> you scored 1 points</div>
    <?php include("./score.php") ?>
</body>

</html>