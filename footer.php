<script src="assets/js/scripts.min.js"></script>

<footer class="ic-footer">
	<a href="/" class="logo">8VC Innovators Cup</a>
	<nav>
		<?php foreach ($pages as $page): ?>
			<a <?= (strpos($_SERVER['REQUEST_URI'], $page['slug']) !== false) ? 'class="active"' : '' ?> href="<?= $page['slug'] ?>"><?= $page['name'] ?></a>
		<?php endforeach ?>
	</nav>
	<small class="copyright">
		&copy;<?= date('Y') ?> 8vc
	</small>
</footer>