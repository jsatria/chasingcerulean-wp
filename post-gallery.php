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
        <?php wp_get_archives('type=postbypost&order=ASC'); ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
if ( ! get_theme_mod( 'hide_sidebar_single' ) ) {
    get_sidebar();
}
?>
<?php get_footer(); ?>
