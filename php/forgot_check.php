<?php 
require_once 'db.php';
$email = $_POST['email'];

$user = $db->query("SELECT * FROM `users` WHERE `email` = '$email'");

if ($user->rowcount() == 0) {
	echo "Не существует пользователя с таким email <br />";
	echo "<a href=\"/pages/forgot.php\">Попробовать снова</a>";
	exit();
} 

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
$newPass = substr(str_shuffle($permitted_chars), 0, 10);
mail($email, 'Новый пароль', $newPass);

$newPass = password_hash($newPass, PASSWORD_DEFAULT);


$updatePass = $db->query("UPDATE `users` SET `password` = '$newPass' WHERE `users`.`email` = '$email'");

?>
<br>
<p>Новый пароль был выслан вам на почту</p><br>
<a href="/?page=1">На главную</a>