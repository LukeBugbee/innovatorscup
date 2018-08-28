<?php include '../data.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Innovators Cup - About 8vc</title>
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
				<h1>CREATIVE IDEAS IMPROVING LIVES</h1>
				<p>
					We are inspired by the following projects creating positive impact in the world today.
				</p>
			</div>
			<!-- /.left-column -->
		</div>
		<!-- /.container -->
	</section>

	<section class="mod-line-bg">
		<div class="container wysiwyg">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</p>
			<p>
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
		<!-- /.container -->
	</section>


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