<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bCreate
 */

?>
	<footer id="colophon" class="site-footer row">
		<div class="col-4">
			<?php
			wp_nav_menu([
				'theme_location' => 'footer-1',
				'menu_id' => 'footer-1'
			]);
			?>
		</div>
		<div class="col-4">
			<?php
			wp_nav_menu([
				'theme_location' => 'footer-2',
				'menu_id' => 'footer-2'
			]);
			?>
		</div>
		<div class="col-4">
			<?php
			wp_nav_menu([
				'theme_location' => 'footer-3',
				'menu_id' => 'footer-3'
			]);
			?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
