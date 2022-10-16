<?php

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

            $pol = new mysqli(db_server, db_username, db_password, db_basename);
            if ($pol->connect_error) {
                header('Location: error.html');
            }
        ?>
    </table>
</body>
</html>
<?php

    $pol->close();

?>