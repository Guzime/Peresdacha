<?php
include $_SERVER['DOCUMENT_ROOT']."/laba/bd.php";//подключение к базе
if ($_SERVER['REQUEST_METHOD'] == 'POST')//Проверка на post
{
    $login=trim($_POST['login']);//trim удаляет пробелы
    $password=trim($_POST['password']);
    $result=$pdo->prepare('SELECT * FROM `users` WHERE login=:login');//Узнаем если логин введенный пользователем
    $result->execute(array('login' => $login));
    $row=$result->fetch(PDO::FETCH_ASSOC);//возвращает ассоцитивный массив
    if(!empty($row))//Проверяем на наличие такого логина в базе данных
    {
        if($password==$row['password'])//Проверяем пароль, если все ок, то стартуем ссесию
        {
            echo "ok";
            session_start();
            $_SESSION['id']=$row['id'];
        }
        else
        {
            echo "Неправильный пароль";
        }

    }
    else
    {
        echo "Такого логина не существует";
    }


}
else
{
    echo "Авторизуйтесь нормально";
}

