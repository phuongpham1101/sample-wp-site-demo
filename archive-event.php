<?php get_header(); ?>

	<main id="main" role="main">
    <section class="hero center-header">
      <h1 class="header">Events</h1>
    </section>
    <section class="events">
      <div class="container">
        <div class="filter"></div>
        <div class="event-list">
          <?php 
          $args = array(
            'post_type'       => 'event',
            'posts_per_page'  => -1,
            'order'           => 'DESC',
            'orderby'         => 'meta_value',
            'meta_key'        => 'date_time',
            'meta_type'       => 'DATETIME'
          );
          $event_query = new WP_Query( $args );

          if ( $event_query->have_posts() ): ?>
            <div class="grid">
              <?php while ( $event_query->have_posts() ): $event_query->the_post();
              $event_date = new DateTime(get_field('date_time'));
              $date_now = new DateTime('now');
              $disable_event = $event_date < $date_now;
              ?>
                <div class="col-md-3 col-sm-6">
                  <div class="card event <?php if ($disable_event){?>disable-event<?php }?>">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <p class="location"><?php the_field('location'); ?></p>
                    <p class="date-time"><?php echo $event_date->format('Y/m/d H:i a'); ?></p>
                    <a href="<?php the_permalink(); ?>"><div class="cta">Read more</div></a>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>
	</main>

<?php get_footer(); ?>