<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gravity
 */

?>

<header id="masthead" >



	<nav class="p-5 border-b border-black" id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'gravity' ); ?>">
		<!-- <button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'gravity' ); ?></button> -->

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s flex uppercase w-full justify-between text-black text-xl" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav><!-- #site-navigation -->

	<div class="p-5 border-b border-black">
		<h1 class="text-black font-medium text-6xl uppercase"><?php bloginfo( 'name' ); ?></h1>
	</div>



	<!-- <div>
		<?php
		if ( is_front_page() ) :
			?>
			<h1><?php bloginfo( 'name' ); ?></h1>
			<?php
		else :
			?>
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;

		$gravity_description = get_bloginfo( 'description', 'display' );
		if ( $gravity_description || is_customize_preview() ) :
			?>
			<p><?php echo $gravity_description;?></p>
		<?php endif; ?>
	</div> -->

</header><!-- #masthead -->
