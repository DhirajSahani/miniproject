<?php
/*
 * Displays the header section with logo, site title, tagline, navigation, and contact information.
 */
?>
<?php if (get_theme_mod('real_estate_manager_topbar_visibility', true)) : ?>
    <div class="topbar py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-8 col-12 align-self-center">
                    <div class="discount-text text-center">
                        <?php 
                        $real_estate_manager_topbar_text = get_theme_mod('real_estate_manager_topbar_text_top', '');
                        if ($real_estate_manager_topbar_text) : ?>
                            <p class="discount-top m-md-0 my-2"><?php echo esc_html($real_estate_manager_topbar_text); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-12 align-self-center">
                    <div class="top-button text-md-end text-center">
                        <?php 
                        $real_estate_manager_header_link = get_theme_mod('real_estate_manager_header_link_first', '');
                        $real_estate_manager_header_button = get_theme_mod('real_estate_manager_header_button_first', esc_html__('Explore Now', 'real-estate-manager'));
                        if ($real_estate_manager_header_link) : ?>
                            <span class="header-btn sec">
                                <a href="<?php echo esc_url($real_estate_manager_header_link); ?>" class="book-appoin"><?php echo esc_html($real_estate_manager_header_button); ?></a>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="headerbox py-3">
    <div class="container header-main">
        <div class="row m-0">
            <!-- Logo Section -->
            <div class="col-lg-3 col-md-4 col-12 logo-col align-self-center">
                <div class="logo text-center text-md-start">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php endif; ?>

                    <?php if (get_theme_mod('real_estate_manager_site_title', true)) : ?>
                        <?php if (is_front_page() && is_home()) : ?>
                            <p class="text-capitalize mb-0">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                            </p>
                        <?php else : ?>
                            <h1 class="text-capitalize">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                            </h1>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php
                    $real_estate_manager_description = get_bloginfo('description', 'display');
                    if ($real_estate_manager_description || is_customize_preview()) :
                        if (get_theme_mod('real_estate_manager_site_tagline', true)) :
                            ?>
                            <p class="site-description my-1 text-capitalize"><?php echo esc_html($real_estate_manager_description); ?></p>
                        <?php endif; 
                    endif;
                    ?>
                </div>
            </div>

            <!-- Navigation Section -->
            <div class="col-lg-7 col-md-4 col-12 align-self-center">
                <div class="main-navhead">
                    <div class="menubox">
                        <div class="menu-content">
                            <?php get_template_part('template-parts/navigation/site-nav'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Details Section -->
            <div class="col-lg-2 col-md-4 align-self-center mb-md-0 mb-3 p-0">
                <div class="header-details text-md-end text-center">
                    <!-- Search Bar -->
                    <span class="search-bar me-3">
                        <button type="button" class="open-search" aria-label="<?php esc_attr_e('Open Search', 'real-estate-manager'); ?>">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </button>
                    </span>

                    <p class="mb-0">
                        <?php if (class_exists('WooCommerce')) : ?>
                            <?php if (is_user_logged_in()) : ?>
                                <a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?>">
                                    <i class="fas fa-user" aria-hidden="true"></i>
                                </a>
                            <?php else : ?>
                                <a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?>">
                                    <i class="far fa-user" aria-hidden="true"></i>
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </p>
                </div>
            </div>

            <!-- Search Overlay -->
            <div class="search-outer">
                <div class="inner_searchbox w-100 h-100">
                    <?php get_search_form(); ?>
                </div>
                <button type="button" class="search-close" aria-label="<?php esc_attr_e('Close Search', 'real-estate-manager'); ?>"><?php esc_html_e('CLOSE', 'real-estate-manager'); ?></button>
            </div>
        </div>
    </div>
</div>