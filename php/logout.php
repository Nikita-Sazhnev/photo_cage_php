<?php 
	setcookie('rights', $user['admin'], time() - 3600 * 24, "/");
	setcookie('user', $user['name'], time() - 3600 * 24, "/");
	header('Location: /?page=1');
 ?>