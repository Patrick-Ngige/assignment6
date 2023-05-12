<?php get_header(); ?>

<?php
    if (have_posts()):
        while (have_posts()): the_post() ;?>

        <?php // require 'content.php' ?>
        <?php get_template_part('content', get_post_format()) ?>
        
    <?php endwhile; ?>

    <!-- POST PAGINATION -->
    <?php next_posts_link('<< Older posts')?>
    <?php previous_posts_link('Newer posts >>')?>
<?php endif; ?>


<?php get_footer(); ?>