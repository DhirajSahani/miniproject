<?php 
if (isset($_GET['import-demo']) && $_GET['import-demo'] == true) {


    // Function to install and activate plugins
    function real_estate_manager_import_demo_content() {
        // Define the plugins you want to install and activate
        $plugins = array(
            array(
                'slug' => 'contact-form-7',
                'file' => 'contact-form-7/wp-contact-form-7.php',
                'url'  => 'https://downloads.wordpress.org/plugin/contact-form-7.latest-stable.zip'
            ),
        );

        // Include required files for plugin installation
        include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
        include_once(ABSPATH . 'wp-admin/includes/file.php');
        include_once(ABSPATH . 'wp-admin/includes/misc.php');
        include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

        // Loop through each plugin
        foreach ($plugins as $plugin) {
            $plugin_file = WP_PLUGIN_DIR . '/' . $plugin['file'];

            // Check if the plugin is installed
            if (!file_exists($plugin_file)) {
                // If the plugin is not installed, download and install it
                $upgrader = new Plugin_Upgrader();
                $result = $upgrader->install($plugin['url']);

                // Check for installation errors
                if (is_wp_error($result)) {
                    error_log('Plugin installation failed: ' . $plugin['slug'] . ' - ' . $result->get_error_message());
                    echo 'Error installing plugin: ' . esc_html($plugin['slug']) . ' - ' . esc_html($result->get_error_message());
                    continue;
                }
            }

            // If the plugin exists but is not active, activate it
            if (file_exists($plugin_file) && !is_plugin_active($plugin['file'])) {
                $result = activate_plugin($plugin['file']);

                // Check for activation errors
                if (is_wp_error($result)) {
                    error_log('Plugin activation failed: ' . $plugin['slug'] . ' - ' . $result->get_error_message());
                    echo 'Error activating plugin: ' . esc_html($plugin['slug']) . ' - ' . esc_html($result->get_error_message());
                }
            }
        }
    }

    // Call the import function
    real_estate_manager_import_demo_content();
    // ------- Create Nav Menu --------
$real_estate_manager_menuname = 'Main Menus';
$real_estate_manager_bpmenulocation = 'primary-menu';
$real_estate_manager_menu_exists = wp_get_nav_menu_object($real_estate_manager_menuname);

if (!$real_estate_manager_menu_exists) {
    $real_estate_manager_menu_id = wp_create_nav_menu($real_estate_manager_menuname);

    // Create Home Page
    $real_estate_manager_home_title = 'Home';
    $real_estate_manager_home = array(
        'post_type' => 'page',
        'post_title' => $real_estate_manager_home_title,
        'post_content' => '',
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'home'
    );
    $real_estate_manager_home_id = wp_insert_post($real_estate_manager_home);

    // Assign Home Page Template
    add_post_meta($real_estate_manager_home_id, '_wp_page_template', 'page-template/front-page.php');

    // Update options to set Home Page as the front page
    update_option('page_on_front', $real_estate_manager_home_id);
    update_option('show_on_front', 'page');

    // Add Home Page to Menu
    wp_update_nav_menu_item($real_estate_manager_menu_id, 0, array(
        'menu-item-title' => __('Home', 'real-estate-manager'),
        'menu-item-classes' => 'home',
        'menu-item-url' => home_url('/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $real_estate_manager_home_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create About Us Page with Dummy Content
    $real_estate_manager_about_title = 'About Us';
    $real_estate_manager_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $real_estate_manager_about = array(
        'post_type' => 'page',
        'post_title' => $real_estate_manager_about_title,
        'post_content' => $real_estate_manager_about_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'about-us'
    );
    $real_estate_manager_about_id = wp_insert_post($real_estate_manager_about);

    // Add About Us Page to Menu
    wp_update_nav_menu_item($real_estate_manager_menu_id, 0, array(
        'menu-item-title' => __('About Us', 'real-estate-manager'),
        'menu-item-classes' => 'about-us',
        'menu-item-url' => home_url('/about-us/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $real_estate_manager_about_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Services Page with Dummy Content
    $real_estate_manager_services_title = 'Services';
    $real_estate_manager_services_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $real_estate_manager_services = array(
        'post_type' => 'page',
        'post_title' => $real_estate_manager_services_title,
        'post_content' => $real_estate_manager_services_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'services'
    );
    $real_estate_manager_services_id = wp_insert_post($real_estate_manager_services);

    // Add Services Page to Menu
    wp_update_nav_menu_item($real_estate_manager_menu_id, 0, array(
        'menu-item-title' => __('Services', 'real-estate-manager'),
        'menu-item-classes' => 'services',
        'menu-item-url' => home_url('/services/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $real_estate_manager_services_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Pages Page with Dummy Content
    $real_estate_manager_pages_title = 'Pages';
    $real_estate_manager_pages_content = '<h2>Our Pages</h2>
    <p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>';
    $real_estate_manager_pages = array(
        'post_type' => 'page',
        'post_title' => $real_estate_manager_pages_title,
        'post_content' => $real_estate_manager_pages_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'pages'
    );
    $real_estate_manager_pages_id = wp_insert_post($real_estate_manager_pages);

    // Add Pages Page to Menu
    wp_update_nav_menu_item($real_estate_manager_menu_id, 0, array(
        'menu-item-title' => __('Pages', 'real-estate-manager'),
        'menu-item-classes' => 'pages',
        'menu-item-url' => home_url('/pages/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $real_estate_manager_pages_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Contact Page with Dummy Content
    $real_estate_manager_contact_title = 'Contact';
    $real_estate_manager_contact_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $real_estate_manager_contact = array(
        'post_type' => 'page',
        'post_title' => $real_estate_manager_contact_title,
        'post_content' => $real_estate_manager_contact_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'contact'
    );
    $real_estate_manager_contact_id = wp_insert_post($real_estate_manager_contact);

    // Add Contact Page to Menu
    wp_update_nav_menu_item($real_estate_manager_menu_id, 0, array(
        'menu-item-title' => __('Contact', 'real-estate-manager'),
        'menu-item-classes' => 'contact',
        'menu-item-url' => home_url('/contact/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $real_estate_manager_contact_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Set the menu location if it's not already set
    if (!has_nav_menu($real_estate_manager_bpmenulocation)) {
        $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
        if (empty($locations)) {
            $locations = array();
        }
        $locations[$real_estate_manager_bpmenulocation] = $real_estate_manager_menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}

        //---Header--//
         set_theme_mod('real_estate_manager_topbar_visibility', 'true');
        set_theme_mod('real_estate_manager_topbar_text_top', 'Special Offer: Get 1 Month Free When You List with Us Today!');
        set_theme_mod('real_estate_manager_header_button_first', 'Explore Now');
        set_theme_mod('real_estate_manager_header_link_first', '#');

        // Slider Section
        set_theme_mod('real_estate_manager_slider_arrows', true);
        set_theme_mod('real_estate_manager_slider_short_heading', 'Expert guidance and personalized service for all your real estate needs');
        set_theme_mod('real_estate_manager_product_btn_text1', 'Explore');
        set_theme_mod('real_estate_manager_product_btn_link1', '#');

        for ($i = 1; $i <= 4; $i++) {
            $real_estate_manager_title = 'Unlocking Doors to Your Future';

            // Create post object
            $my_post = array(
                'post_title'    => wp_strip_all_tags($real_estate_manager_title),
                'post_status'   => 'publish',
                'post_type'     => 'page',
            );

            // Insert the post into the database
            $post_id = wp_insert_post($my_post);

            if ($post_id) {
                // Set the theme mod for the slider page
                set_theme_mod('real_estate_manager_slider_page' . $i, $post_id);

                $image_url = get_template_directory_uri() . '/assets/images/slider-img.png';
                $image_id = media_sideload_image($image_url, $post_id, null, 'id');

                if (!is_wp_error($image_id)) {
                    // Set the downloaded image as the post's featured image
                    set_post_thumbnail($post_id, $image_id);
                }
            }
        }




    // Set default values for the real estate manager projects
set_theme_mod('real_estate_manager_projetcs_number', '3');
set_theme_mod('real_estate_manager_projetcs_text1', 'Sales');
set_theme_mod('real_estate_manager_projetcs_text2', 'Rentals');
set_theme_mod('real_estate_manager_projetcs_text3', 'Invest');

// Set default shortcodes for each form (replace these with your actual form shortcodes)
set_theme_mod('real_estate_manager_projetcs_shortcode1', '');
set_theme_mod('real_estate_manager_projetcs_shortcode2', '');
set_theme_mod('real_estate_manager_projetcs_shortcode3', '');

// Set default values for the contact form settings for Real Estate Manager Contact Form
$cf7title = 'Real Estate Manager Contact Form'; // Modify the title as needed
$cf7content = '
<div class="property-search-form" method="get" action="/">
    <div class="form-group">
        <label for="property-category">Categories
        <select id="property-category" name="category">
            <option value="">Property Category</option>
            <option value="house">House</option>
            <option value="apartment">Apartment</option>
            <option value="commercial">Commercial</option>
        </select></label>
    </div>
    <div class="form-group">
        <label for="property-city">City
        <select id="property-city" name="city">
            <option value="">Location</option>
            <option value="new-york">New York</option>
            <option value="los-angeles">Los Angeles</option>
            <option value="chicago">Chicago</option>
        </select></label>
    </div>
    <div class="form-group">
        <label for="property-size">Size
        <select id="property-size" name="size">
            <option value="">Select Size</option>
            <option value="1bhk">1Bhk</option>
            <option value="2bhk">2Bhk</option>
            <option value="3bhk">3Bhk</option>
        </select></label>
    </div>
    <div class="form-group">
        <label for="property-price">Price
        <select id="property-price" name="price">
            <option value="">Sale Price</option>
            <option value="under-100k">Under $100K</option>
            <option value="100k-200k">$100K - $200K</option>
            <option value="200k-plus">$200K+</option>
        </select></label>
    </div>
    <div class="form-group">
        <label for="property-type">Buy / Rent
        <select id="property-type" name="type">
            <option value="">Type</option>
            <option value="buy">Buy</option>
            <option value="rent">Rent</option>
        </select></label>
    </div>
    <div>
        <button type="submit" class="search-button">Search</button>
    </div>
</div>
';

// Insert the contact form post
$cf7_post = array(
    'post_title'   => wp_strip_all_tags($cf7title),
    'post_content' => $cf7content,
    'post_status'  => 'publish',
    'post_type'    => 'wpcf7_contact_form',
);

// Insert post and get post ID
$cf7post_id = wp_insert_post($cf7_post);

// Check if the post insertion was successful
if (!is_wp_error($cf7post_id)) {
    // Add form content to the post meta
    add_post_meta($cf7post_id, "_form", $cf7content);

    // Prepare email settings for the contact form
    $cf7mail_data = array(
        'subject'         => '[_site_title] "[your-subject]"',
        'sender'          => '[_site_title] <support@example.com>',
        'body'            => 'From: [your-name] <[your-email]>\nSubject: [your-subject]\nMessage Body:\n[your-message]\n\n--\nThis e-mail was sent from a contact form on [_site_title] ([_site_url])',
        'recipient'       => '[_site_admin_email]',
        'additional_headers' => 'Reply-To: [your-email]',
        'attachments'     => '',
        'use_html'        => 0,
        'exclude_blank'   => 0
    );

    // Add email data to the post meta
    add_post_meta($cf7post_id, "_mail", $cf7mail_data);

    // Generate the contact form shortcode
    $cf7shortcode = '[contact-form-7 id="' . $cf7post_id . '" title="' . $cf7title . '"]';

    // Save the shortcode in the theme settings
    set_theme_mod('real_estate_manager_projetcs_shortcode1', $cf7shortcode);
    set_theme_mod('real_estate_manager_projetcs_shortcode2', $cf7shortcode);
    set_theme_mod('real_estate_manager_projetcs_shortcode3', $cf7shortcode);
} else {
    // Handle errors, if any
    echo 'Error creating the form post: ' . $cf7post_id->get_error_message();
}

// Display the contact form using the saved shortcode
$cf7_shortcode = get_theme_mod('real_estate_manager_projetcs_shortcode1');
$cf7_shortcode = get_theme_mod('real_estate_manager_projetcs_shortcode2');
$cf7_shortcode = get_theme_mod('real_estate_manager_projetcs_shortcode3');

// Check if the shortcode exists in the theme settings
if ($cf7_shortcode) {
    echo 'Generated shortcode: ' . $cf7_shortcode . '<br>';
    echo do_shortcode($cf7_shortcode); // Output the contact form using the shortcode
} else {
    echo 'Error: Contact form shortcode not found in theme mod.';
}

 // Our Services Section //
    set_theme_mod('real_estate_manager_offer_section_text', 'Categories Listing');

    set_theme_mod('real_estate_manager_offer_section_tittle', 'Discover Our Exclusive Selection of Premier Properties for You');

    set_theme_mod('real_estate_manager_offer_section_category', 'postcategory1');

    set_theme_mod('real_estate_manager_posts_to_show', '4');

    set_theme_mod('real_estate_manager_home_location1', 'Buffalo, NY');
    set_theme_mod('real_estate_manager_home_location2', 'Buffalo, NY');
    set_theme_mod('real_estate_manager_home_location3', 'Buffalo, NY');
    set_theme_mod('real_estate_manager_home_location4', 'Buffalo, NY');

    set_theme_mod('real_estate_manager_home_date1', 'June 20, 2020');
    set_theme_mod('real_estate_manager_home_date2', 'June 20, 2020');
    set_theme_mod('real_estate_manager_home_date3', 'June 20, 2020');
    set_theme_mod('real_estate_manager_home_date4', 'June 20, 2020');

    set_theme_mod('real_estate_manager_no_bedrooms1', '4');
    set_theme_mod('real_estate_manager_no_bedrooms2', '4');
    set_theme_mod('real_estate_manager_no_bedrooms3', '4');
    set_theme_mod('real_estate_manager_no_bedrooms4', '4');

    set_theme_mod('real_estate_manager_no_bathrooms1', '4.5');
    set_theme_mod('real_estate_manager_no_bathrooms2', '4.5');
    set_theme_mod('real_estate_manager_no_bathrooms3', '4.5');
    set_theme_mod('real_estate_manager_no_bathrooms4', '4.5');

    set_theme_mod('real_estate_manager_home_area1', '4800sq ft');
    set_theme_mod('real_estate_manager_home_area2', '4800sq ft');
    set_theme_mod('real_estate_manager_home_area3', '4800sq ft');
    set_theme_mod('real_estate_manager_home_area4', '4800sq ft');

    set_theme_mod('real_estate_manager_courses_prices1', '$7,40,000');
    set_theme_mod('real_estate_manager_courses_prices2', '$7,40,000');
    set_theme_mod('real_estate_manager_courses_prices3', '$7,40,000');
    set_theme_mod('real_estate_manager_courses_prices4', '$7,40,000');

    // Define post category names and post titles
    $real_estate_manager_category_names = array('postcategory1');
    $real_estate_manager_title_array = array(
        array("Blissful Nest", "Tranquil Adobe", "Serenity Place", "The White Town")
    );

    foreach ($real_estate_manager_category_names as $real_estate_manager_index => $real_estate_manager_category_name) {
        // Create or retrieve the post category term ID
        $real_estate_manager_term = term_exists($real_estate_manager_category_name, 'category');
        if ($real_estate_manager_term === 0 || $real_estate_manager_term === null) {
            // If the term does not exist, create it
            $real_estate_manager_term = wp_insert_term($real_estate_manager_category_name, 'category');
        }
        if (is_wp_error($real_estate_manager_term)) {
            error_log('Error creating category: ' . $real_estate_manager_term->get_error_message());
            continue; // Skip to the next iteration if category creation fails
        }

        for ($real_estate_manager_i = 0; $real_estate_manager_i < 4; $real_estate_manager_i++) {
            // Create post content
            $real_estate_manager_title = $real_estate_manager_title_array[$real_estate_manager_index][$real_estate_manager_i];

            // Create post post object
            $real_estate_manager_my_post = array(
                'post_title'    => wp_strip_all_tags($real_estate_manager_title),
                'post_status'   => 'publish',
                'post_type'     => 'post', // Post type set to 'post'
            );

            // Insert the post into the database
            $real_estate_manager_post_id = wp_insert_post($real_estate_manager_my_post);

            if (is_wp_error($real_estate_manager_post_id)) {
                error_log('Error creating post: ' . $real_estate_manager_post_id->get_error_message());
                continue; // Skip to the next post if creation fails
            }

            // Assign the category to the post
            wp_set_post_categories($real_estate_manager_post_id, array((int)$real_estate_manager_term['term_id']));

            // Handle the featured image using media_sideload_image
            $real_estate_manager_image_url = get_stylesheet_directory_uri() . '/assets/images/post-img' . ($real_estate_manager_i + 1) . '.png';
            $real_estate_manager_image_id = media_sideload_image($real_estate_manager_image_url, $real_estate_manager_post_id, null, 'id');

            if (is_wp_error($real_estate_manager_image_id)) {
                error_log('Error downloading image: ' . $real_estate_manager_image_id->get_error_message());
                continue; // Skip to the next post if image download fails
            }

            // Assign featured image to post
            set_post_thumbnail($real_estate_manager_post_id, $real_estate_manager_image_id);
        }
    }



    }

?>