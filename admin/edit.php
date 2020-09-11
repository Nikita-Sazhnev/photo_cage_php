<?php

require_once '../php/db.php';

if ($_COOKIE['rights'] == 'qw46er4qwe6r4qwqw64qwreqhghk'): ?>
<?php
	$editId = $_SERVER['REQUEST_URI'];
	$editId = explode('/', $editId);

	$id = $editId[3];
	$_POST['image'] == '' ? $image = $_POST['current-img'] : $image = $_POST['image'];
	if (isset($_POST['save'])){
		$title = $_POST['title'];
		$date = $_POST['date'];
		$url = $_POST['url'];

		isset($_POST['moderation']) ? $moderation = $_POST['moderation'] : $moderation = 0;
	
		$sql = "UPDATE `posts` SET `date`=?, `title`=?, `moderated`=?, `url`=? WHERE id=?";
		$stmt= $db->prepare($sql);
		$stmt->execute([$date, $title, $moderation, $url, $id]);
	} elseif (isset($_POST['delete'])) {
		if (file_exists("../img/full/$image")) {
			unlink("../img/full/$image");
			unlink("../img/thumbnails/$image");
		}
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE FROM `posts` WHERE `posts`.`id` = '$id'";
		$db->exec($sql);
	}
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?=$_COOKIE['user']; ?></title>
		<link rel="stylesheet" href="/css/admin.css">
	</head>
	<body>
		<div class="heading">
			<h1>Редактирование</h1>
		</div>
		<?php $moderation_boxes = $db->query("SELECT * FROM `posts` WHERE `id` = $id ORDER BY `moderated`,`id` DESC");
		if ($moderation_boxes->rowCount() == 0) {
			echo "<h1>Пост Удлалён</h1>";
		}
		?>
		<section class="moderation_boxes">
			<?php foreach ($moderation_boxes as $post): ?>
			<div class="post__box">
				<form action="" class="wrapper" method="post" >
					<div class="image__place">
						<img class="image" src="/img/full/<?=$post['image']; ?>" alt="">
					</div>
					<div class="name">
						<div class="row__name">
							<p>Id</p>
							<input name="id" type="text" value="<?=$post['id'];?>">
						</div>
						<div class="row__name">
							<p>Тайтл</p>
							<input type="text" value="<?=$post['title']; ?>" name="title">
						</div>
						<div class="row__name">
							<p>Дата</p>
							<input type="text" value="<?=$post['date']; ?>" name="date">
						</div>
						<div class="row__name">
							<p>Ссылка</p>
							<input type="text" value="<?=$post['url']; ?>" name="url">
						</div>
						<div class="row__name">
							<p>Показывать на главной</p>
							<?php if($post['moderated']  == "0"): ?>
							<p style="color: green;">NEW</p>
							<input type="checkbox" placeholder="" value="1" name="moderation">
							<?php else: ?>
							<p style="color: red;">Moderated</p>
							<input type="checkbox" placeholder="" value="1" name="moderation" checked="">
							<?php endif ?>
						</div>
						<div class="row__name">
							<p>Cохранить?</p>
							<input type="submit" value="Сохранить" placeholder="" name="save">
						</div>
						<div class="row__name">
							<p>Хотите удалить данную пост?</p>
							<input type="submit" value="Удалить!" placeholder="" name="delete">
						</div>
						
						<input name="current-img" type="hidden" value="<?=$post['image'];?>">
					</div>
				</form>
			</div>
			<?php endforeach; ?>
		</section>
	</section>
	<a href="/?page=1">На Главную</a>
	<a href="/admin">Назад</a>
</body>
</html>
<?php else: header('Location: /?page=1');
endif;?>