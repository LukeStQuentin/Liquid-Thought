<?php get_header(); ?>

<main id="main" class="site-main">

  <?php
    // Start the loop
    while (have_posts()) :
      the_post();

      // Get the content-page template part
      get_template_part('template-parts/content', 'page');

    endwhile; // End of the loop.
  ?>

</main><!-- #main -->

<?php get_footer(); ?>
