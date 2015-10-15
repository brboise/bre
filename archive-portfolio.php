<?php
/**
 * The Template for displaying all single posts.
 *
 * @package     Total
 * @subpackage  Templates
 * @author      Alexander Clarke
 * @copyright   Copyright (c) 2015, WPExplorer.com
 * @link        http://www.wpexplorer.com
 * @since       1.0.0
 * @version     2.1.0
 */

get_header(); ?>

    <div id="content-wrap" class="container clr">

    <?php wpex_hook_primary_before(); ?>

    <div id="primary" class="content-area clr">

        <?php wpex_hook_content_before(); ?>

        <main id="content" class="site-content clr" role="main">

            <?php wpex_hook_content_top(); ?>
            <div class="portfolio-list">
           <div class="one_half">
            <a href="<?php echo get_site_url(); ?>/property/office/"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/office.jpg" alt="office" width="980" height="368" class="alignright size-large wp-image-5169" /><h3>Office</h3></a>
                
                            <a href="<?php echo get_site_url(); ?>/property/multifamily/"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/multifamily.jpg" alt="multifamily" width="980" height="368" class="alignright size-large wp-image-5169" /><h3 class="portfolio-heading">Multifamily</h3></a>
                </div><div class="one_half">
                            <a href="<?php echo get_site_url(); ?>/property/development/"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/development.jpg" alt="development" width="980" height="368" class="alignright size-large wp-image-5169" /><h3 class="portfolio-heading">Development</h3></a>
                
                            <a href="<?php echo get_site_url(); ?>/property/retail/"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/retail.jpg" alt="retail" width="980" height="368" class="alignright size-large wp-image-5169" /><h3 class="portfolio-heading">Retail</h3></a>
                </div>
            </div>
            
              

                <?php wpex_hook_content_bottom(); ?>
          
            <div class="clear"></div>

        </main><!-- #content -->

        <?php wpex_hook_content_after(); ?>

    </div><!-- #primary -->

    <?php dynamic_sidebar( 'portfolio-sidebar' ); ?>

</div><!-- .container -->

<?php get_footer(); ?>