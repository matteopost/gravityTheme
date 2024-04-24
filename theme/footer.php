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

<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js" integrity="sha512-nKZDK+ztK6Ug+2B6DZx+QtgeyAmo9YThZob8O3xgjqhw2IVQdAITFasl/jqbyDwclMkLXFOZRiytnUrXk/PM6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
	var mixer = mixitup('#filtro', {
		behavior: {
			liveSort: true
		},
		controls: {
			toggleLogic: "and"
		},
		animation: {
			duration: 200,
			easing: 'cubic-bezier(1, 0, 0, 1)',
			nudge: true,
			reverseOut: true,
			effects: "fade"
		},
		classNames: {
			block: "",
			elementFilter: "filter"
		}
	});
</script>

</body>
</html>