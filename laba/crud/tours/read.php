<!-- Шаблон для таблицы!-->
<div class="container mt-4">
    <table class="table">
        <thead>
        <tr>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Название тура</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $result=$pdo->query("SELECT * FROM `journal`");//Выводим все журналы в таблицу
        while($row=$result->fetch(PDO::FETCH_ASSOC))
        {
            echo '
               <tr>
                    <th>'.$row['surname'].'</th>
                    <th>'.$row['name'].'</th>
                    <th>'.$row['lastname'].'</th>
                    <th>'.$row['tours_name'].'</th>
               </tr>    
            ';
        }
        ?>
        </tbody>
    </table>
</div>
