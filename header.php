<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Innovators Cup <?= ( isset($currentPage) ) ? '— ' . $currentPage['name'] : '' ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<body>

	<header class="ic-header">
		<a class="logo" href="/">8VC Innovators Cup</a>

		<nav class="global-nav">
			<?php foreach ($pages as $page): ?>
				<a <?= (strpos($_SERVER['REQUEST_URI'], $page['slug']) !== false) ? 'class="active"' : '' ?> href="<?= $page['slug'] ?>"><?= $page['name'] ?></a>
			<?php endforeach ?>
			<a class="button" href="#">Apply</a>
		</nav>
	</header>