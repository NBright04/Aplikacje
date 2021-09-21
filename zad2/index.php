<?php

if(isset($_POST['a']) && isset($_POST['b'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    echo $a * $b;
    echo "<br>";
    echo 2 * $a + 2 * $b;
} else {
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <input type="number" name="a">
            <input type="number" name="b">
            <button type="submit">SUBMIT</button>
        </form>
    </body>
    </html>';
}