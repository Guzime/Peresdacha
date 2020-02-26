<?php
include_once("simple_html_dom.php");
$links=['index.php',
    'tours.php',
    'countries.php'];//Создаем массив ссылок
$tag=['p',
    'span'];//Создаем массив тегов
$find=0;//Флаг, если 0, то ничего не нашлось
foreach($links as $i)//Проходимся по ссылкам
{
    $html = new simple_html_dom();//создаем объект
    $html->load_file($i);
    foreach ($tag as $k)//Проходимся по тегам
    {
        $element = $html->find($k);
        foreach ($element as $j)//Проходимся по элементам найденным  этом теге
        {
            $needle = $_POST['search'];
            $pos = strripos($j, $needle);//Функция проверяет вхождение переменной в строку
            if (!empty($pos))//Если в контенте нашлось это слово - то выводим его
            {
                $find=1;
                echo "
                                <tr>
                                    <th>$i</th>
                                    <th>$k</th>
                                    <th>$j</th>
                                </tr>";
            }
        }
    }
}
if($find==0)//Если ни разу не нашло, выводим это
{
    echo "
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>НИЧЕГО НЕ НАШЛОСЬ</th>
                                </tr>";
}
?>
