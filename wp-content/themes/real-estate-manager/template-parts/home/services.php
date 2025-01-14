<?php
/**
 * Template part for displaying the services section
 *
 * @package Real Estate Manager
 * @subpackage real_estate_manager
 */

// Get the courses setting.
$real_estate_manager_courses = get_theme_mod('real_estate_manager_courses_setting', true);

if ($real_estate_manager_courses == '1') {
?>
<section id="cat-list" class="py-5 px-md-0 px-3">
  <div class="container">
    <div class="text-start main-sec-title">
      <?php if (get_theme_mod('real_estate_manager_offer_section_text')) { ?>
        <p class="serv-description mb-2"><?php echo esc_html(get_theme_mod('real_estate_manager_offer_section_text')); ?></p>
      <?php } ?>
      <?php if (get_theme_mod('real_estate_manager_offer_section_tittle')) { ?>
        <h2 class="my 2"><?php echo esc_html(get_theme_mod('real_estate_manager_offer_section_tittle')); ?></h2>
      <?php } ?>
    </div>
    
    <div class="row mt-4">
      <?php
        // Get the selected post category and number of posts to show.
        $real_estate_manager_post_category = get_theme_mod('real_estate_manager_offer_section_category');
        $real_estate_manager_posts_to_show = get_theme_mod('real_estate_manager_posts_to_show', 4);

        if ($real_estate_manager_post_category) {
          // Query for posts in the selected category.
          $real_estate_manager_page_query = new WP_Query(array(
            'category_name' => esc_html($real_estate_manager_post_category),
            'posts_per_page' => $real_estate_manager_posts_to_show
          ));

          if ($real_estate_manager_page_query->have_posts()) {
            $real_estate_manager_post_count = 0;

            // Loop through the posts.
            while ($real_estate_manager_page_query->have_posts()) : $real_estate_manager_page_query->the_post();
              $real_estate_manager_post_count++;
      ?>
            <div class="col-lg-3 col-md-4 mb-4 p-2">
              <div class="cat-inner-box">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title_attribute(); ?>"/>
                  <!-- "For Sale" Text on the image -->
                  <div class="for-sale-label"><?php esc_html_e('For Sale', 'real-estate-manager'); ?></div>
                <?php else : ?>
                  <!-- "For Sale" Text on the color block -->
                  <div class="course-color">
                    <div class="for-sale-label"><?php esc_html_e('For Sale', 'real-estate-manager'); ?></div>
                  </div>
                <?php endif; ?>

                <div class="mainserv-content">
                  <div class="row my-2">
                    <div class="col-lg-9 col-md-8 col-8 align-self-center">
                      <div class="offer-box">
                        <h3 class="mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-4 align-self-center">
                      <div class="bottom-icons">
                        <div class="share-icon">
                            <i class="fas fa-share-alt share-box"></i>
                            <div class="share-options">
                                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <?php if ($real_estate_manager_home_location = get_theme_mod('real_estate_manager_home_location' . $real_estate_manager_post_count)) { ?>
                    <p class="home-location mb-0"><i class="fas fa-map-marker-alt pe-2"></i><span class="location-text"><?php echo esc_html($real_estate_manager_home_location); ?></span></p>
                  <?php } ?>

                  <?php if ($real_estate_manager_home_date = get_theme_mod('real_estate_manager_home_date' . $real_estate_manager_post_count)) { ?>
                    <p class="home-date my-2"><span class="date-text pe-2"><?php esc_html_e('Added:', 'real-estate-manager'); ?></span> <span class="main-date"><?php echo esc_html($real_estate_manager_home_date); ?></span></p>
                  <?php } ?>

                  <div class="car-info my-2">
                    <div class="row">
                      <?php if ($real_estate_manager_no_bedrooms = get_theme_mod('real_estate_manager_no_bedrooms' . $real_estate_manager_post_count)) { ?>
                        <div class="col-lg-4 col-md-4 col-4 align-self-center home_fartures text-center">
                          <p class="mb-1 feature-title"><?php esc_html_e('Bedrooms', 'real-estate-manager'); ?></p>
                          <span class="features-text"><i class="fas fa-bed"></i> <?php echo esc_html($real_estate_manager_no_bedrooms); ?> </span>
                        </div>
                      <?php } ?>
                      <?php if ($real_estate_manager_no_bathrooms = get_theme_mod('real_estate_manager_no_bathrooms' . $real_estate_manager_post_count)) { ?>
                        <div class="col-lg-4 col-md-4 col-4 align-self-center home_fartures text-center">
                          <p class="mb-1 feature-title"><?php esc_html_e('Bathrooms', 'real-estate-manager'); ?></p>
                          <span class="features-text"><i class="fas fa-bath"></i> <?php echo esc_html($real_estate_manager_no_bathrooms); ?></span>
                        </div>
                      <?php } ?>
                      <?php if ($real_estate_manager_home_area = get_theme_mod('real_estate_manager_home_area' . $real_estate_manager_post_count)) { ?>
                        <div class="col-lg-4 col-md-4 col-4 align-self-center home_fartures text-center">
                          <p class="mb-1 feature-title"><?php esc_html_e('Area', 'real-estate-manager'); ?></p>
                          <span class="features-text"><?php echo esc_html($real_estate_manager_home_area); ?></span>
                        </div>
                      <?php } ?>
                    </div>
                  </div>

                  <?php if ($real_estate_manager_price = get_theme_mod('real_estate_manager_courses_prices' . $real_estate_manager_post_count)) { ?>
                    <p class="cours-price mt-0 mb-1"><?php echo esc_html($real_estate_manager_price); ?></p>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata(); // Reset post data after the custom query.
          } else {
            // Optionally display a message if no posts are found.
            echo '<div class="no-postfound">' . esc_html__('No courses found.', 'real-estate-manager') . '</div>';
          }
        }
      ?>
    </div>
  </div>
</section>
<?php 
} // End of the if statement for courses.
?>