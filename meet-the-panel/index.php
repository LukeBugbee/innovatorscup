<?php include '../header.php' ?>

	<section class="mod mod--panel-members">
		<div class="container">
			<div class="panel">

				<?php foreach ($panelMembers as $member): ?>

					<div class="panel__member animate animate--fade-in">
							<figure style="background-image: url(/assets/img/panel/<?= $member['img'] ?>);"></figure>
							<div class="content">
								<h2><?= $member['name'] ?></h2>
								<p><?= $member['title'] ?></p>
								<a href="<?= $member['link'] ?>" class="cover-link"></a>
							</div><!-- /.content -->
					</div><!-- /.panel__member -->

				<?php endforeach ?>

			</div><!-- /.panel -->
		</div><!-- /.container -->
	</section><!-- /.mod mod--panel-members -->

	<?php include '../footer.php'; ?>
