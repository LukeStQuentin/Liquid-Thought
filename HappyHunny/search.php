<?php
/**
 * The template for displaying WooCommerce product search results.
 *
 * @package WordPress
 * @subpackage HappyHunny
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <?php if (have_posts()) : ?>

      <header class="page-header">
        <h1 class="page-title"><?php printf(__('Search results for: %s', 'your-theme-name'), '<span>' . get_search_query() . '</span>'); ?></h1>
      </header><!-- .page-header -->

      <?php woocommerce_product_loop_start(); ?>

      <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <?php wc_get_template_part('content', 'product'); ?>

      <?php endwhile; ?>

      <?php woocommerce_product_loop_end(); ?>

      <?php
      /**
       * Hook: woocommerce_after_shop_loop.
       *
       * @hooked woocommerce_pagination - 10
       */
      do_action('woocommerce_after_shop_loop');
      ?>

    <?php else : ?>

      <header class="page-header">
        <h1 class="page-title"><?php _e('Nothing Found', 'your-theme-name'); ?></h1>
      </header><!-- .page-header -->

      <div class="page-content">
        <?php if (is_search()) : ?>

          <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'your-theme-name'); ?></p>
          <?php get_search_form(); ?>

        <?php else : ?>

          <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'your-theme-name'); ?></p>
          <?php get_search_form(); ?>

        <?php endif; ?>
      </div><!-- .page-content -->

    <?php endif; ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
