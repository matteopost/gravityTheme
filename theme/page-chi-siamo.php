<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gravity
 */

get_header();
?>

	<section id="primary">
		<main id="main">
			
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers. */
						__( 'Continue reading<span class="sr-only"> "%s"</span>', 'gravity' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);

			wp_link_pages(
				array(
					'before' => '<div>' . __( 'Pages:', 'gravity' ),
					'after'  => '</div>',
				)
			);
			?>
			


		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
