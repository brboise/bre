<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package     Total
 * @subpackage  Templates
 * @author      Alexander Clarke
 * @copyright   Copyright (c) 2015, WPExplorer.com
 * @link        http://www.wpexplorer.com
 * @since       1.0.0
 * @version     2.0.3
 */

get_header(); ?>
    
    <div id="content-wrap" class="container clr">

        <?php wpex_hook_primary_before(); ?>

        <div id="primary" class="content-area clr">

            <?php wpex_hook_content_before(); ?>

            <main id="content" class="clr site-content" role="main">

                <?php wpex_hook_content_top(); ?>

                <article class="entry clr">

                    <?php
                    // Display custom text
                    if ( $wpex_error_page_text = wpex_get_mod( 'error_page_text' ) )  : ?>

                        <?php
                        // Translate theme mod
                        $wpex_error_page_text = wpex_translate_theme_mod( 'error_page_text', $wpex_error_page_text ); ?>

                        <div class="custom-error404-content clr">
                            <?php echo apply_filters( 'the_content', $wpex_error_page_text ); ?>
                        </div><!-- .custom-error404-content -->

                    <?php
                    // Display default text
                    else : ?>

                        <div class="error404-content clr">

                            <h1><?php _e( 'Page not found', 'wpex' ) ?></h1>
                            <p><?php _e( 'How about searching for what you were looking for?', 'wpex' ); ?></p>
                            <?php wpex_header_search_style($echo);  ?>

                        </div><!-- .error404-content -->

                    <?php endif; ?>

                </article><!-- .entry -->

                <?php wpex_hook_content_bottom(); ?>

            </main><!-- #content -->

            <?php wpex_hook_content_after(); ?>

        </div><!-- #primary -->

        <?php wpex_hook_primary_after(); ?>

    </div><!-- .container -->
    
<?php get_footer(); ?>