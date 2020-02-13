<?php
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
        <header class="">
			<div class="logo-container">
				<div class="h-logo">
					<a href="<?php echo get_home_url(); ?>"><img class="img-logo" src="<?php echo get_template_directory_uri(); ?>/files/img/logo_new.png"></a>
				</div>

				<div class="div-apply">
					<button class="apply-btn hide-for-small-only">
						<a href="<?php echo get_home_url(); ?>/application/application-form/">APPLY NOW</a>
					</button>
				</div>
			</div>

			
		<nav id="site-navigation" class="main-navigation">

				<div class="title-bar-white" data-responsive-toggle="main-menu-m" data-hide-for="large">
  					<button class="menu-icon top-menu-icon hide-for-large" type="button" data-toggle="main-menu-m"></button>
  				<div class="title-bar-title"></div>

					<?php 
						wp_nav_menu(array(
						'theme_location' => 'primary',
							'depth' => 2,
							'container' => 'div',
							'container_id' => 'main-menu-m',
							'container_class' => 'menu',
							'menu_class'      => 'accordion medium-horizontal menu',
							'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion">%3$s</ul>',
							'walker'	=> new Foundation_Walker_Nav_Menu()					)
						);
					?>	
				</div>

				<div data-sticky-container>
					<div id="header-bar" class="title-bar align-center hide-for-small-only hide-for-medium-only" data-sticky data-top-anchor="body:top;" data-bottom-anchor="body:bottom;" data-options="marginTop:0;" style="width:100%;">
					<?php 
						wp_nav_menu(array(
						'theme_location' => 'primary',
							'depth' => 2,
							'container' => 'div',
							'container_id' => 'main-menu',
							'container_class' => 'menu hide-for-small-only',
							'menu_class'      => 'menu',
							'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="dropdown">%3$s</ul>',			)
						);
					?>
					<a href="<?php echo get_home_url(); ?>/search"><i class="fi-magnifying-glass" id="search-icon"></i></a>
					</div>
				</div>

		</nav><!-- #site-navigation -->
		</header>
<div class="grid-container fluid" id="body">