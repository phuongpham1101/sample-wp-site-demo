<?php get_header(); ?>

	<main id="main" role="main">

		<div class="container">
			<div class="grid">
				<div class="col-12">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php if ( get_post_status ( get_the_ID() ) == 'private' ) { ?>
						    <div class="private-tab">
								<p>THIS PAGE IS IN PRIVATE</p>
							</div>
						<?php } ?>
					    	<h1><?php the_title(); ?></h1>
							<h2><?php hex_posted_on(); ?> <?php hex_posted_by(); ?></h2>
							<h3><?php hex_tags_categories(); ?></h3>
							<?php the_content(); ?>

					<?php endwhile; ?>
					
				</div>
			</div>
		</div>

	</main>

<?php get_footer(); ?>