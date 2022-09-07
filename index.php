<?php get_header(); ?>

<head>
  <meta name="viewport" content="width=device-width, initial scale=1" />
</head>
<div class="blog_layout">
  <section class="blog">
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        get_template_part("template-parts/content", "archive");
      }
    }
    ?>

  </section>
  <div class="sidebar">
    <?php get_sidebar(); ?>
  </div>
</div>