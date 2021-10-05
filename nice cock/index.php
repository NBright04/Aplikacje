<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['imie']) && $_POST['imie'] != "") {
        $imie = $_POST['imie'];
        echo "<h1>Witaj $imie</h1>";
    } else {
        echo '
        <h2>zadanie 2</h2>
        <form action="index.php" method="POST">
            Podaj imie: <input type="text" name="imie">
            <input type="submit" value="SEND">
        </form>'; 
    }

    ?>
</body>
</html>