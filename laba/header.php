<!-- header--!>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light hd">
        <a class="navbar-brand wh" href="index.php">Турист.рф</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link wh" href="tours.php">Список туров</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link wh" href="countries.php">Список стран</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link wh" href="journal.php">Журнал регистрации</a>
                </li>
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
            <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 wh au">Search</button>
        </form>
                <?php //Кнопка меняющийся в засимости с сессией
                session_start();
                if(empty($_SESSION['id']))
                {
                    echo '<button class="btn btn-outline-success my-2 my-sm-0 wh au ml-4" type="submit" data-toggle="modal" data-target="#exampleModal" >Вход</button>';
                }
                else
                {
                    echo '<form action="authorization/authorization_out.php" method="post">
                        <button class="btn btn-outline-success my-2 my-sm-0 wh au ml-4">Выход</button>
                        </form>
                        ';
                }
                ?>
        </div>
    </nav>
</header>

<!-- Модальное окно для входа пример есть на сайте boostrap --!>
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content md">
            <h1 class="m-1 h1-3 mt-4">Авторизация</h1>
            <div class="in-1">
                <span class="sp-2"">Логин
                <input type="email" name="login" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="in-1">
                <span class="sp-2"">Пароль
                <input type="password"  name="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="alert alert-danger mt-4 al-1" role="alert" id="alert"></div>
                <button type="button btn-1" class="btn btn-secondary csl-1" data-dismiss="modal">Отмена</button>
                <button type="button btn-1" class="btn btn-primary csl-2" onclick="authorization()">Авторизация</button>
        </div>
    </div>
</div>
</div>