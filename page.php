<!DOCTYPE html>
<html>
<?php get_header(); ?>

<div class="page_posts">
    <?php 
    if(have_posts()){
        while(have_posts()){
            the_post( );
            the_content();
        }
    }
    ?>
</div>
<?php get_footer();?>
</html>