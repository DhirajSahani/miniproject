<?php
/**
 * Template part for displaying slider section
 *
 * @package Real Estate Manager
 * @subpackage real_estate_manager
 */

?>
<?php $real_estate_manager_static_image = get_stylesheet_directory_uri() . '/assets/images/header_img.png'; ?>
<?php if (get_theme_mod('real_estate_manager_slider_arrows', true) != '') : ?>

<section id="main-slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div id="slider" class="mb-md-0 mb-3">
                    <div id="owl-carousel" class="owl-carousel">
                        <?php
                        $real_estate_manager_slide_pages = array();
                        for ($real_estate_manager_count = 1; $real_estate_manager_count <= 4; $real_estate_manager_count++) {
                            $real_estate_manager_mod = intval(get_theme_mod('real_estate_manager_slider_page' . $real_estate_manager_count));
                            if ('page-none-selected' != $real_estate_manager_mod) {
                                $real_estate_manager_slide_pages[] = $real_estate_manager_mod;
                            }
                        }
                        if (!empty($real_estate_manager_slide_pages)) :
                            $real_estate_manager_args = array(
                                'post_type' => 'page',
                                'post__in' => $real_estate_manager_slide_pages,
                                'orderby' => 'post__in'
                            );
                            $real_estate_manager_query = new WP_Query($real_estate_manager_args);
                            if ($real_estate_manager_query->have_posts()) :
                                while ($real_estate_manager_query->have_posts()) : $real_estate_manager_query->the_post(); ?>
                                    <div class="item">
                                        <div class="slider-border">
                                            <?php if (has_post_thumbnail()) { ?>
                                                <img src="<?php the_post_thumbnail_url('full'); ?>" />
                                            <?php } else { ?>
                                                <img src="<?php echo esc_url($real_estate_manager_static_image); ?>" />
                                            <?php } ?>
                                        </div>
                                        <div class="carousel-caption">
                                            <div class="inner_carousel">
                                                <?php if (get_theme_mod('real_estate_manager_slider_short_heading') != '') { ?>
                                                    <p class="slidetop-text m-2"><?php echo esc_html(get_theme_mod('real_estate_manager_slider_short_heading', '')); ?></p>
                                                <?php } ?>
                                                <h1 class="custom-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                                <div class="more-btn mt-4">
                                                    <?php if ( get_theme_mod('real_estate_manager_product_btn_text1','Explore') != "" || get_theme_mod('real_estate_manager_product_btn_link1') != '') { ?>
                                                        <a target="_blank" class="text-capitalize me-2 mb-3 slider-btn1" href="<?php echo esc_url(get_theme_mod('real_estate_manager_product_btn_link1')!= '') ? esc_url(get_theme_mod('real_estate_manager_product_btn_link1')) : esc_url(get_permalink()); ?>">
                                                        <?php echo esc_html(get_theme_mod('real_estate_manager_product_btn_text1',__('Explore','real-estate-manager'))); ?>
                                                      </a>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                            <?php else : ?>
                                <div class="no-postfound"></div>
                            <?php endif;
                        endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <?php 
                // Retrieve and check the first tab text for display logic
                $real_estate_manager_tab_text = get_theme_mod('real_estate_manager_projetcs_text1', '');
                if ($real_estate_manager_tab_text) : ?>
                    <div class="main-tab text-center">
                        <?php
                        // Loop through the tabs
                        for ($real_estate_manager_j = 1; $real_estate_manager_j <= 3; $real_estate_manager_j++) :
                            $real_estate_manager_tab_text = get_theme_mod('real_estate_manager_projetcs_text' . $real_estate_manager_j, '');
                            if ($real_estate_manager_tab_text) :
                                $real_estate_manager_tab_id = sanitize_title($real_estate_manager_tab_text);
                                $active_class = ($real_estate_manager_j == 1) ? 'active' : ''; // First tab is active
                        ?>
                                <button 
                                    class="tablinks <?php echo esc_attr($active_class); ?>" 
                                    data-tab="<?php echo esc_attr($real_estate_manager_tab_id); ?>">
                                    <?php echo esc_html($real_estate_manager_tab_text); ?>
                                </button>
                        <?php endif; endfor; ?>
                    </div>
                <?php endif; ?>

                <?php 
                // Check if at least one shortcode exists
                if (
                    get_theme_mod('real_estate_manager_projetcs_shortcode1', '') != '' || 
                    get_theme_mod('real_estate_manager_projetcs_shortcode2', '') != '' || 
                    get_theme_mod('real_estate_manager_projetcs_shortcode3', '') != ''
                ) : 
                    for ($real_estate_manager_j = 1; $real_estate_manager_j <= 3; $real_estate_manager_j++) :
                        $real_estate_manager_tab_text = get_theme_mod('real_estate_manager_projetcs_text' . $real_estate_manager_j, '');
                        if ($real_estate_manager_tab_text) :
                            $real_estate_manager_tab_id = sanitize_title($real_estate_manager_tab_text);
                            $display_style = ($real_estate_manager_j == 1) ? 'display: block;' : 'display: none;'; // First content is visible
                ?>
                            <div 
                                id="<?php echo esc_attr($real_estate_manager_tab_id); ?>" 
                                class="slider-contact-form tabcontent" 
                                style="<?php echo esc_attr($display_style); ?>">
                                <?php 
                                $real_estate_manager_shortcode = get_theme_mod('real_estate_manager_projetcs_shortcode' . $real_estate_manager_j, '');
                                if (!empty($real_estate_manager_shortcode)) {
                                    echo do_shortcode($real_estate_manager_shortcode);
                                }
                                ?>
                            </div>
                <?php 
                        endif;
                    endfor;
                endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
