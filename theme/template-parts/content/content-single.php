<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gravity
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header px-5">

		<?php the_title( '<h1 class="entry-title text-6xl font-medium py-5 ">', '</h1>' ); ?>

		<!-- <p class="text-red-500"><?php the_category(', '); ?></p> -->

		<div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-x-6 text-sm py-5">
			<div class="">
				<?php if (get_field('tema')) : ?>
					<div class="pb-4">
						<p class="uppercase">Tema</p>
						<p><?php the_field('tema'); ?></p>
					</div>
				<?php endif; ?>

				<?php if (get_field('tipologia')) : ?>
					<div class="pb-4">
						<p class="uppercase">Tipologia</p>
						<p><?php the_field('tipologia'); ?></p>
					</div>
				<?php endif; ?>

				<?php if (get_field('anno')) : ?>
					<div class="pb-4">
						<p class="uppercase">Anno</p>
						<p><?php the_field('anno'); ?></p>
					</div>
				<?php endif; ?>
			</div>

			<div class="">
				<?php if (get_field('area_geografica')) : ?>
					<div class="pb-4">
						<p class="uppercase">Area geografica</p>
						<p><?php the_field('area_geografica'); ?></p>
					</div>
				<?php endif; ?>

				<?php if (get_field('promotore')) : ?>
					<div class="pb-4">
						<p class="uppercase">Promotore</p>
						<p><?php the_field('promotore'); ?></p>
					</div>
				<?php endif; ?>

				<?php if (get_field('finanziato_da')) : ?>
					<div class="pb-4">
						<p class="uppercase">Finanziato da</p>
						<p><?php the_field('finanziato_da'); ?></p>
					</div>
				<?php endif; ?>

				<?php if (get_field('ambito')) : ?>
					<div class="pb-4">
						<p class="uppercase">Ambito</p>
						<p><?php the_field('ambito'); ?></p>
					</div>
				<?php endif; ?>
			</div>

			<div class="">
				<?php if (get_field('partner_di_progetto')) : ?>
					<div class="pb-4">
						<p class="uppercase">Partner di Progetto</p>
						<p><?php the_field('partner_di_progetto'); ?></p>
					</div>
				<?php endif; ?>
			</div>

			<div class="">
				<?php if (get_field('referente_del_gruppo')) : ?>
					<div class="pb-4">
						<p class="uppercase">Referente del Gruppo</p>
						<p><?php the_field('referente_del_gruppo'); ?></p>
					</div>
				<?php endif; ?>

				<?php if (get_field('link')) : ?>
					<div class="pb-4">
						<p class="uppercase">Link</p>
						<p><?php the_field('link'); ?></p>
					</div>
				<?php endif; ?>
			</div>
		</div>


		<!-- <?php if ( ! is_page() ) : ?>
			<div class="entry-meta">
				<?php gravity_entry_meta(); ?>
			</div>
		<?php endif; ?> -->


	</header><!-- .entry-header -->

	<div class="px-5 w-full img-container">
		<?php the_post_thumbnail('large'); ?>
	</div>
	

	

	<div>
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
	</div>


	<div class="">
		<p class="uppercase text-base p-5">Leggi anche</p>
		<div class="grid grid-cols-3 px-5 pb-5 gap-x-6">
			<div class="">
				<div class="pb-2 img-container ">
					<?php the_post_thumbnail('thumbnail'); ?>
				</div>

				<header class="">

					<p class="text-black text-xs uppercase"><?php single_term_title(); ?> / <?php the_field('tema') ?></p>

					<?php
					if ( is_sticky() && is_home() && ! is_paged() ) {
						printf( '%s', esc_html_x( 'Featured', 'post', 'gravity' ) );
					}
					the_title( sprintf( '<h2 class="text-black text-xl"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
					?>
				</header>
			</div>

			<div class="">
				<div class="pb-2 img-container ">
					<?php the_post_thumbnail('thumbnail'); ?>
				</div>

				<header class="">

					<p class="text-black text-xs uppercase"><?php single_term_title(); ?> / <?php the_field('tema') ?></p>

					<?php
					if ( is_sticky() && is_home() && ! is_paged() ) {
						printf( '%s', esc_html_x( 'Featured', 'post', 'gravity' ) );
					}
					the_title( sprintf( '<h2 class="text-black text-xl"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
					?>
				</header>
			</div>

			<div class="">
				<div class="pb-2 img-container ">
					<?php the_post_thumbnail('thumbnail'); ?>
				</div>

				<header class="">

					<p class="text-black text-xs uppercase"><?php single_term_title(); ?> / <?php the_field('tema') ?></p>

					<?php
					if ( is_sticky() && is_home() && ! is_paged() ) {
						printf( '%s', esc_html_x( 'Featured', 'post', 'gravity' ) );
					}
					the_title( sprintf( '<h2 class="text-black text-xl"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
					?>
				</header>
			</div>
			
		</div>
	</div>
	
	<!-- .entry-content -->

	<!-- <footer class="entry-footer">
		<?php gravity_entry_footer(); ?>
	</footer> -->

</article><!-- #post-${ID} -->
