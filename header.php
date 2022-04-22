<!doctype html>
	<html <?php language_attributes(); ?>>
		<head>
			<link rel="dns-prefetch" href="//fonts.googleapis.com">
			<link rel="dns-prefetch" href="//google-analytics.com">

			<meta charset="<?php bloginfo('charset'); ?>">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="apple-mobile-web-app-capable" content="yes"/>
			
			<meta name="author" content="<?php bloginfo('url'); ?> - <?php bloginfo('name'); ?>" />
			<meta name="copyright" content="Copyright <?php bloginfo('name'); ?> <?php echo date("Y"); ?>, All Rights Reserved." />
			<meta name="application-name" content="<?php bloginfo('name'); ?>"/>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500&family=Open+Sans:wght@300;400&family=Roboto:wght@300&family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
			<script type="text/javascript">
				const ajaxurl = '<?php echo get_site_url();?>/wp-admin/admin-ajax.php';
			</script>
				
			<?php wp_head(); ?>

		</head>
		
		<body <?php body_class(); ?>>
			<header>
        <div class="secondary-nav">
          <div class="container">
            <div class="inner-container">
              <div class="search">
                <span><i class="fa-solid fa-magnifying-glass"></i> Search</span>
              </div>
              <div class="secondary-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => '', ) ); ?>
              </div>
            </div>
          </div>
        </div>
				<div class="container">
					<div class="grid">
						<div class="col-3">
              <a href="<?php echo get_site_url(); ?>">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/good_things_logo.png" alt="Good Things Logo" />
              </a>
						</div>
						<div class="col-9 primary">
							<nav>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => '', ) ); ?>
							</nav>
						</div>
					</div>
				</div>
			</header>