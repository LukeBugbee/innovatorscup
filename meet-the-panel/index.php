<?php include '../header.php' ?>

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

	<?php include '../footer.php'; ?>