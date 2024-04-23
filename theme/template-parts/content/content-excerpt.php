<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gravity
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class('group ' . get_field('tema')); ?> >
    <a href="<?php the_permalink(); ?>" class="block">
        <div class="pb-2 img-container">
            <?php the_post_thumbnail('medium'); ?>
        </div>

        <header class="">
            <p class="text-black text-sm uppercase"><?php single_term_title(); ?> / <?php the_field('tema') ?></p>
            <?php
            if ( is_sticky() && is_home() && ! is_paged() ) {
                printf( '%s', esc_html_x( 'Featured', 'post', 'gravity' ) );
            }
            the_title( '<h3 class="text-black">', '</h3>' );
            ?>
        </header><!-- .entry-header -->
		<!-- 
		<div <?php gravity_content_class( 'entry-content' ); ?>>
		<?php the_excerpt(); ?>
		</div>

		<footer class="entry-footer">
			<?php gravity_entry_footer(); ?>
		</footer> -->
    </a>
</article>