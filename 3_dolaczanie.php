<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Początek strony</h4>

    <?php
        //require, require_once, include, include_once
        include "./scripts/list.php";
        include_once "./scripts/list.php";

        echo"<br>Require<br>";
        require "./scripts/list.php";
        require_once "./scripts/list.php"; // _once sprawdza czy dane zostaly juz dodane
        @require "./scripts/list11111.php";
    ?>

    <h4>Koniec strony</h4>
</body>
</html>