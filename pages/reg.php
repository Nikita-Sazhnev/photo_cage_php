<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Регистрция</title>
        <link rel="stylesheet" href="/css/login_style.css">
    </head>
    <body>
        <form id="login" class="reg" action="/php/check_reg.php" method="POST">
            <h2>Регистрация</h2>
            <fieldset id="inputs">
                <input name="login" id="username" placeholder="Логин" autofocus="" required="" type="text">
                <input name="name" id="username" placeholder="Имя" autofocus="" required="" type="text">
                <input name="password" id="password" placeholder="Пароль" required="" type="password">
                <input name="password2" id="password" placeholder="Ещё раз пароль" required="" type="password">
                <input name="email" id="email" placeholder="Ваш емайл" required="" type="email">
            </fieldset>
            <fieldset id="actions">
                <input class="reg__btn" id="submit" value="Регистрация" type="submit" name="succses">
            </fieldset>
        </form>
        <a href="/?page=1">На Главную</a>
        <a href="/pages/login.php">Назад</a>
    </body>
</html>