<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<main id="main" class="site-main">
  <div class="product-categories">
    <?php
      $args = array(
        'taxonomy'     => 'product_cat',
        'orderby'      => 'name',
        'show_count'   => 0,
        'pad_counts'   => 0,
        'hierarchical' => 1,
        'title_li'     => '',
        'hide_empty'   => 0
      );
      wp_list_categories( $args );
    ?>
  </div>
  <div class="product-tags">
    <?php
      $args = array(
        'taxonomy'     => 'product_tag',
        'orderby'      => 'name',
        'show_count'   => 0,
        'pad_counts'   => 0,
        'hierarchical' => 0,
        'title_li'     => '',
        'hide_empty'   => 0
      );
      wp_list_categories( $args );
    ?>
  </div>
  <div class="recent-products">
    <h2>Recently Added</h2>
    <?php echo do_shortcode('[recent_products per_page="4" columns="4"]'); ?>
  </div>
  <div class="featured-products">
    <h2>Featured Products</h2>
    <?php echo do_shortcode('[featured_products per_page="4" columns="4"]'); ?>
  </div>
</main>

<?php get_footer(); ?>
