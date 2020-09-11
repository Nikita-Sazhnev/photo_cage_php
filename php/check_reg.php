<?php
if (isset($_POST['succses'])) {
	require_once 'db.php';
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];


	$isUserExist = $db->query("SELECT * FROM `users` WHERE `login` = '$login' OR `email` = '$email'");
 		
 		if ( $isUserExist->rowCount() > 0) {
			echo "Пользователь с логином $login или c email: $email уже существует.";
				exit();
		} 	elseif (mb_strlen($login) < 5 || mb_strlen($login) > 50 ) {
		 	echo "Недопустимая длиня логина";
			 	exit();
		 } elseif (mb_strlen($password) < 6) {
	 		echo "Пароль должен быть более 6 символов";
			 	exit();
		 } elseif ( $password != $password2 ) {
		 	echo "Пароли не совпадают";
			 	exit();
			 }
	$hash = password_hash($password, PASSWORD_DEFAULT);

	
    $statement = $db->prepare("INSERT INTO `users` (`email`, `login`, `name`, `password`) VALUES (?,?,?,?)");
    $statement->execute(array($email, $login, $name, $hash));
} else { 
	header('Location: /?page=1');
}
	header('Location: /pages/login.php');

?>