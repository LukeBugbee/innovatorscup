<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Innovators Cup <?= ( isset($currentPage) ) ? '— ' . $currentPage['name'] : '' ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/styles.min.css?newer">
</head>

<?php
	$home = false;
	if( $_SERVER['REQUEST_URI'] == '/' ) {
		$home = true;
	}

	$body_class = (!$home) ? $_SERVER['REQUEST_URI'] : 'home';
	$body_class = str_replace('/', '', $body_class);
?>

<body class="<?php echo $body_class; ?>">
	<header class="ic-header">
		<a class="logo logo--header" href="/">8VC Innovators Cup</a>

		<div class="mobile-menu-button">
			<span></span>
		</div>

		<nav class="global-nav">
			<?php foreach ($pages as $page): ?>
				<a <?= (strpos($_SERVER['REQUEST_URI'], $page['slug']) !== false) ? 'class="active"' : '' ?> href="<?= '/' . $page['slug'] ?>"><?= $page['name'] ?></a>
			<?php endforeach ?>
		</nav>
	</header>

	<?php if (isset($currentPage)): ?>
	<section class="mod mod-header mod-header--bg">

		<div class="background" style="background-image: linear-gradient(to right, rgba(127,20,236,0.3) 0%, transparent 100%), url(/assets/img/<?= $currentPage['banner'] ?>); background-position: <?= $currentPage['mobile-position'] ?>;"></div>

		<div class="container">
			<div class="left-column wysiwyg">
				<h1><?= $currentPage['headline'] ?></h1>
				<?php if ($currentPage['blurb'] !== ''): ?>
				<p><?= $currentPage['blurb'] ?></p>
				<?php endif ?>
			</div>
			<!-- /.left-column -->
		</div>
		<!-- /.container -->
	</section>
	<?php endif ?>
