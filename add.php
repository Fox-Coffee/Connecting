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