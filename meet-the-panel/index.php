<?php include '../data.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Innovators Cup - Meet the Panel</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/styles.min.css">
</head>
<body>

	<header class="ic-header">
		<a class="logo" href="/">8VC Innovators Cup</a>

		<nav>
			<?php foreach ($pages as $page): ?>
				<a <?= (strpos($_SERVER['REQUEST_URI'], $page['slug']) !== false) ? 'class="active"' : '' ?> href="<?= $page['slug'] ?>"><?= $page['name'] ?></a>
			<?php endforeach ?>
			<a class="button" href="#">Apply</a>
		</nav>
	</header>

	<section class="mod mod-header mod-header--bg">
		<div class="container">
			<div class="left-column wysiwyg">
				<h1>ADVOCATING CHANGE GLOBAL IMPACT FPO</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur <strong>adipisicing elit</strong>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
			<!-- /.left-column -->
		</div>
		<!-- /.container -->
	</section>

	<section class="mod mod--panel-members">
		<div class="container">
			<div class="panel">
				<?php foreach ($panelMembers as $member): ?>
					<div class="panel__member">
						<figure style="background-image: url(<?= $member['img'] ?>);"></figure>
						<div class="content">
							<h2><?= $member['name'] ?></h2>
							<p><?= $member['title'] ?></p>
						</div><!-- /.content -->
					</div><!-- /.panel__member -->
				<?php endforeach ?>
			</div><!-- /.panel -->
		</div><!-- /.container -->
	</section><!-- /.mod mod--panel-members -->


	<section class="mod mod--final-cta">
		<div class="container">
			<h2>Let&rsquo;s build shared value together.</h2>
			<a href="#" class="button button--extra-wide">Apply</a>
			<small>Application deadline: October 31</small>
		</div>
		<!-- /.container -->
	</section>
	<!-- /.svg-line-bg -->

	<?php include '../footer.php'; ?>

</body>
</html>