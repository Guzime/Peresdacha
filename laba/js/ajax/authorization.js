function authorization()//Аякс запрос на авторизацию
{
    let login = $('[name = "login"]').val();//Забираем данные из формы
    let password = $('[name = "password"]').val();
    $.ajax({//Отправляем их
        type: "POST",//Тип отправки POST
        url: "authorization/authorization.php",
        data: 'login=' + login + '&' + 'password=' + password,
        success: function (msg)//при успешном ответе
        {
            if (msg == "ok") {
                document.location.href = "journal.php";//Ссылка на секретную страницу, если все ок
            } else {
                $('#alert').css('display', 'block');//Если пароль не подошел, то выводим блок с ошибкой
                $('#alert').html(msg);//Внутрь тэга записывается сообщение
            }
        }
    });
}