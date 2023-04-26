<?php
    $host = 'localhost';
    $username = 'root';
    $password = 'ABJG2ygLrVd_o@yp';
    $database = 'fenessalem';
    try{
        $con = new PDO("mysql:host=$host;dbname=$database",$username,$password);
    }
    catch(PDOException $e){
            echo 'Erreur de connexion !' . "<br/>";
            die();
    }
?>