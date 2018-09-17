<?php include '../header.php' ?>
	<section class="mod mod--projects">
		<div class="container">
			<div class="projects grid">

				<?php foreach ($projects as $project): ?>

					<div class="project item animate animate--fade-in">
						<div class="content">

							<a href="http://<?= $project['url'] ?>" target="_blank">
								<figure class="project__figure project__figure--<?= str_replace('.png', '', $project['logo']) ?>" style="background-image: url(/assets/img/projects/<?= $project['logo'] ?>)"></figure><!-- /.project__figure -->
							</a>

							<article class="project__content">
								<p>
									<strong class="white"><?= $project['name'] ?></strong> |
									<a href="http://<?= $project['url'] ?>" target="_blank"><?= $project['url'] ?></a>
								</p>
								<p><?= $project['blurb'] ?></p>

								<a class="cover-link" href="http://<?= $project['url'] ?>" target="_blank"></a>
							</article>

						</div>
					</div>

				<?php endforeach ?>

			</div><!-- /.projects -->
		</div><!-- /.container -->
	</section><!-- /.mod mod--panel-members -->

	<?php include '../footer.php'; ?>
