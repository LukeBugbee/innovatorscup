

<section class="mod mod--final-cta">
	<div class="container">
		<h2>Let&rsquo;s build shared value together.</h2>
		<a href="https://8vc.typeform.com/to/ke4Q6u" target="_blank" class="button button--extra-wide">Apply</a>
		<small>Application deadline: December 31, 2018</small>
	</div>
	<!-- /.container -->

	<?php include 'final-cta-svg.php' ?>
</section>
<!-- /.svg-line-bg -->

<footer class="ic-footer">
	<a href="/" class="logo">8VC Innovators Cup</a>
	<nav class="global-nav">
		<?php foreach ($pages as $page): ?>
			<a <?= (strpos($_SERVER['REQUEST_URI'], $page['slug']) !== false) ? 'class="active"' : '' ?> href="<?= $page['slug'] ?>"><?= $page['name'] ?></a>
		<?php endforeach ?>
	</nav>
	<small class="copyright">
		&copy;<?= date('Y') ?> 8vc
	</small>
</footer>

<script src="/assets/js/scripts.min.js"></script>

</body>
</html>
