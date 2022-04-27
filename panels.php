<?php
$hero = get_field('hero_panel');
if ($hero): ?>
  <section  class="hero" 
            style="background-image: url('<?php echo esc_url( $hero['image']['url'] );?>')"
            alt="<?php echo esc_attr( $hero['image']['alt'] ); ?>" >
    <div class="container">
      <div class="content">
        <h1 class="header"><?php echo $hero['header']; ?></h1>
        <p class="intro"><?php echo $hero['introduction']; ?></p>
        <a class="cta" href="<?php echo esc_url( $hero['cta']['url'] ); ?>"><?php echo esc_html( $hero['cta']['title'] ); ?></a>
      </div>
    </div>
  </section>
<?php endif;

$text_img = get_field('text_and_image_panel');
if ($text_img): ?>
  <section class="text-image">
    <div class="grid">
      <div class="col-md-6 no-padding">
        <div class="image">
          <img src="<?php echo esc_url( $text_img['image']['url'] );?>" alt="<?php echo esc_attr( $text_img['image']['alt'] ); ?>" />
        </div>
      </div>
      <div class="col-md-6 no-padding">  
        <div class="text">
          <?php echo $text_img['text_content']; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif;

$look_up = get_field('look_up_panel');
if ($look_up): ?>
  <section class="look-up">
    <div class="container">
      <div class="intro">
        <?php echo $look_up['introduction']; ?>
      </div>
      <div class="search">
        <div>
          I am 
          <select name="person">
            <option>an Individual</option>
            <option>a Group</option>
          </select>
          and I
          <select name="action">
            <option>want to learn</option>
            <option>want to teach</option>
          </select>
        </div>
        <a href="#"><div class="cta">Start now</div></a>
      </div>
    </div>
  </section>
<?php endif;

$blogs = get_field('blog_panel');
if ($blogs):
$args = array(
  'post_type'       => 'post',
  'posts_per_page'  => 4,
); 
$post_query = new WP_Query($args); ?>
  <section class="blog-panel">
    <div class="container">
      <div class="intro">
        <?php echo $blogs['introduction']; ?>
      </div>
      <?php if ($post_query->have_posts()): ?>
        <div class="grid">
          <?php while ($post_query->have_posts()): $post_query->the_post(); ?>
            <div class="col-md-3 col-sm-6">
              <div class="card">
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>"><div class="cta">Read more</div></a>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
      <div class="cta-button">
        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">
          <div class="cta">More about what we do</div>
        </a>
      </div>
    </div>
  </section>
<?php endif; ?>