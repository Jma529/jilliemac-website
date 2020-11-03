<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jill_Augustus
 */

?>

	<footer class="site-footer">
		<nav class="footer-nav">
			<?php
				wp_nav_menu(
					array(
					'container'         => false,
					'theme_location' => 'footer-menu',
					'menu_class'        => 'footer-menu',
					'depth'					 => 0
				)
			);
			?>
		</nav>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
