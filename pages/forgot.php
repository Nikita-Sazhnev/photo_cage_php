<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Восстановление пароля</title>
        <link rel="stylesheet" href="/css/login_style.css">
    </head>
    <body>
        <form id="login" class="forgot" action="/php/forgot_check.php" method="POST">
            <h2>Ваш емаил</h2>
            <fieldset id="inputs">
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