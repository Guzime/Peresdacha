<?php
include $_SERVER['DOCUMENT_ROOT']."/laba/bd.php";
$surname=$_POST['surname'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$tours_name=$_POST['tours_name'];
    $result_surname=preg_match('/[А-Яа-я]{3,}/', $surname);
    $result_name=preg_match('/[А-Яа-я]{3,}/', $name);
    $result_lastname=preg_match('/[А-Яа-я]{3,}/', $lastname);
    $result_tours_name=preg_match('/[А-Яа-я]{3,}/', $tours_name);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($result_surname == 1 && $result_name == 1 && $result_lastname == 1 && $result_tours_name == 1) //Проверка Валидации
            {
                $result = $pdo->prepare("INSERT INTO `journal` (`id`, `surname`, `name`, `lastname`, `tours_name`) VALUES (NULL, :surname, :name, :lastname, :tours_name)");
                $result->execute(array('surname' => $surname, 'name' => $name, 'lastname' => $lastname, 'tours_name' => $tours_name));
            } else {
                header("Location: /laba/journal.php");
            }
        }
header("Location: /laba/journal.php");