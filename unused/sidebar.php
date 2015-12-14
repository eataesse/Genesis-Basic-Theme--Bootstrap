<?php
/**
* The Sidebar containing the main widget areas.
*
* @package Genesis Basic
* @since Genesis Basic 1.0
*/
?>

<div class="sidebar">
    <div id="sidebar-primary" class="widget-area" role="complementary">
        <?php do_action( 'before_sidebar' ); ?>
        <?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
     
            <aside id="search" class="widget widget_search">
                <?php get_search_form(); ?>
            </aside>
     
            <aside id="archives" class="widget">
                <h1 class="widget-title"><?php _e( 'Archives', 'genesisbasic' ); ?></h1>
                <ul>
                    <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                </ul>
            </aside>
     
            <aside id="meta" class="widget">
                <h1 class="widget-title"><?php _e( 'Meta', 'genesisbasic' ); ?></h1>
                <ul>
                    <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                    <?php wp_meta(); ?>
                </ul>
            </aside>
     
        <?php endif; // end sidebar widget area ?>
    </div><!-- #secondary .widget-area -->
    
</div>