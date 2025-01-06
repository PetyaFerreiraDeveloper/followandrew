<?php get_header() ?>

<!-- This is the template for all pages in the site -->

<article class="content px-3 py-5 p-md-5">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      // the_content();
      // the first parameter below is the path to the temlplate part and the second is the type of template part (the second part of the template file name)
      get_template_part('template-parts/content', 'page');
    }
  }
  ?>
</article>


<?php get_footer() ?>