
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"
</head>
<body>
<?php require_once ("header.php");?>
    <div class="container mt-4">
        <h1 class="h1-3">Результаты поиска</h1>
        <table class="table">
            <thead>
            <tr>
                <th width="15%">Страница</th>
                <th width="10%">Тег</th>
                <th>Фрагмент</th>
            </tr>
            </thead>
            <tbody>
            <!-- Подключаем модуль парсинга--!>
            <?php require_once("parser/read_search.php")?>
            </tbody>
        </table>

    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
