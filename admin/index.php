<?php
require_once '../php/db.php';
if ($_COOKIE['rights'] == 'qw46er4qwe6r4qwqw64qwreqhghk'): ?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/css/admin.css">
		<title>Список Постов</title>
	</head>
	<body>
		<section>
			<!-- <ul>
				<?php $moderation_boxes = $db->query("SELECT * FROM `posts` ORDER BY `moderated`,`id`");
				foreach ($moderation_boxes as $post): ?>
				<li>
					<div class="list__item">
						<p><?=$post['title']?></p>
						<p>id - <?=$post['id']?></p>
						<p>Дата: <?=$post['date']?></p>
						<?php if($post['moderated']  == "0"): ?>
						<p style="color: green;">New</p>
						<?php else: ?>
						<p style="color: red;">Old</p>
						<?php endif ?>
						<a href="edit.php/<?=$post['id']?>">Редактировать</a>
					</div>
				</li>
				<?php endforeach; ?>
			</ul> -->
			<table width="100%" border="2">
				<caption>Список Постов</caption>
				<tr>
					<th>Тайтл</th>
					<th>ID</th>
					<th>Дата</th>
					<th>Новый/Старый</th>
					<th>Редактирование</th>
				</tr>
				<?php $moderation_boxes = $db->query("SELECT * FROM `posts` ORDER BY `moderated`,`id` DESC");
				foreach ($moderation_boxes as $post): ?>
				<tr>
					<th><?=$post['title']?></th>
					<th><?=$post['id']?></th>
					<th><?=$post['date']?></th>
					<?php if($post['moderated']  == "0"): ?>
					<th style="color: green;">New</th>
					<?php else: ?>
					<th style="color: red;">Old</th>
					<?php endif ?>
					<th><a href="edit.php/<?=$post['id']?>">Изменить</a></th>
				</tr>
				<?php endforeach; ?>
			</table>
		</section>
		<a href="/?page=1">Наглавную</a>
	</body>
</html>
<?php else: header('Location: /?page=1');
endif;?>