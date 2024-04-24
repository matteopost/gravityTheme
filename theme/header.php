<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gravity
 */

?><!doctype html>
<html <?php language_attributes(); ?> class="antialiased">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="//unpkg.com/alpinejs" defer></script>
	<!-- <script src="../../mixitup.min.js"></script> -->
	<script>
		var mixer = mixitup(containerEl, {
			selectors: {
				target: '.group'
			},
			animation: {
				duration: 300
			}
		});
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
<?php if (get_category('ricerca')) : ?>
    class="bg-white"
<?php elseif (get_category('didattica')) : ?>
    class="bg-red-50"
<?php elseif (get_category('terza-missione')) : ?>
    class="bg-blue-50"
<?php else: ?>
<?php endif; ?>>

<!-- <?php if (get_category('ricerca')) : ?>
		class="bg-white"
	<?php endif; ?>
	<?php if (get_category('didattica')) : ?>
		class="bg-red-50"
	<?php endif; ?>
	<?php if (get_category('terza-missione')) : ?>
		class="bg-blue-50"
	<?php endif; ?> -->





<?php wp_body_open(); ?>

<div id="page">

	<a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'gravity' ); ?></a>

	<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>

	<div id="content">
