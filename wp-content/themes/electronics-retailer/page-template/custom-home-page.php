<?php
/**
 * Template Name: Custom Home Page
 */
get_header();

?>
<!-- banner section -->
<main id="maincontent" role="main">
  <?php if( get_theme_mod( 'electronics_retailer_show_hide_banner',true)) { ?>
    <section id="banner" class="position-relative mb-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-12 col-12">
            <div class="banner-left position-relative">
              <?php if ( get_theme_mod('electronics_retailer_featured_image_sec') != '' ) {?>
                <img class="left-img" src="<?php echo esc_url(get_theme_mod('electronics_retailer_featured_image_sec')); ?>" alt="" title="<?php esc_attr_e('#slidecaption','electronics-retailer'); ?>">
                <div class="banner-overlay"></div>
              <?php }?>
              <div class="banner-content position-absolute">
                <?php if(get_theme_mod('electronics_retailer_banner_small_text') != '') {?>
                  <p class="small-title text-capitalize mb-3"><?php echo esc_html(get_theme_mod('electronics_retailer_banner_small_text', '')) ?></p>
                <?php }?>
                <?php if(get_theme_mod('electronics_retailer_banner_title') != '') {?>
                  <h1 class="banner-title mb-3 text-capitalize"><?php echo esc_html(get_theme_mod('electronics_retailer_banner_title', '')) ?></h1>
                <?php }?>
                <?php if(get_theme_mod('electronics_retailer_banner_para_text') != '') {?>
                  <p class="banner-para"><?php echo esc_html(get_theme_mod('electronics_retailer_banner_para_text', '')) ?></p>
                <?php }?>
                <?php if ( get_theme_mod('electronics_retailer_explore_button_label') != '' ) {?>
                  <div class ="explore-btn mt-4">
                    <a href="<?php echo esc_url(get_theme_mod('electronics_retailer_explore_button_url',false));?>" class="text-capitalize"><?php echo esc_html(get_theme_mod('electronics_retailer_explore_button_label', ''));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('electronics_retailer_explore_button_label', ''));?></span>
                    </a>
                  </div>
                <?php }?>
              </div>
            </div>
          </div>
          <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12 col-12 d-flex gap-4 banner-product">
            <div class="banner-middle position-relative">
              <?php if ( get_theme_mod('electronics_retailer_middle_image_sec') != '' ) {?>
                <img class="middle-img" src="<?php echo esc_url(get_theme_mod('electronics_retailer_middle_image_sec')); ?>" alt="" title="<?php esc_attr_e('#slidecaption','electronics-retailer'); ?>">
              <?php }?>
              <div class="middle-content position-absolute">
                <?php if(get_theme_mod('electronics_retailer_middle_title') != '') {?>
                  <h2 class="middle-title mb-3 text-capitalize text-center"><?php echo esc_html(get_theme_mod('electronics_retailer_middle_title', '')) ?></h2>
                <?php }?>
                <?php if ( get_theme_mod('electronics_retailer_shop_button_label') != '' ) {?>
                  <div class ="shop-btn mt-4 text-center">
                    <a href="<?php echo esc_url(get_theme_mod('electronics_retailer_shop_button_url',false));?>" class="text-capitalize"><?php echo esc_html(get_theme_mod('electronics_retailer_shop_button_label', 'electronics-retailer'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('electronics_retailer_shop_button_label', ''));?></span>
                    </a>
                  </div>
                <?php }?>
              </div>
              <?php if(get_theme_mod('electronics_retailer_discount_text') != '' || get_theme_mod('electronics_retailer_add_discount') != '') {?>
                <div class="discount-box position-absolute">
                  <?php if(get_theme_mod('electronics_retailer_discount_text') != '') {?>
                    <p class="discount-text mb-0 text-capitalize"><?php echo esc_html(get_theme_mod('electronics_retailer_discount_text', '')) ?></p>
                  <?php }?>
                  <?php if(get_theme_mod('electronics_retailer_add_discount') != '') {?>
                    <p class="discount mb-0 text-uppercase"><?php echo esc_html(get_theme_mod('electronics_retailer_add_discount', '')) ?></p>
                  <?php }?>
                </div>
              <?php }?>
            </div>
            <div class="banner-right-main">
              <?php if(get_theme_mod('electronics_retailer_banner_right_title') != '' || get_theme_mod('electronics_retailer_banner_right_text') != '' || get_theme_mod('electronics_retailer_slider_product') != '') {?>
                <div class="banner-right">
                  <?php if(get_theme_mod('electronics_retailer_banner_right_title') != '') {?>
                    <h3 class="right-title mb-1 text-capitalize text-center"><?php echo esc_html(get_theme_mod('electronics_retailer_banner_right_title', '')) ?></h3>
                  <?php }?>
                  <?php if(get_theme_mod('electronics_retailer_banner_right_text') != '') {?>
                    <p class="right-text mb-3 text-capitalize text-center"><?php echo esc_html(get_theme_mod('electronics_retailer_banner_right_text', '')) ?></p>
                  <?php }?>
                  <?php if ( class_exists( 'WooCommerce' ) ) {
                    $electronics_retailer_selected_product_id = get_theme_mod('electronics_retailer_slider_product', '');
                    if (!empty($electronics_retailer_selected_product_id)) {
                      $electronics_retailer_args = array(
                        'post_type'      => 'product',
                        'p'              => $electronics_retailer_selected_product_id,
                        'posts_per_page' => 1,
                        'order'          => 'ASC',
                      );
                      $electronics_retailer_loop = new WP_Query($electronics_retailer_args);
                      while ($electronics_retailer_loop->have_posts()) : $electronics_retailer_loop->the_post();
                      global $product; ?>
                      <div class="product-box">
                        <?php
                          $electronics_retailer_sale_start_date = get_post_meta($product->get_id(), '_sale_price_dates_from', true);
                          $electronics_retailer_sale_end_date = get_post_meta($product->get_id(), '_sale_price_dates_to', true);
                        ?>
                        <div class="countdown-timer" 
                          data-sale-start="<?php echo esc_attr($electronics_retailer_sale_start_date); ?>" 
                          data-sale-end="<?php echo esc_attr($electronics_retailer_sale_end_date); ?>">
                          <span id="countdown"></span>
                        </div>
                        <div class="product-box-img">
                          <?php if (has_post_thumbnail($electronics_retailer_loop->post->ID)) {
                            echo get_the_post_thumbnail($electronics_retailer_loop->post->ID, 'shop_catalog', array('class' => 'right-img'));
                          } else {
                            echo '<img class="right-img" src="' . esc_url(woocommerce_placeholder_img_src()) . '" />';
                          } ?>
                        </div>
                        <div class="product-box-content mt-3 text-start">
                          <h3 class="deal-title"><a href="<?php echo esc_url(get_permalink($electronics_retailer_loop->post->ID)); ?>"><?php the_title(); ?></a></h3>
                          <p class="product-price">
                            <?php 
                              $electronics_retailer_sale_price = $product->get_sale_price();
                              if ($electronics_retailer_sale_price) {
                                echo wc_price($electronics_retailer_sale_price);
                              }
                            ?>
                          </p>
                          <?php
                          // Stock and sales data
                          $electronics_retailer_stock_quantity = $product->get_stock_quantity();
                          $electronics_retailer_total_sales = $product->get_total_sales();
                          $electronics_retailer_total_stock = $electronics_retailer_stock_quantity + $electronics_retailer_total_sales;

                          if ($electronics_retailer_total_stock > 0) {
                            $electronics_retailer_sold_percentage = ($electronics_retailer_total_sales / $electronics_retailer_total_stock) * 100;
                          ?>
                          <div class="stock-progress">
                            <div class="progress-bar" style="width: <?php echo esc_attr($electronics_retailer_sold_percentage); ?>%; background: linear-gradient(90deg, #32BDEE 0%, #C81786 100%);"></div>
                          </div>
                          <p class="stock-info">
                            <span class="product-sold"><?php echo esc_html($electronics_retailer_total_sales); ?><?php esc_html_e( ' sold', 'electronics-retailer' ); ?></span>
                            <span class="product-remaining"><?php echo esc_html($electronics_retailer_stock_quantity); ?><?php esc_html_e( ' Remaining', 'electronics-retailer' ); ?></span>
                          </p>
                          <?php } else { ?>
                            <p class="stock-info"><?php esc_html_e( 'Out of stock', 'electronics-retailer' ); ?></p>
                          <?php } ?>
                        </div>
                      </div>
                  <?php endwhile;
                    wp_reset_postdata();
                  }} ?>
                </div>
              <?php }?>
              <?php if(get_theme_mod('electronics_retailer_banner_bottom_title') != '' || get_theme_mod('electronics_retailer_banner_bottom_text') != '' || get_theme_mod('electronics_retailer_bottom_image_sec') != '') {?>
                <div class="banner-bottom">
                  <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-6 align-self-center">
                      <?php if(get_theme_mod('electronics_retailer_banner_bottom_title') != '') {?>
                        <h4 class="right-title mb-2 text-capitalize"><?php echo esc_html(get_theme_mod('electronics_retailer_banner_bottom_title', '')) ?></h4>
                      <?php }?>
                      <?php if(get_theme_mod('electronics_retailer_banner_bottom_text') != '') {?>
                        <p class="right-text mb-0 text-capitalize"><?php echo esc_html(get_theme_mod('electronics_retailer_banner_bottom_text', '')) ?></p>
                      <?php }?>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-6 align-self-center">
                      <?php if ( get_theme_mod('electronics_retailer_bottom_image_sec') != '' ) {?>
                        <img class="bottom-img" src="<?php echo esc_url(get_theme_mod('electronics_retailer_bottom_image_sec')); ?>" alt="" title="<?php esc_attr_e('#slidecaption','electronics-retailer'); ?>">
                      <?php }?>
                    </div>
                  </div>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>
  <?php do_action( 'electronics_retailer_after_banner' ); ?>

  <!-- Category Section -->
  <?php if (get_theme_mod('electronics_retailer_hide_show_category_section', true)) {?>
    <section id="category-section" class="py-5">
      <div class="owl-carousel">
        <?php if (class_exists('woocommerce')) { ?>
          <?php
          $electronics_retailer_args = array(
            'orderby'    => 'title',
            'order'      => 'ASC',
            'hide_empty' => true, // Only fetch categories with products
            'parent'     => 0
          );
          $electronics_retailer_product_categories = get_terms('product_cat', $electronics_retailer_args);

          if (!empty($electronics_retailer_product_categories)) {
            foreach ($electronics_retailer_product_categories as $electronics_retailer_product_category) {
              if ($electronics_retailer_product_category->count > 0) {
                $electronics_retailer_product_cat_id = $electronics_retailer_product_category->term_id;
                $electronics_retailer_cat_link = get_term_link($electronics_retailer_product_category);
                $electronics_retailer_thumbnail_id = get_term_meta($electronics_retailer_product_cat_id, 'thumbnail_id', true);
                $electronics_retailer_image_url = wp_get_attachment_url($electronics_retailer_thumbnail_id);
                if (!$electronics_retailer_image_url) {
                  $electronics_retailer_image_url = get_template_directory_uri() . '/assets/images/default-category.png';
                }
                ?>
                <div class="item">
                  <img class="category-image" src="<?php echo esc_url($electronics_retailer_image_url); ?>" alt="<?php echo esc_attr($electronics_retailer_product_category->name); ?>" />
                  <div class="category-content">
                    <a href="<?php echo esc_url($electronics_retailer_cat_link); ?>" class="category-name-btn">
                      <span class="category-name"><?php echo esc_html($electronics_retailer_product_category->name); ?></span>
                    </a>
                    <a href="<?php echo esc_url($electronics_retailer_cat_link); ?>" class="category-button text-uppercase"><?php echo esc_html(get_theme_mod('electronics_retailer_discover_button_label','discover now'));?></a>
                  </div>
                </div>
              <?php }
            }
          }?>
        <?php } ?>
      </div>
    </section>
  <?php }?>

  <div id="content-vw" class="entry-content">
    <div class="container">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. 
      ?>
    </div>
  </div>
</main>

<?php get_footer(); ?> 