<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tea
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Header -->
<!-- 	<header id="home"> -->
		<!-- Background Image -->
<!-- 		<div class="bg-img" style="background-image: url('/img/background1.jpg');">
			<div class="overlay"></div> -->
<!-- 		</div> -->
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">

			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
           
						<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" >
							<img class="logo" src="/img/logo.png" alt="logo">
							<img class="logo-alt" src="/img/logo-alt.png" alt="logo">
<!-- 							Logo -->
						</a>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				        <?php  
        $args = array(
        'theme_location'=> 'menu-1',
        'menu_class'=> 'main-nav nav navbar-nav navbar-right', 
        'items_wrap'=> '<ul id="%1$s" class="%2$s">%3$s</ul>',        
        );
           wp_nav_menu($args);
        ?>

			</div>
		</nav>
		<!-- /Nav -->


<!-- 	</header>
 -->	<!-- /Header -->
	<div id="content" class="site-content">
