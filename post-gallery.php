<?php
/**
 * Template Name: Post-Gallery
 *
 * Created by IntelliJ IDEA.
 * User: jonathansatria
 * Date: 28/12/2016
 * Time: 19:50
 */
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <h1>All posts</h1>
        <?php
            $args = array('posts_per_page' => -1);
            $allposts = get_posts($args);
            foreach($allposts as $post) : setup_postdata($post); ?>
                <div class="gallery-thumbnail-container">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium', array('class' => 'gallery-thumbnail-image'))?>
                    </a>
                    <p class="gallery-thumbnail-text"><?php the_title();?></p>
                </div>
        <?php endforeach;
        wp_reset_postdata();?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
if ( ! get_theme_mod( 'hide_sidebar_single' ) ) {
    get_sidebar();
}
?>
<?php get_footer(); ?>