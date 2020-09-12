<?php
require_once 'php/db.php';
isset($_GET['page']) ? $page = $_GET['page'] : header('Location: /?page=1');
$page == 1 ? $offset = 0 : $offset = $page * 20 - 20;
$limit = 20;
$tableName = 'posts';

?>
<?php include 'php/head.php' ?>
<body>
	<?php if($_COOKIE['rights'] == 'qw46er4qwe6r4qwqw64qwreqhghk') 
		echo "<a href=\"admin/\">Админ панель</a>";?>
	<?php include 'php/header.php' ?>
	<main class="warpper">
		<?php include 'php/upload-form.php' ?>
		<div class="main__content">
			<div class="container"
			data-infinite-scroll='{ "path": ".pagination__next", "append": ".post", "history": false }'>
				<?php $posts = getItemsFromDB($tableName, $limit, $offset);?>
				<?php foreach ($posts as $post):?>
				<article class="post">
					<div class="main__image">
						<div class="image__holder">
							<img class="lazy preview__image" data-src="/img/thumbnails/<?=$post['image']; ?>" 
							alt="<?=$post['title']?>">
						</div>
						<a data-fancybox="gallery" href="/img/full/<?=$post['image']; ?>">
							<div class="main__upskale">
								<img src="img/upsakle.png" alt="">
							</div>
						</a>
						<div class="main__item-data">
							<p><?=$post['date']; ?></p>
						</div>
						<div class="main__naming">
							<div class="main__naming-name">
								<a title="<?php if (mb_strlen($post['title']) > 23) echo $post['title']; ?>"
								  href="<?=$post['url']?>"
								  target="_blank"><?=$post['title']; ?>
								</a>
							</div>
							<div class="main__naming-favor">
								<img class="favor_img" id="imgFavor" src="img/favourite.png" alt="">
							</div>
						</div>
						<div class="main__social">
							<div class="social__name">
								<p>
									Share
								</p>
							</div>
							<div class="social__icons">
								<ul>
									<li>
										<a href="https://www.tumblr.com" target="_blank"
											tooltip="share in tumblr" flow="down">
											<img class="tum__social" src="img/tumbler.png" alt="">
										</a>
									</li>
									<li>
										<a href="https://www.facebook.com" target="_blank"
											tooltip="share in facebook" flow="down">
										<img class="fac__social" src="img/Facebook.png" alt=""></a></li>
										<li>
											<a href="https://www.pinterest.com" target="_blank"
												tooltip="share in pintrest" flow="down">
												<img class="pin__social" src="img/pintrest.png" alt="">
											</a>
										</li>
										<li>
											<a href="https://twitter.com/compose/tweet" target="_blank"
												tooltip="share in twitter" flow="down">
												<img class="last__social" src="img/twittor.png" alt="">
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</article>
					<?php endforeach ?>
				</div>
			</div>
			<?php $pagesCount = $db->query("SELECT * FROM $tableName");
				  $pageAmount = ceil($pagesCount->rowCount() / 20);
				  ?>
			<section class="pagination">
				<ul class="page-list">
					<?php if ($page > 1): ?>
						<li><a href="?page=<?php echo $page - 1;?>">&#60;</a></li>
					<?php endif ?>

					<?php for ($i = 1; $i <= $pageAmount; $i++):?>
						<li><a <?php if($page == $i) {echo "style=\"color: red;\"";} ?> href="?page=<?=$i?>"><?=$i?></a></li>
					<?php endfor; ?>

					<?php if ($page < $pageAmount): ?>
						<li><a href="?page=<?php echo $page + 1;?>">&#62;</a></li>
					<?php endif ?>
				</ul>
			</section>
		</main>
		<?php include 'php/footer.php' ?>