<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gravity
 */

?>

	</div><!-- #content -->

	<?php get_template_part( 'template-parts/layout/footer', 'content' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

	<script src="../../mixitup.min.js"></script>
	<!-- <script>
		var mixer = mixitup(containerEl, {
			selectors: {
				target: '.group'
			},
			animation: {
				duration: 300
			}
		});
	</script> -->
</body>
</html>

