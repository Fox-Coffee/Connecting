<?php

    declare(strict_types=1);
    require 'inc/config.php';
    require 'inc/load.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Data Urodzenia</th>
            <th>Płeć</th>
            <th>Miasto Zamieszkania</th>
        </tr>
        <?php
            $pol = new Connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_BASENAME);
        ?>
    </table>
</body>
</html>