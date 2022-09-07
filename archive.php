<!DOCTYPE html>
<html>
    <div class="page_posts">
    <?php 
    if(have_posts()){
        while(have_posts()){
            the_post( );
            get_template_part("template-parts/content", "article");
        }
    }
    ?>
</div>
</html>