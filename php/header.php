<header class="warpper__header">
	
	<div class="logo">
		<a href="/?page=1"><img src="img/PhotoCage-logo.png" alt=""></a>
	</div>
	<div class="nav__icon">
		<div class="nav__link__icon">
			<a href="#" id="menu" class="icon">&#9776;</a>
		</div>
	</div>
	<nav class="topnav" id="myTopnav">
		<ul>
			
			<li>
			<?php if  ($_COOKIE['user'] == ''): ?>
				<a href="/pages/login.php">
					<div class="box__nav logout">
						<p><img src="img/logout.png" alt=""></p>
						<div class="nav__link__logout">
							
							<p>Logout</p>
						</div>
					</div>
				</a>
				<?php else: ?>
					<a href="/php/logout.php">
					<div class="box__nav logout">
						<p><img src="img/correct.png" alt=""></p>
						<div class="nav__link__logout">
							
							<p><?=$_COOKIE['user']; ?></p>
						</div>
					</div>
				</a>
			<?php endif ?>
			</li>
			
			<li>
				<a href="#">
					<div class="box__nav members">
						<p><img src="img/members.png" alt=""></p>
						<div class="nav__link__members">
							<p>Members</p>
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="box__nav gallery">
						<p><img src="img/gallery.png" alt=""></p>
						<div class="nav__link__gallery">
							<p>Gallery</p>
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="/?page=1">
					<div class="box__nav home">
						<p><img src="img/home.png" alt=""></p>
						<div class="nav__link__home">
							<p>Home</p>
						</div>
					</div>
				</a>
			</li>
			<li>
			</li>
		</ul>
	</nav>
</header>