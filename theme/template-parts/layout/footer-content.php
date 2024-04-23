<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gravity
 */

?>

<footer id="colophon">

	<div class="grid grid-cols-2 md:grid-cols-12 p-5 border-t border-black gap-6 my-5">
		<div class="col-span-2 md:col-span-3">
			<p class="uppercase text-xl ">gravity</p>
			<p class="text-xl ">Lab con i piedi per terra</p>
		</div>

		<div class="md:col-span-2">
			<!-- <img src="../../assets/logo-politecnico.svg" alt="logo politecnico" class=""> -->
			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/logo-politecnico.svg">
		</div>

		<div class="md:col-span-3">
			<p class="text-sm ">DAStU - Politecnico di Milano </p>
			<p class="text-sm ">Via Bonardi, 3 - 20133 Milano</p>
			<p class="text-sm ">Tel. +39 02.2399.5496</p>
			<p class="text-sm ">P.IVA 04376620151 - C.F 8005793150</p>
		</div>

		<div class="md:col-span-2 grid">
			<div class=""><a href="#" class="text-sm  hover:underline">Privacy Policy</a></div>
			<div class=""><a href="#" class="text-sm  hover:underline">Cookie Policy</a></div>
			<div class=""><a href="#" class="text-sm  hover:underline">Crediti</a></div>
		</div>

		<div class="md:col-span-2">
			<p class="text-sm  uppercase">Seguici</p>
			<div class="grid lg:grid-cols-2 grid-flow-col-1">
				<div><a href="#" class="text-sm  hover:underline">Facebook</a></div>
				<div><a href="#" class="text-sm  hover:underline">X</a></div>
				<div><a href="#" class="text-sm  hover:underline">Instagram</a></div>
				<div><a href="#" class="text-sm  hover:underline">Youtube</a></div>
			</div>
		</div>
	</div>


	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<aside role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'gravity' ); ?>">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'menu-2' ) ) : ?>
		<nav aria-label="<?php esc_attr_e( 'Footer Menu', 'gravity' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_class'     => 'footer-menu',
					'depth'          => 1,
				)
			);
			?>
		</nav>
	<?php endif; ?>

	<!-- <div>
		<?php
		$gravity_blog_info = get_bloginfo( 'name' );
		if ( ! empty( $gravity_blog_info ) ) :
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>,
			<?php
		endif;

		/* translators: 1: WordPress link, 2: WordPress. */
		printf(
			'<a href="%1$s">proudly powered by %2$s</a>.',
			esc_url( __( 'https://wordpress.org/', 'gravity' ) ),
			'WordPress'
		);
		?>
	</div> -->

</footer><!-- #colophon -->
