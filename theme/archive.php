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

			<!-- Filtri -->
			<!-- <?php $alpine_data = (!$is_preview) ? 'x-data="{open: false}"' : ''; ?> -->

			<div <?= $alpine_data; ?> class="border-b border-black p-5">


				<div class="flex justify-between">
					<button @click="open = !open" class="">Filtri</button>
					<button @click="open = !open" class="">+</button>
				</div>


				<div x-show="open" class="grid grid-cols-6 py-5 gap-5 block-filter">
					<div class="space-y-2">
						<p class="text-base uppercase">Tema</p>
						<button type="button" class="block" data-toggle=".Suolo" x-data="{ isActive: false }" :class="{ 'text-red-500': isActive }" @click="isActive = !isActive">Suolo</button> 
						<button type="button" class="block" data-toggle=".Slow">SLOW</button>
						<button type="button" class="block" data-toggle=".Spazi">Spazi</button>
					</div>

					<div class="space-y-2">
						<p class="text-base uppercase">Tipologia</p>
						<button type="button" class="block" data-filter=".Progetto">Progetto</button>
						<button type="button" class="block" data-filter=".Ricerca">Ricerca</button>
					</div>

					<div class="space-y-2">
						<p class="text-base uppercase">Stato</p>
						<button type="button" class="block" data-filter=".In_corso">In corso</button>
						<button type="button" class="block" data-filter=".Concluso">Concluso</button>
					</div>
				</div>
			</div>

			<!-- Post -->
			<div class="grid grid-cols-1 md:grid-cols-2 gap-5 p-5" id='filtro'>
				<?php while ( have_posts() ) :?>
				<div>
				<?php the_post(); get_template_part( 'template-parts/content/content', 'excerpt' );  // End the loop. ?>
			</div>
				
				<?php endwhile;
			
				gravity_the_posts_navigation();

			else :

				get_template_part( 'template-parts/content/content', 'none' );

			endif;
			?>
		
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
