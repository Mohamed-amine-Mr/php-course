<!--If, Elseif, Else - Alternate Syntax -->


<!-- if i have page i want to display it by condition -->
<!-- lets use  : and endif , bach code more readble -->

<?php if (10 > 11) : ?>

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

    </html>

<?php elseif (10 > 9): echo "second condition mesage"; ?>

<?php else : ?>
    <!DOCTYPE html>
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
if (10 > 10) :
    echo "first";
elseif (10 > 51):
    echo "second";
else : echo "last";
endif;
?>