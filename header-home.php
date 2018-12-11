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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Header -->
		<!-- Nav -->

		<nav id="nav" class="navbar nav-transparent">

			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
           
						<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" >
            <img  class="logo-alt" src="https://gc.onliner.by/images/logo/onliner_logo.v3@2x.png?token=1543935833">
            <img  class="logo" src="https://gc.onliner.by/images/logo/onliner_logo.v3@2x.png?token=1543935833">
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
