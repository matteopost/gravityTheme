<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gravity
 */

get_header();
?>

	<section id="primary">
		<main id="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header py-5 border-b border-black px-5">
				<?php single_term_title( '<h1 class="page-title uppercase">', '</h1>' ); ?> 
			</header><!-- .page-header -->


			<div class="grid grid-cols-1 md:grid-cols-2 gap-5 p-5">
				<?php
				// Start the Loop.
				while ( have_posts() ) :?>
				<div>
				<?php the_post(); get_template_part( 'template-parts/content/content', 'excerpt' );  // End the loop. ?>
			</div>
				
				<?php endwhile;
			
			// Previous/next page navigation.
			gravity_the_posts_navigation();

		else :

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
		
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
