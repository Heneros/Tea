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
		<div class="bg-img" style="background-image: url('/img/background1.jpg');">
<!-- 			<div class="overlay"></div> -->
		</div>
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
		<!-- 		<ul class="main-nav nav navbar-nav navbar-right">

					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#service">Services</a></li>
					<li><a href="#pricing">Prices</a></li>
					<li><a href="#team">Team</a></li>
					<li class="has-dropdown"><a href="#blog">Blog</a>
						<ul class="dropdown">
							<li><a href="blog-single.html">blog post</a></li>
						</ul>
					</li>
					<li><a href="#contact">Contact</a></li>
				</ul> -->
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

<!-- 		<div class="home-wrapper">
			<div class="container">
				<div class="row">


					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">We Are Creative Agency</h1>
							<p class="white-text">Morbi mattis felis at nunc. Duis viverra diam non justo. In nisl. Nullam sit amet magna in magna gravida vehicula. Mauris tincidunt sem sed arcu. Nunc posuere.
							</p>
							<button class="white-btn">Get Started!</button>
							<button class="main-btn">Learn more</button>
						</div>
					</div>

				</div>
			</div>
		</div> -->
<!-- 	</header>
 -->	<!-- /Header -->

