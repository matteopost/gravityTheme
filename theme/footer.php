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

<script src="../../mixitup.js"></script>
<script>
	var mixer = mixitup('#mix-it-up', {
		animation: {
			effects: 'fade',
			easing: 'cubic-bezier(1, 0, 0, 1)',
			duration: 400
		},
	});
</script>

</body>
</html>