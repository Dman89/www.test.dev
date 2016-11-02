<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#footer-php
 *
 * @package Primer
 * @since   1.0.0
 */
?>

		</div><!-- #content -->

		<?php
		/**
		 * Fires before the `<footer>` element.
		 *
		 * @since 1.0.0
		 */
		do_action( 'primer_before_footer' );
		?>

		<footer id="colophon" class="site-footer">

			<div class="site-footer-inner">

				<?php
				do_action( 'primer_footer' );
				?>

			</div><!-- .site-footer-inner -->

		</footer><!-- #colophon -->

		<!--
		<?php
		/**
		 * Fires after the `<footer>` element.
		 *
		 * @since 1.0.0
		 */
		do_action( 'primer_after_footer' );
		?>

	</div><!-- #page -->
	<div id="footer-text">Copyright 2016 - Haile Jewelry & Loans</div>
	<?php wp_footer(); ?>

</body>

</html>
