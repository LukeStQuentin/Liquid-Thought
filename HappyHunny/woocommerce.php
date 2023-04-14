<?php
/**
 * Template Name: WooCommerce
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
        <div class="container">
		<?php
		if ( have_posts() ) :

			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile;

		endif;
		?>
        </div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
