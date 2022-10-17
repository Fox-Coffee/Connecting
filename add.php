<?php
    require 'inc/load.php';
    require 'inc/config.php';
    $pol = new Connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_BASENAME);
    $query = $pol->sql->prepare("INSERT INTO tabela(Imie, Nazwisko, Data_Urodzenia, Plec, Miasto_Zamieszkania) VALUES(?, ?, ?, ?, ?)");
    if(empty($_POST['name']) or empty($_POST['last']) or empty($_POST['date']) or empty($_POST['gender']) or empty($_POST['city'])){
        echo"<script>alert('Nie podano danych!');
        window.location.href = 'index.php';
        </script>";
    }
    else{
        $query->execute([$_POST['name'], $_POST['last'],$_POST['date'], $_POST['gender'], $_POST['city'],]);
        header("Location: index.php");
    }