<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ths_theme
 */

?>

	<footer id="colophon" class="footer">
		<?php
			get_template_part( 'template-parts/content' , 'footer' );
		?>

	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
