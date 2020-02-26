<?php
if(empty($_SESSION['id']))//Если ссесия не открыта, то совершается переход
{
    header("Location: /laba/index.php");
}