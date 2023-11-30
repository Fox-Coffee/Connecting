<!--
    Connecting - A simple PHP program used to read and write in a database
    Copyright (C) 2023  Filip Kamieniecki

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
-->
<?php
    require './classes/connect.class.php';
    require './config.php';
    $pol = new Connect(DB_SOFTWARE, DB_SERVER, DB_USER, DB_PASSWORD, DB_BASENAME);
    $query = $pol->sql->prepare("INSERT INTO tabela(FirstName, LastName, DateOfBirth, Gender, CityOfResidence) VALUES(?, ?, ?, ?, ?)");
    if(empty($_POST['name']) or empty($_POST['last']) or empty($_POST['date']) or empty($_POST['gender']) or empty($_POST['city'])){
        echo"<script>alert('No data given!');
        window.location.href = 'index.php';
        </script>";
    }
    else{
        $query->execute([$_POST['name'], $_POST['last'],$_POST['date'], $_POST['gender'], $_POST['city'],]);
        header("Location: index.php");
    }