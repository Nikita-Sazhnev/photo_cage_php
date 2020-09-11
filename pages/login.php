<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Логин</title>
	<link rel="stylesheet" href="/css/login_style.css">
</head>
<body>
	<form id="login" action="/php/check_login.php" method="POST">
    <h1>Вход</h1>
    <fieldset id="inputs">
        <input name="login" id="username" placeholder="Логин" autofocus="" required="" type="text">   
        <input name="password" id="password" placeholder="Пароль" required="" type="password">
    </fieldset>
    <fieldset id="actions">
        <input id="submit" value="Войти" type="submit" name="succses">
        <a href="/pages/forgot.php">Забыли пароль?</a><a href="/pages/reg.php">Регистрация</a>
    </fieldset>
</form>
<a href="/?page=1">На Главную</a>
</body>
</html>