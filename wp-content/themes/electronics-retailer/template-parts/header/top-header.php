<?php
/**
 * The template part for Top Header
 *
 * @package Electronics Retailer 
 * @subpackage electronics-retailer
 * @since electronics-retailer 1.0
 */
?>

<div class="main-header <?php if( get_theme_mod( 'electronics_retailer_sticky_header', false) == 1) { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
  <?php if (get_theme_mod('electronics_retailer_hide_show_topbar_section', true)) {?>
    <div class="topbar py-2">
      <div class="container">
        <div class="row">
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 align-self-center">
            <?php if ( is_active_sidebar( 'social-widget-sidemenu' ) ) : ?>
              <div class="topbar-social-icon gap-3 align-items-center">
                <?php dynamic_sidebar('social-widget-sidemenu'); ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 align-self-center">
            <p class="topbar-text mb-0 ms-2 text-capitalize text-center"><?php echo esc_html(get_theme_mod('electronics_retailer_topbar_text', '')) ?></p>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 align-self-center">
            <?php
            if (class_exists('WooCommerce')) {
              $electronics_retailer_product_found = false;
              if ((is_page() && !is_product_category()) || is_shop()) {
                $electronics_retailer_category_product_count = new WP_Query(array(
                  'post_type' => 'product',
                  'posts_per_page' => 1,
                  'post_status' => 'publish',
                ));
                if ($electronics_retailer_category_product_count->have_posts()) {
                  $electronics_retailer_product_found = true;
                }
                wp_reset_postdata();
              }
              if (is_product_category()) {
                $electronics_retailer_current_category = get_queried_object();
                $electronics_retailer_category_product_count = new WP_Query(array(
                  'post_type' => 'product',
                  'posts_per_page' => 1,
                  'post_status' => 'publish',
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'product_cat',
                      'terms' => $electronics_retailer_current_category->term_id,
                      'field' => 'id',
                      'operator' => 'IN',
                    ),
                  ),
                ));
                if ($electronics_retailer_category_product_count->have_posts()) {
                  $electronics_retailer_product_found = true;
                }
                wp_reset_postdata();
              }
              if (is_search() && !have_posts()) {
                $electronics_retailer_product_found = false;
              }
              if ($electronics_retailer_product_found) {
                  ?>
                <div id="order-tracking-form" class="order-track position-relative d-flex justify-content-end align-items-center">
                  <i class="<?php echo esc_attr(get_theme_mod('electronics_retailer_topbar_track_order_icon', 'fa-solid fa-truck-fast')); ?>"></i><span class="track-title ms-2"><?php esc_html_e( 'Track your Order', 'electronics-retailer' ); ?></span>
                  <div class="order-track-hover text-left">
                    <?php echo do_shortcode('[woocommerce_order_tracking]'); ?>
                  </div>
                </div>
            <?php }}?>
          </div>
        </div>
      </div>
    </div>
  <?php }?>
  <div class="woo-topbar py-2">
    <div class="container">
      <div class="row">
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 align-self-center logo-img-sec">
          <div class="logo text-start pb-0 pb-md-0">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php $electronics_retailer_blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $electronics_retailer_blog_info ) ) : ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <?php if( get_theme_mod('electronics_retailer_logo_title_hide_show',true) == 1){ ?>
                    <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php } ?>
                <?php else : ?>
                  <?php if( get_theme_mod('electronics_retailer_logo_title_hide_show',true) == 1){ ?>
                    <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php } ?>
                <?php endif; ?>
              <?php endif; ?>
              <?php
                $electronics_retailer_description = get_bloginfo( 'description', 'display' );
                if ( $electronics_retailer_description || is_customize_preview() ) :
              ?>
              <?php if( get_theme_mod('electronics_retailer_tagline_hide_show',false) == 1){ ?>
                <p class="site-description mb-0">
                  <?php echo esc_html($electronics_retailer_description); ?>
                </p>
              <?php } ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12 align-self-center">
          <?php if(class_exists('woocommerce')):?>
            <?php get_product_search_form(); ?>
          <?php else : ?>
            <?php get_search_form(); ?>
          <?php endif; ?>
        </div>
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 d-flex justify-content-end gap-3 align-items-center woo-icons">
          <div class="wishlist">
            <?php if ( defined('YITH_WCWL') ) { ?>
              <a class="wishlist_view" href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>" title="<?php esc_attr_e('Wishlist','electronics-retailer'); ?>">
                <i class="<?php echo esc_attr(get_theme_mod('electronics_retailer_heart_icon','fa-solid fa-heart')); ?>"></i>
              </a>
            <?php } ?>
          </div>
          <?php if(class_exists('woocommerce')):?>
            <div class="cart_shop">
              <a href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('shopping cart','electronics-retailer'); ?>">
                <i class="<?php echo esc_attr(get_theme_mod('electronics_retailer_cart_icon','fa-solid fa-cart-shopping')); ?>"></i>
                <span class="screen-reader-text"><?php esc_html_e('Shopping Cart','electronics-retailer'); ?></span>
              </a>
            </div>
            <?php if ( is_user_logged_in() ) { ?>
              <a class="myaccount-icon" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>">
                <i class="<?php echo esc_attr(get_theme_mod('electronics_retailer_topbar_myaccount_icon','fas fa-user')); ?>"></i>
              </a>
            <?php } else { ?>
              <a class="myaccount-icon" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','electronics-retailer'); ?>">
                <i class="<?php echo esc_attr(get_theme_mod('electronics_retailer_topbar_myaccount_icon','fas fa-user')); ?>"></i>
              </a>
            <?php } ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="menu-header py-2">
    <div class="container">
      <div class="row">
        <div class="col-xxl-1 col-xl-1 col-lg-2 col-md-2 col-sm-2 col-6 align-self-center text-start">
          <?php if(class_exists('woocommerce')){ ?>
            <div class=" position-relative">
              <button class="product-btn"><i class="fa-solid fa-list"></i><?php esc_html_e('Category','electronics-retailer'); ?></button>
              <div class="product-cat">
                <?php
                  $electronics_retailer_args = array(
                    'orderby'    => 'title',
                    'order'      => 'ASC',
                    'hide_empty' => 0,
                    'parent'  => 0
                  );
                  $electronics_retailer_product_categories = get_terms( 'product_cat', $electronics_retailer_args );
                  $electronics_retailer_count = count($electronics_retailer_product_categories);
                  if ( $electronics_retailer_count > 0 ){
                      foreach ( $electronics_retailer_product_categories as $electronics_retailer_product_category ) {
                        $electronics_retailer_product_cat_id = $electronics_retailer_product_category->term_id;
                        $electronics_retailer_cat_link = get_category_link( $electronics_retailer_product_cat_id );
                        if ($electronics_retailer_product_category->category_parent == 0) { ?>
                      <li class="drp_category"><a href="<?php echo esc_url(get_term_link( $electronics_retailer_product_category ) ); ?>">
                      <?php
                    }
                    echo esc_html( $electronics_retailer_product_category->name ); ?></a><i class="fas fa-chevron-right"></i></li>
                <?php } } ?>
              </div>
            </div>
          <?php }?>
        </div>
        <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-2 col-sm-2 col-6 align-self-center">
          <?php get_template_part('template-parts/header/navigation'); ?>
        </div>
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-8 col-sm-8 col-12 align-self-center contact-sec">
          <?php if(get_theme_mod('electronics_retailer_phone_number') != '' || get_theme_mod('electronics_retailer_site_text') != ''){ ?>
            <div class="row">
              <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 align-self-center phone-icon">
                <i class="<?php echo esc_attr(get_theme_mod('electronics_retailer_phone_icon','fa-solid fa-phone-volume')); ?>"></i>
              </div>
              <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 align-self-center pe-0">
                <div class="phone-sec">
                  <span><?php esc_html_e( 'Support :', 'electronics-retailer' ); ?></span><a href="tel:<?php echo esc_attr( get_theme_mod('electronics_retailer_phone_number','') ); ?>"><span><?php echo esc_html(get_theme_mod('electronics_retailer_phone_number',''));?></span></a>
                </div>
                <?php if(get_theme_mod('electronics_retailer_site_text') != ''){ ?>
                  <div class="site-sec">
                    <span><?php esc_html_e( 'Support :', 'electronics-retailer' ); ?></span><a href="<?php echo esc_url( get_theme_mod('electronics_retailer_site_text','') ); ?>"><span><?php echo esc_html(get_theme_mod('electronics_retailer_site_text',''));?></span></a>
                  </div>
                <?php }?>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>