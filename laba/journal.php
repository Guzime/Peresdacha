<?php
require_once ("bd.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"
</head>
<body>
<?php require_once ("header.php");
include_once("authorization/authorization_check.php");?>
<!-- Кнопка добавить --!>
<button type="button btn-1" class="btn btn-primary csl-3" data-toggle="modal" data-target="#exampleModal1">Добавить</button>
<!-- Подключаем модуль с выводом в таблицу всех людей с турами--!>
<?php require_once ("crud/tours/read.php");?>
<form method="post" action="crud/tours/create.php">
    <!-- Модальное окно для кнопки добавить--!>
<div class="modal" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content md-c">
            <h1 class="m-1 h1-3">Добавить новый тур</h1>
            <div class="in-1">
                <span class="sp-2"">Фамилия
                <input type="text" required pattern="[А-Яа-я]{3,}" name="surname"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="in-1">
                <span class="sp-2"">Имя
                <input type="text" required pattern="[А-Яа-я]{3,}" name="name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="in-1">
                <span class="sp-2"">Отчество
                <input type="text"  required pattern="[А-Яа-я]{3,}" name="lastname" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="in-1">
                <span class="sp-2"">Имя тура
                <input type="text" required pattern="[А-Яа-я]{3,}" name="tours_name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="modal-footer mt-4">
                <button type="button btn-1" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <button type="button btn-1" class="btn btn-primary">Регистрация</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
