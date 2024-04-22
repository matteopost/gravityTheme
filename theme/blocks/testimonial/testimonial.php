<?php
/**
 * Testimonial Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$nome_cognome       = get_field( 'nome_cognome' );
$posizione          = get_field( 'posizione' );
$image              = get_field( 'image' );
$biografia          = get_field( 'biografia' );
$email              = get_field( 'email' );

?>


<div class="">
    <?php if ( !empty( $nome_cognome ) ) : ?>
        <h3 class="pb-4">
            <?php echo esc_html( $nome_cognome ); ?>
        </h3>
    <?php endif; ?>

    <?php if ( $image ) : ?>
        <div class="">
            <?php echo wp_get_attachment_image( $image['ID'], 'full', '', array( 'class' => 'testimonial__img' ) ); ?>
        </div>
    <?php endif; ?>

    <?php if ( !empty( $posizione ) ) : ?>
        <p class="text-sm uppercase pt-2">
            <?php echo wp_kses_post( $posizione ); ?>
        </p>
    <?php endif; ?>

    <div class="">
        <?php if ( !empty( $biografia ) ) : ?>
            <p class="text-sm pt-2">
                <?php echo wp_kses_post( $biografia ); ?>
            </p>
        <?php endif; ?>

        <?php if ( !empty( $email ) ) : ?>
            <a href="mailto:<?php echo wp_kses_post( $email )?>" class="text-sm pt-2 hover:text-red-500">
                <?php echo wp_kses_post( $email ); ?>
            </a>
        <?php endif; ?>
    </div>
</div>