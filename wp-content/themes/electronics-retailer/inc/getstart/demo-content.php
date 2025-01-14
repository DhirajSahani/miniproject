<div class="theme-offer">
	<?php 
        // Check if the demo import has been completed
        $electronics_retailer_demo_import_completed = get_option('electronics_retailer_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($electronics_retailer_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'electronics-retailer') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('VIEW SITE', 'electronics-retailer') . '</a></span>';
        }

		// POST and update the customizer and other related data of THE COURIER SERVICESPRO
        if (isset($_POST['submit'])) {

        // Check if woocommerce is installed and activated
        if (!is_plugin_active('woocommerce/woocommerce.php')) {
          // Install the plugin if it doesn't exist
          $electronics_retailer_plugin_slug = 'woocommerce';
          $electronics_retailer_plugin_file = 'woocommerce/woocommerce.php';

          // Check if plugin is installed
          $electronics_retailer_installed_plugins = get_plugins();
          if (!isset($electronics_retailer_installed_plugins[$electronics_retailer_plugin_file])) {
              include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
              include_once(ABSPATH . 'wp-admin/includes/file.php');
              include_once(ABSPATH . 'wp-admin/includes/misc.php');
              include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

              // Install the plugin
              $electronics_retailer_upgrader = new Plugin_Upgrader();
              $electronics_retailer_upgrader->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
          }
          // Activate the plugin
          activate_plugin($electronics_retailer_plugin_file);
        }

        //Check if  YITH WooCommerce Wishlist is installed and activated
        if (!is_plugin_active('yith-woocommerce-wishlist/yith-woocommerce-wishlist.php')) {       
            // Install the plugin if it doesn't exist
            $electronics_retailer_plugin_slug = 'yith-woocommerce-wishlist';
            $electronics_retailer_plugin_file = 'yith-woocommerce-wishlist/yith-woocommerce-wishlist.php';

            // Check if plugin is installed
            $electronics_retailer_installed_plugins = get_plugins();
            if (!isset($electronics_retailer_installed_plugins[$electronics_retailer_plugin_file])) {
            include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
            include_once(ABSPATH . 'wp-admin/includes/file.php');
            include_once(ABSPATH . 'wp-admin/includes/misc.php');
            include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

            // Install the plugin
              $electronics_retailer_upgrader = new Plugin_Upgrader();
              $electronics_retailer_upgrader->install('https://downloads.wordpress.org/plugin/yith-woocommerce-wishlist.latest-stable.zip');
            }

            // Activate the plugin
             activate_plugin($electronics_retailer_plugin_file);
        }

        // ------- Create Nav Menu --------
        $electronics_retailer_menuname = 'Main Menus';
        $electronics_retailer_bpmenulocation = 'primary';
        $electronics_retailer_menu_exists = wp_get_nav_menu_object($electronics_retailer_menuname);

        if (!$electronics_retailer_menu_exists) {
            $electronics_retailer_menu_id = wp_create_nav_menu($electronics_retailer_menuname);

            // Create Home Page
            $electronics_retailer_home_title = 'Home';
            $electronics_retailer_home = array(
                'post_type' => 'page',
                'post_title' => $electronics_retailer_home_title,
                'post_content' => '',
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'home'
            );
            $electronics_retailer_home_id = wp_insert_post($electronics_retailer_home);
            // Assign Home Page Template
            add_post_meta($electronics_retailer_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
            // Update options to set Home Page as the front page
            update_option('page_on_front', $electronics_retailer_home_id);
            update_option('show_on_front', 'page');
            // Add Home Page to Menu
            wp_update_nav_menu_item($electronics_retailer_menu_id, 0, array(
                'menu-item-title' => __('Home', 'electronics-retailer'),
                'menu-item-classes' => 'home',
                'menu-item-url' => home_url('/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $electronics_retailer_home_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create Pages Page with Dummy Content
            $electronics_retailer_pages_title = 'Pages';
            $electronics_retailer_pages_content = '
            Explore all the pages we have on our website. Find information about our services, company, and more.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
            $electronics_retailer_pages = array(
                'post_type' => 'page',
                'post_title' => $electronics_retailer_pages_title,
                'post_content' => $electronics_retailer_pages_content,
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'pages'
            );
            $electronics_retailer_pages_id = wp_insert_post($electronics_retailer_pages);
            // Add Pages Page to Menu
            wp_update_nav_menu_item($electronics_retailer_menu_id, 0, array(
                'menu-item-title' => __('Pages', 'electronics-retailer'),
                'menu-item-classes' => 'pages',
                'menu-item-url' => home_url('/pages/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $electronics_retailer_pages_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create About Us Page with Dummy Content
            $electronics_retailer_about_title = 'About Us';
            $electronics_retailer_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br>
            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
            $electronics_retailer_about = array(
                'post_type' => 'page',
                'post_title' => $electronics_retailer_about_title,
                'post_content' => $electronics_retailer_about_content,
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'about-us'
            );
            $electronics_retailer_about_id = wp_insert_post($electronics_retailer_about);
            // Add About Us Page to Menu
            wp_update_nav_menu_item($electronics_retailer_menu_id, 0, array(
                'menu-item-title' => __('About Us', 'electronics-retailer'),
                'menu-item-classes' => 'about-us',
                'menu-item-url' => home_url('/about-us/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $electronics_retailer_about_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Set the menu location if it's not already set
            if (!has_nav_menu($electronics_retailer_bpmenulocation)) {
                $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                if (empty($locations)) {
                    $locations = array();
                }
                $locations[$electronics_retailer_bpmenulocation] = $electronics_retailer_menu_id;
                set_theme_mod('nav_menu_locations', $locations);
            }
        }

        // Set the demo import completion flag
		update_option('electronics_retailer_demo_import_completed', true);
		// Display success message and "View Site" button
		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'electronics-retailer') . '</p>';
		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('VIEW SITE', 'electronics-retailer') . '</a></span>';
        //end 





















        // Top Bar
        set_theme_mod( 'electronics_retailer_topbar_text', 'Free Shipping on Orders Over $50! Limited Time Offer – Shop Now!' );
        set_theme_mod( 'electronics_retailer_phone_number', '(123) 456-7890' );
        set_theme_mod( 'electronics_retailer_site_text', 'support@example.com' );



        // Left Banner
        set_theme_mod( 'electronics_retailer_featured_image_sec', get_template_directory_uri().'/assets/images/banner.png' );
        set_theme_mod( 'electronics_retailer_banner_small_text', 'Electronics Market' );
        set_theme_mod( 'electronics_retailer_banner_title', 'Upgrade Your Life with Cutting-Edge Electronics!' );
        set_theme_mod( 'electronics_retailer_banner_para_text', 'Discover the latest in electronics at unbeatable prices. From cutting-edge gadgets to everyday essentials, we bring you quality, innovation, and style. Shop now for smarter, seamless living!' );
        set_theme_mod( 'electronics_retailer_explore_button_label', 'Explore more' );
        set_theme_mod( 'electronics_retailer_explore_button_url', '#' );


        // Middle Banner
        set_theme_mod( 'electronics_retailer_middle_image_sec', get_template_directory_uri().'/assets/images/middle-banner.png' );
        set_theme_mod( 'electronics_retailer_middle_title', 'Immerse Yourself in Sound: Exclusive Headphone Deals Await!' );
        set_theme_mod( 'electronics_retailer_shop_button_label', 'SHOP NOW' );
        set_theme_mod( 'electronics_retailer_shop_button_url', '#' );
        set_theme_mod( 'electronics_retailer_discount_text', 'Get Upto' );
        set_theme_mod( 'electronics_retailer_add_discount', '50% OFF' );



        // Right Banner
        set_theme_mod( 'electronics_retailer_banner_right_title', 'Deal of the Day' );
        set_theme_mod( 'electronics_retailer_banner_right_text', 'Todays Special Price: Dont Miss Out! Visit Daily to Win!' );
        



        // Set a single product for the slider
        set_theme_mod('electronics_retailer_slider_product', 'MacBook pro 16 inch');

        // Define product titles and other details
        $electronics_retailer_products = array(
            array(
                "title" => "MacBook pro 16 inch",
                "content" => "Powerful and reliable MacBook with a 16-inch Retina display.",
                "price" => "2500.00",
                "regular_price" => "3000.00",
                "stock" => 10 // Quantity in stock
            ),
            array(
                "title" => "MacBook pro 15 inch",
                "content" => "Sleek MacBook with a 15-inch Retina display.",
                "price" => "2200.00",
                "regular_price" => "2700.00",
                "stock" => 8
            ),
            array(
                "title" => "MacBook pro 10 inch",
                "content" => "Compact and lightweight MacBook with a 10-inch display.",
                "price" => "1800.00",
                "regular_price" => "2200.00",
                "stock" => 15
            ),
            array(
                "title" => "MacBook pro 20s inch",
                "content" => "Massive and stunning MacBook with a 20-inch Retina display.",
                "price" => "3200.00",
                "regular_price" => "3700.00",
                "stock" => 5
            )
        );

        // Loop to create products
        foreach ($electronics_retailer_products as $product_data) {
            // Create product post object
            $electronics_retailer_my_post = array(
                'post_title'    => wp_strip_all_tags($product_data["title"]),
                'post_content'  => $product_data["content"],
                'post_status'   => 'publish', // Immediately publish the product
                'post_type'     => 'product', // Post type set to 'product'
            );

            // Insert the product into the database
            $electronics_retailer_post_id = wp_insert_post($electronics_retailer_my_post);

            if (is_wp_error($electronics_retailer_post_id)) {
                error_log('Error creating product: ' . $electronics_retailer_post_id->get_error_message());
                continue; // Skip to the next product if creation fails
            }

            // Set product as simple product and assign a price
            update_post_meta($electronics_retailer_post_id, '_price', $product_data["price"]); // Set price
            update_post_meta($electronics_retailer_post_id, '_regular_price', $product_data["regular_price"]); // Set regular price
            update_post_meta($electronics_retailer_post_id, '_stock_status', $product_data["stock"] > 0 ? 'instock' : 'outofstock'); // Set stock status
            update_post_meta($electronics_retailer_post_id, '_manage_stock', 'yes'); // Enable stock management
            update_post_meta($electronics_retailer_post_id, '_stock', $product_data["stock"]); // Set stock quantity
            update_post_meta($electronics_retailer_post_id, '_product_type', 'simple'); // Set product type to 'simple'

            // Handle the featured image using media_sideload_image
            $electronics_retailer_image_url = get_template_directory_uri() . '/assets/images/product-img.png'; // Image URL
            $electronics_retailer_image_id = media_sideload_image($electronics_retailer_image_url, $electronics_retailer_post_id, null, 'id');

            if (is_wp_error($electronics_retailer_image_id)) {
                error_log('Error downloading image: ' . $electronics_retailer_image_id->get_error_message());
                continue; // Skip to the next product if image download fails
            }

            // Assign featured image to product
            set_post_thumbnail($electronics_retailer_post_id, $electronics_retailer_image_id);
        }

        // Banner Bottom
        set_theme_mod( 'electronics_retailer_banner_bottom_title', 'New Dual Sense Console' );
        set_theme_mod( 'electronics_retailer_banner_bottom_text', 'For PlayStation 5' );
        set_theme_mod( 'electronics_retailer_bottom_image_sec', get_template_directory_uri().'/assets/images/bottom-img.png' );


        // Category Section
        set_theme_mod( 'electronics_retailer_discover_button_label', 'discover now' );

        // Define category names
        $electronics_retailer_category_array = array(
            "Smartphones",
            "Laptops",
            "Cameras & Drones",
            "Audio Devices",
            "Television",
            "Gaming Consoles"
        );

        // Define product titles (one for each category)
        $electronics_retailer_product_titles = array(
            "MacBook Pro 16 inch",
            "iPhone 14 Pro",
            "iPad Pro 12.9",
            "Dell UltraSharp 27",
            "Sony WH-1000XM5",
            "Anker USB-C Hub"
        );

        // Define category images (one for each category)
        $electronics_retailer_category_images = array(
            get_template_directory_uri() . '/assets/images/category1.png',
            get_template_directory_uri() . '/assets/images/category2.png',
            get_template_directory_uri() . '/assets/images/category3.png',
            get_template_directory_uri() . '/assets/images/category4.png',
            get_template_directory_uri() . '/assets/images/category5.png',
            get_template_directory_uri() . '/assets/images/category6.png'
        );

        // Define product content (same for all products in this example)
        $electronics_retailer_product_content = 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';

        // Loop to create categories and one product per category
        foreach ($electronics_retailer_category_array as $index => $category_name) {
            // Create or retrieve the category term
            $electronics_retailer_category = term_exists($category_name, 'product_cat');
            if ($electronics_retailer_category === 0 || $electronics_retailer_category === null) {
                $electronics_retailer_category = wp_insert_term($category_name, 'product_cat');
            }

            if (is_wp_error($electronics_retailer_category)) {
                error_log('Error creating category: ' . $electronics_retailer_category->get_error_message());
                continue; // Skip to the next category if creation fails
            }

            // Get the term ID of the category
            $category_id = (int) $electronics_retailer_category['term_id'];

            // Add the category image (if applicable)
            if (!empty($electronics_retailer_category_images[$index])) {
                $image_url = $electronics_retailer_category_images[$index];
                $image_id = media_sideload_image($image_url, 0, null, 'id');

                if (!is_wp_error($image_id)) {
                    // Assign the image as category thumbnail
                    update_term_meta($category_id, 'thumbnail_id', $image_id);
                } else {
                    error_log('Error downloading category image: ' . $image_id->get_error_message());
                }
            }

            // Create the product associated with this category
            $product_title = $electronics_retailer_product_titles[$index];
            $electronics_retailer_my_post = array(
                'post_title'    => wp_strip_all_tags($product_title),
                'post_content'  => $electronics_retailer_product_content,
                'post_status'   => 'publish',
                'post_type'     => 'product',
            );

            // Insert the product into the database
            $electronics_retailer_post_id = wp_insert_post($electronics_retailer_my_post);

            if (is_wp_error($electronics_retailer_post_id)) {
                error_log('Error creating product: ' . $electronics_retailer_post_id->get_error_message());
                continue; // Skip to the next product if creation fails
            }

            // Set product as simple product and assign a price
            update_post_meta($electronics_retailer_post_id, '_price', '49.00'); // Set price
            update_post_meta($electronics_retailer_post_id, '_regular_price', '99.00'); // Set regular price
            update_post_meta($electronics_retailer_post_id, '_stock_status', 'instock'); // Set stock status
            update_post_meta($electronics_retailer_post_id, '_manage_stock', 'no'); // Not managing stock
            update_post_meta($electronics_retailer_post_id, '_product_type', 'simple'); // Set product type to 'simple'

            // Assign the product to the category
            wp_set_object_terms($electronics_retailer_post_id, $category_id, 'product_cat');

            // Add a featured image to the product
            $product_image_url = get_template_directory_uri() . '/assets/images/product-img' . ($index + 1) . '.png';
            $product_image_id = media_sideload_image($product_image_url, $electronics_retailer_post_id, null, 'id');

            if (!is_wp_error($product_image_id)) {
                set_post_thumbnail($electronics_retailer_post_id, $product_image_id);
            } else {
                error_log('Error downloading product image: ' . $product_image_id->get_error_message());
            }
        }

        //Copyright Text
        set_theme_mod( 'electronics_retailer_footer_text', 'By VWThemes' );  
     
        }
    ?>
  
	<p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for Electronics Retailer', 'electronics-retailer'); ?></p>
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=electronics_retailer_guide" method="POST" onsubmit="return validate(this);">
        <?php if (!get_option('electronics_retailer_demo_import_completed')) : ?>
            <input class="run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer', 'electronics-retailer'); ?>" class="button button-primary button-large">
        <?php endif; ?>
        <div id="spinner" style="display:none;">         
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/spinner.png" alt="" />
        </div>
    </form>
    <script type="text/javascript">
        function validate(form) {
            if (confirm("Do you really want to import the theme demo content?")) {
                // Show the spinner
                document.getElementById('spinner').style.display = 'block';
                // Allow the form to be submitted
                return true;
            } 
            else {
                return false;
            }
        }
    </script>
</div>
