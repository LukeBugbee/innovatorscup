<?php include '../data.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Innovators Cup - Projects Examples</title>
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

	<section class="mod mod--projects">
		<div class="container">
			<div class="projects grid">
				<?php foreach ([1,2,3,4] as $i): ?>
				<div class="project item">
					<div class="content">
						<figure class="project__figure" style="background-image: url(/assets/img/projects/strive.png)"></figure><!-- /.project__figure -->
						<article class="project__content">
							<p><strong class="white">Strive for College</strong> | <a href="http://striveforcollege.org">striveforcollege.org</a></p>
							<p>Strive for College uses technology deliver 1-on-1 mentoring sessions to financially handicapped students. Strive pairs formerly underprivileged people who beat the odds and attended great universities with similarly positioned high school students to whom they can offer advice. Strive is an excellent example of a project with high “return on investment” (ROI) - experienced, successful volunteers can drastically improve student outcomes in short amounts of time.</p>
							<?php if ($i === 2): ?>
							<p>Strive for College uses technology deliver 1-on-1 mentoring sessions to financially handicapped students. Strive pairs formerly underprivileged people who beat the odds and attended great universities with similarly positioned high school students to whom they can offer advice. Strive is an excellent example of a project with high “return on investment” (ROI) - experienced, successful volunteers can drastically improve student outcomes in short amounts of time.</p>
							<?php endif ?>
						</article><!-- /.project__content -->
					</div><!-- /.content -->
				</div><!-- /.project -->
				<?php endforeach ?>
			</div><!-- /.projects -->
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