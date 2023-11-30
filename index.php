<?php

    require './classes/connect.class.php';
    require './config.php';

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
    <header></header>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>City of residence
            </th>
        </tr>
        <?php
            $pol = new Connect(DB_SOFTWARE, DB_SERVER, DB_USER, DB_PASSWORD, DB_BASENAME);
            $query = $pol->sql->query("SELECT * FROM people;");
            $x = 'light';
            while($row = $query->fetch()){
                echo'<tr>';
                switch($x){
                    case 'light':
                        $x='dark';
                        break;
                    case 'dark':
                        $x='light';
                        break;
                }
                foreach($row as $i){
                    echo '<td class="col_'. $x .'">'.$i.'</td>';
                }
                echo'</tr>';
            }
        ?>
            <tr><form action="add.php" method='POST' id='table'>
                <td></td>
                <td><input type="text" name="name" id="name"></td>
                <td><input type="text" name="last" id="last"></td>
                <td><input type="date" name="date" id="date"></td>
                <td> <select name="gender" id="gender">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="N">Other</option>
                </select></td>
                <td><input type="text" name="city" id="city"></td>
                <td><input type="submit" value="Add"></td>
                </form></tr>
    </table>
</body>
</html>