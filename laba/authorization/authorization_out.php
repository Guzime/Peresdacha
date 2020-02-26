<?php
session_start();//Удаляем ссесию
unset($_SESSION['id']);
header("Location: /laba/index.php");