<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>zadanie 2</h2>
    <form action="zad1.php" method="POST">
        podaj a <input type="number" step=any name="a" required>
        podaj b <input type="number" step=any name="b" required>
        podaj c <input type="number" step=any name="c" required>
        podaj d <input type="number" step=any name="d" required>
        <input type="submit" value="SEND">
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['a']) && $_POST['a'] != "" && 
        isset($_POST['b']) && $_POST['b'] != "" &&
        isset($_POST['c']) && $_POST['c'] != "" &&
        isset($_POST['d']) && $_POST['d'] != "") {
            $srednia = ($_POST['a'] + $_POST['b'] + $_POST['c'] + $_POST['d'])/4;
            echo "srednia $srednia";
        }
    }

    ?>
</body>
</html>