<?php

// try {
//     $username = "root";
//     $password = '';
//     $dsn = 'mysql:host=localhost;dbname=chalets;port=3306;charset=utf8';
//     $db = new PDO($dsn, $username, $password);
//     } catch (PDOException $e) {
//     echo 'Erreur : ' . $e->getMessage();
//     }
$pdo = new PDO('mysql:host=localhost;dbname=chalets', 'root', '');
?>
