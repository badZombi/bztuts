<nav class="navbar navbar-inverse navbar-static-top" role="navigation">

	<div class="container">

		<div class="navbar-header">
			<?= anchor('/', img(array('src' => 'assets/img/badzombi.png', 'class' => 'navbar-brand'))) ?>
		</div>

		<div class="">
			<ul class="nav navbar-nav navbar-right">
				<?= nav_li('/', 'Home', '') ?>
				<?= nav_li('tuts', 'Tuts', 'tuts') ?>
				<?= nav_li('donate', 'Donate', 'donate') ?>
			</ul>
		</div>
	</div>

</nav>
