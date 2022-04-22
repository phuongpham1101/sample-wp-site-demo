<?php get_header(); ?>

	<main id="main" role="main">

		<div class="container">
			<div class="grid">
				<div class="col-12">
					<?php while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>

	</main>

<?php get_footer(); ?>