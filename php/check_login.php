<?php 
if (isset($_POST['succses'])) {
	require_once 'db.php';
	$login = $_POST['login'];
	$password = $_POST['password'];

	$checkUser = $db->query("SELECT * FROM `users` WHERE `login` = '$login' LIMIT 1");
		// echo $checkUser->rowCount();
		if ($checkUser->rowCount() == 0) {
			echo "Пользователя с таким логином не сущевствует!";
			exit();
		}

		foreach ($checkUser as $user)
		
		$hash = $user['password'];

		if (password_verify($password, $hash)) {
   			 setcookie('user', $user['login'], time() + 3600 * 24, "/");
   			 $user['admin'] == 1 ? $rights = 'qw46er4qwe6r4qwqw64qwreqhghk' : $rights = 0;
   			 setcookie('rights', $rights, time() + 3600 * 24, "/");
   			 header('Location: /');
 
		} else {
		    echo 'Пароль неправильный.';
		}


}