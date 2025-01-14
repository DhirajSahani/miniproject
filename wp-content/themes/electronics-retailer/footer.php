<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Electronics Retailer 
 */
?>

    <footer role="contentinfo">
        <div class="footer-section">
            <?php if (get_theme_mod('electronics_retailer_footer_hide_show', true)){ ?>
                <aside id="footer" class="copyright-wrapper" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'electronics-retailer' ); ?>">
                    <div class="container">
                        <?php
                            $electronics_retailer_count = 0;
                            
                            if ( is_active_sidebar( 'footer-1' ) ) {
                                $electronics_retailer_count++;
                            }
                            if ( is_active_sidebar( 'footer-2' ) ) {
                                $electronics_retailer_count++;
                            }
                            if ( is_active_sidebar( 'footer-3' ) ) {
                                $electronics_retailer_count++;
                            }
                            if ( is_active_sidebar( 'footer-4' ) ) {
                                $electronics_retailer_count++;
                            }
                            // $electronics_retailer_count == 0 none
                            if ( $electronics_retailer_count == 1 ) {
                                $electronics_retailer_colmd = 'col-md-12 col-sm-12';
                            } elseif ( $electronics_retailer_count == 2 ) {
                                $electronics_retailer_colmd = 'col-md-6 col-sm-6';
                            } elseif ( $electronics_retailer_count == 3 ) {
                                $electronics_retailer_colmd = 'col-md-4 col-sm-4';
                            } else {
                                $electronics_retailer_colmd = 'col-lg-3 col-md-6 col-sm-6';
                            }
                        ?>
                        <div class="row position-relative">
                            <div class="<?php echo !is_active_sidebar('footer-1') ? 'footer_hide' : esc_attr($electronics_retailer_colmd); ?> col-xl-3 col-lg-3 col-md-6 col-xs-12 footer-block pe-2">
                                <?php if (is_active_sidebar('footer-1')) : ?>
                                    <?php dynamic_sidebar('footer-1'); ?>
                                <?php else : ?>
                                    <aside id="search" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e( 'firstfooter', 'electronics-retailer' ); ?>">
                                        <h3 class="widget-title"><?php esc_html_e( 'Search', 'electronics-retailer' ); ?></h3>
                                        <?php get_search_form(); ?>
                                    </aside>
                                <?php endif; ?>
                            </div>

                            <div class="<?php echo !is_active_sidebar('footer-2') ? 'footer_hide' : esc_attr($electronics_retailer_colmd); ?> col-xl-3 col-lg-3 col-md-6 col-xs-12 footer-block pe-2">
                                <?php if (is_active_sidebar('footer-2')) : ?>
                                    <?php dynamic_sidebar('footer-2'); ?>
                                <?php else : ?>
                                    <aside id="archives" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e( 'secondfooter', 'electronics-retailer' ); ?>">
                                        <h3 class="widget-title"><?php esc_html_e( 'Archives', 'electronics-retailer' ); ?></h3>
                                        <ul>
                                            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                                        </ul>
                                    </aside>
                                <?php endif; ?>
                            </div>                     

                            <div class="<?php echo !is_active_sidebar('footer-3') ? 'footer_hide' : esc_attr($electronics_retailer_colmd); ?> col-xl-3 col-lg-3 col-md-6 col-xs-12 footer-block  pe-2">
                                <?php if (is_active_sidebar('footer-3')) : ?>
                                    <?php dynamic_sidebar('footer-3'); ?>
                                <?php else : ?>
                                    <aside id="meta" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e( 'thirdfooter', 'electronics-retailer' ); ?>">
                                        <h3 class="widget-title"><?php esc_html_e( 'Meta', 'electronics-retailer' ); ?></h3>
                                        <ul>
                                            <?php wp_register(); ?>
                                            <li><?php wp_loginout(); ?></li>
                                            <?php wp_meta(); ?>
                                        </ul>
                                    </aside>
                                <?php endif; ?>
                            </div>

                            <div class="<?php echo !is_active_sidebar('footer-4') ? 'footer_hide' : esc_attr($electronics_retailer_colmd); ?> col-xl-3 col-lg-3 col-md-6 col-xs-12 footer-block  p-0">
                                <?php if (is_active_sidebar('footer-4')) : ?>
                                    <?php dynamic_sidebar('footer-4'); ?>
                                <?php else : ?>
                                    <aside id="categories" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e( 'forthfooter', 'electronics-retailer' ); ?>"> 
                                        <h3 class="widget-title"><?php esc_html_e( 'Categories', 'electronics-retailer' ); ?></h3>          
                                        <ul>
                                            <?php wp_list_categories('title_li=');  ?>
                                        </ul>
                                    </aside>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </aside>
            <?php }?>
        </div>
        <?php if (get_theme_mod('electronics_retailer_copyright_hide_show', true)) {?>
            <div id="footer-2" class="text-center">
              	<div class="copyright container">
                    <p class="mb-0 py-3"><?php electronics_retailer_credit(); ?> <?php echo esc_html(get_theme_mod('electronics_retailer_footer_text',__('By VWThemes','electronics-retailer'))); ?></p>
                    <?php if( get_theme_mod( 'electronics_retailer_hide_show_scroll',true) == 1 || get_theme_mod( 'electronics_retailer_resp_scroll_top_hide_show',true) == 1) { ?>
                        <?php $electronics_retailer_theme_lay = get_theme_mod( 'electronics_retailer_scroll_top_alignment','Right');
                        if($electronics_retailer_theme_lay == 'Left'){ ?>
                            <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('electronics_retailer_scroll_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'electronics-retailer' ); ?></span></a>
                        <?php }else if($electronics_retailer_theme_lay == 'Center'){ ?>
                            <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('electronics_retailer_scroll_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'electronics-retailer' ); ?></span></a>
                        <?php }else{ ?>
                            <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('electronics_retailer_scroll_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'electronics-retailer' ); ?></span></a>
                        <?php }?>
                    <?php }?>
              	</div>
              	<div class="clear"></div>
            </div>
        <?php }?>
    </footer>
        <?php wp_footer(); ?>
    </body>
</html>