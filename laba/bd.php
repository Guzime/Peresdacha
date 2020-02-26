<?php //Подключение к БазеДанных
$driver = 'mysql';
$host = 'localhost';
$db_name = 'mybase';
$user = 'tolmach';
$password = 'sq5fkibt';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
try {
    $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $user, $password, $options);
}
catch (PDOException $e) {
    die("не могу");
}

