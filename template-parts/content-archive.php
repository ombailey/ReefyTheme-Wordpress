<div class="media">
    <img class="archive-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="image">
    <div class="archive-page_meta">
        <h3><?php the_title(); ?></h3>
        <div class="archive-meta">
            <i class="fa-solid fa-calendar-days"></i> <?php the_date(); ?>
            <i class="fa-solid fa-tag"></i> <?php the_tags(); ?>
            <i class="fa-solid fa-comment"></i> <?php comments_number(); ?>
            <div class="archive-post_body">
                <?php
                the_excerpt();
                ?>
            </div>
        </div>
    </div>
</div>
<div>
    <a class="more_link" href="<?php the_permalink(); ?>"><span class="more">Read More &rarr;</span></a>
</div>
<hr>