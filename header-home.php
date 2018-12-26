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
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
	<!-- Header -->
		<!-- Nav -->

		<nav id="nav" class="navbar nav-transparent">

			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
           
						<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" >
            <img  class="logo" src="<?php echo get_template_directory_uri();?>/img/logo.png">
            <img  class="logo-alt" src="<?php echo get_template_directory_uri();?>/img/logo-alt.png">
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
        'container' => false,
        'menu_class'=> 'main-nav nav navbar-nav navbar-right ', 
        'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'walker' => new Tea_Navwalker(),
        );
           wp_nav_menu($args);
        ?>
			</div>
		</nav>
		<!-- /Nav -->
			<!-- Back to top -->
	<div id="back-to-top"></div>
			<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
