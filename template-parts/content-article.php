<div class="container">
  <header class="content-header">
    <div class="meta mb-3">
      <span class="date"><?php the_date(); ?></span>

      <?php
      the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
      ?>

      <?php
      $categories = get_the_category();
      if (!empty($categories)) {
        foreach ($categories as $category) {
          echo '<span class="tag"><i class="fa fa-folder"></i> ';
          echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="category-link">';
          echo esc_html($category->name);
          echo '</a></span>';
        }
      }
      ?>
      <span class="comment">
        <a href="#comments"><i class='fa fa-comment'></i>
          <?php comments_number(); ?>
        </a>
      </span>
    </div>
  </header>

  <?php
  the_content();
  ?>

  <?php
  comments_template();
  ?>
</div>