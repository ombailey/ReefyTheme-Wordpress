<div class="page_meta">
        <div class="meta">
                <i class="fa-solid fa-calendar-days"></i> <?php the_date(); ?>
                <i class="fa-solid fa-tag"></i> <?php the_tags(); ?>
                <i class="fa-solid fa-comment"></i> <?php comments_number(); ?>
        </div>
</div>
<div class="post_body">
        <h3><?php the_title(); ?></h3>
        <img src="<?php the_post_thumbnail_url(); ?>" class="thumbnail" alt="image">
        <p><?php the_content(); ?> </p>
        <p class="author">- <?php the_author(); ?></p>
</div>