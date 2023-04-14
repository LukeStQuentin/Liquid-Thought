<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage HappyHunny
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <?php
    if (have_posts()) :

      /* Start the Loop */
      while (have_posts()) :
        the_post();

        get_template_part('template-parts/content', get_post_format());

      endwhile;

      the_posts_pagination(
        array(
          'prev_text' => __('Previous page', 'your-theme-name'),
          'next_text' => __('Next page', 'your-theme-name'),
          'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'your-theme-name') . ' </span>',
        )
      );

    else :

      get_template_part('template-parts/content', 'none');

    endif;
    ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
