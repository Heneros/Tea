<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tea
 */
global $tea_option;
?>

	</div><!-- #content -->
	<footer id="footer" class="sm-padding bg-dark">
		<!-- Container -->
		<div class="container">
<?php if ( ! is_active_sidebar( 'sidebar-footer' ) ) {?>
			<!-- Row -->
			<div class="row">
          <?php dynamic_sidebar('sidebar-footer'); ?>
			</div>
			<!-- /Row -->
			<?php  }?>
			<?php if($tea_option['footer-copy'] != ''):?>
		<div class="footer-copyright">
     		<p><?php echo esc_html($tea_option['footer-copy']); ?></p>					
     	</div>
		</div>
	<?php endif; ?>
		<!-- /Container -->

	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
