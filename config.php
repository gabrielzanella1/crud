<?php

$db_name = 'cadastro';
$db_host = 'localhost:3306';
$db_user = 'root';


$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user);

