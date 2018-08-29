<?php include '../header.php' ?>
	<section class="mod mod--projects">
		<div class="container">
			<div class="projects grid">
				<?php foreach ($projects as $project): ?>
				<div class="project item">
					<div class="content">
						<figure class="project__figure" style="background-image: url(/assets/img/projects/<?= $project['logo'] ?>)"></figure><!-- /.project__figure -->
						<article class="project__content">
							<p>
								<strong class="white"><?= $project['name'] ?></strong> | 
								<a href="<?= $project['url'] ?>"><?= $project['url'] ?></a>
							</p>
							<p><?= $project['blurb'] ?></p>
						</article><!-- /.project__content -->
					</div><!-- /.content -->
				</div><!-- /.project -->
				<?php endforeach ?>
			</div><!-- /.projects -->
		</div><!-- /.container -->
	</section><!-- /.mod mod--panel-members -->

	<?php include '../footer.php'; ?>