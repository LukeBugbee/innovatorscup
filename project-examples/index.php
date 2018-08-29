<?php include '../header.php' ?>
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

	<?php include '../footer.php'; ?>