<?php
/**
 * Electronics Retailer   Theme Customizer
 *
 * @package Electronics Retailer  
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function electronics_retailer_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'electronics_retailer_custom_controls' );

function electronics_retailer_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.logo .site-title a',
	 	'render_callback' => 'electronics_retailer_Customize_partial_blogname',
	));

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => 'p.site-description',
		'render_callback' => 'electronics_retailer_Customize_partial_blogdescription',
	));

	// add home page setting pannel
	$wp_customize->add_panel( 'electronics_retailer_panel_id', array(
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__( 'Homepage Settings', 'electronics-retailer' ),
		'priority' => 10,
	));

	//Menus Settings
	$wp_customize->add_section( 'electronics_retailer_menu_section' , array(
    	'title' => __( 'Menus Settings', 'electronics-retailer' ),
		'panel' => 'electronics_retailer_panel_id'
	) );

	$wp_customize->add_setting('electronics_retailer_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_navigation_menu_font_size',array(
		'label'	=> __('Menus Font Size','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_menu_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_navigation_menu_font_weight',array(
        'default' => 600,
        'transport' => 'refresh',
        'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_navigation_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menus Font Weight','electronics-retailer'),
        'section' => 'electronics_retailer_menu_section',
        'choices' => array(
        	'100' => __('100','electronics-retailer'),
            '200' => __('200','electronics-retailer'),
            '300' => __('300','electronics-retailer'),
            '400' => __('400','electronics-retailer'),
            '500' => __('500','electronics-retailer'),
            '600' => __('600','electronics-retailer'),
            '700' => __('700','electronics-retailer'),
            '800' => __('800','electronics-retailer'),
            '900' => __('900','electronics-retailer'),
        ),
	) );

	// text trasform
	$wp_customize->add_setting('electronics_retailer_menu_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_menu_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Menus Text Transform','electronics-retailer'),
		'choices' => array(
            'Uppercase' => __('Uppercase','electronics-retailer'),
            'Capitalize' => __('Capitalize','electronics-retailer'),
            'Lowercase' => __('Lowercase','electronics-retailer'),
        ),
		'section'=> 'electronics_retailer_menu_section',
	));

	$wp_customize->add_setting('electronics_retailer_menus_item_style',array(
    'default' => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_menus_item_style',array(
    'type' => 'select',
    'section' => 'electronics_retailer_menu_section',
		'label' => __('Menu Item Hover Style','electronics-retailer'),
		'choices' => array(
      'None' => __('None','electronics-retailer'),
      'Zoom In' => __('Zoom In','electronics-retailer'),
    ),
	) );

	$wp_customize->add_setting('electronics_retailer_header_menus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_retailer_header_menus_color', array(
		'label'    => __('Menus Color', 'electronics-retailer'),
		'section'  => 'electronics_retailer_menu_section',
	)));

	$wp_customize->add_setting('electronics_retailer_header_menus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_retailer_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'electronics-retailer'),
		'section'  => 'electronics_retailer_menu_section',
	)));

	$wp_customize->add_setting('electronics_retailer_header_submenus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_retailer_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'electronics-retailer'),
		'section'  => 'electronics_retailer_menu_section',
	)));

	$wp_customize->add_setting('electronics_retailer_header_submenus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_retailer_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'electronics-retailer'),
		'section'  => 'electronics_retailer_menu_section',
	)));

	// Top Bar
	$wp_customize->add_section( 'electronics_retailer_top_bar' , array(
    	'title' => esc_html__( 'Top Bar', 'electronics-retailer' ),
			'panel' => 'electronics_retailer_panel_id'
	) );

	$wp_customize->add_setting( 'electronics_retailer_hide_show_topbar_section',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
	));
	$wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_hide_show_topbar_section',array(
		'label' => esc_html__( 'Show / Hide Section','electronics-retailer' ),
		'section' => 'electronics_retailer_top_bar'
	)));

	$wp_customize->add_setting('electronics_retailer_social_icons',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_social_icons',array(
		'label' =>  __('Steps to setup social icons','electronics-retailer'),
		'description' => __('<p>1. Go to Dashboard >> Appearance >> Widgets</p>
			<p>2. Add Vw Social Icon Widget in Social Widget area.</p>
			<p>3. Add social icons url and save.</p>','electronics-retailer'),
		'section'=> 'electronics_retailer_top_bar',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('electronics_retailer_social_icon_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_social_icon_btn',array(
		'description' => "<a target='_blank' href='". admin_url('widgets.php') ." '>Setup Topbar Social Icons</a>",
		'section'=> 'electronics_retailer_top_bar',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('electronics_retailer_topbar_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_retailer_topbar_text',array(
		'label'	=> esc_html__( 'Add Text', 'electronics-retailer' ), 
		'section'	=> 'electronics_retailer_top_bar',
		'type'		=> 'text',
		'input_attrs' => array(
	    'placeholder' => __( 'Free Shipping on Orders Over $50! Limited Time Offer – Shop Now!', 'electronics-retailer' ),
	  ),
	));

	$wp_customize->add_setting('electronics_retailer_topbar_track_order_icon',array(
    'default' => 'fa-solid fa-truck-fast',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser($wp_customize,'electronics_retailer_topbar_track_order_icon',array(
    'label' => __('Add Track Icon','electronics-retailer'),
    'transport' => 'refresh',
    'section' => 'electronics_retailer_top_bar',
    'setting' => 'electronics_retailer_topbar_track_order_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting('electronics_retailer_heart_icon',array(
    'default' => 'fa-solid fa-heart',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser($wp_customize,'electronics_retailer_heart_icon',array(
    'label' => __('Add Heart Icon','electronics-retailer'),
    'transport' => 'refresh',
    'section' => 'electronics_retailer_top_bar',
    'setting' => 'electronics_retailer_heart_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting('electronics_retailer_cart_icon',array(
    'default' => 'fa-solid fa-cart-shopping',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser($wp_customize,'electronics_retailer_cart_icon',array(
    'label' => __('Add Cart Icon','electronics-retailer'),
    'transport' => 'refresh',
    'section' => 'electronics_retailer_top_bar',
    'setting' => 'electronics_retailer_cart_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting('electronics_retailer_topbar_myaccount_icon',array(
    'default' => 'fas fa-user',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser($wp_customize,'electronics_retailer_topbar_myaccount_icon',array(
    'label' => __('Add MyAccount Icon','electronics-retailer'),
    'transport' => 'refresh',
    'section' => 'electronics_retailer_top_bar',
    'setting' => 'electronics_retailer_topbar_myaccount_icon',
    'type'    => 'icon'
  )));

	$wp_customize->add_setting('electronics_retailer_phone_icon',array(
		'default'	=> 'fa-solid fa-phone-volume',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser(
        $wp_customize,'electronics_retailer_phone_icon',array(
		'label'	=> __('Add Phone Icon','electronics-retailer'),
		'transport' => 'refresh',
		'section'	=> 'electronics_retailer_top_bar',
		'setting'	=> 'electronics_retailer_phone_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting('electronics_retailer_phone_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'electronics_retailer_sanitize_phone_number'
	));
	$wp_customize->add_control('electronics_retailer_phone_number',array(
		'label'	=> __('Add Phone number','electronics-retailer'),
		'input_attrs' => array(
      'placeholder' => __( '(123) 456-7890', 'electronics-retailer' ),
    ),
		'section'=> 'electronics_retailer_top_bar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_site_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_retailer_site_text',array(
		'label'	=> esc_html__( 'Add Text', 'electronics-retailer' ), 
		'section'	=> 'electronics_retailer_top_bar',
		'type'		=> 'text',
		'input_attrs' => array(
	    'placeholder' => __( 'support@example.com', 'electronics-retailer' ),
	  ),
	));

	$wp_customize->add_setting('electronics_retailer_top_first_color', array(
		'default'           => '#32BDEE',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_retailer_top_first_color', array(
		'label'    => __('Topbar Background Color', 'electronics-retailer'),
		'section'  => 'electronics_retailer_top_bar',
	)));

	$wp_customize->add_setting('electronics_retailer_top_second_color', array(
		'default'           => '#C81786',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_retailer_top_second_color', array(
		'label'    => __('Topbar Background Color', 'electronics-retailer'),
		'section'  => 'electronics_retailer_top_bar',
	)));

	//Sticky Header
	$wp_customize->add_setting( 'electronics_retailer_sticky_header',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_sticky_header',array(
    'label' => esc_html__( 'Sticky Header','electronics-retailer' ),
    'section' => 'electronics_retailer_top_bar'
  )));

  $wp_customize->add_setting('electronics_retailer_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_sticky_header_padding',array(
		'label'	=> __('Sticky Header Padding','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'electronics-retailer' ),
    ),
		'section'=> 'electronics_retailer_top_bar',
		'type'=> 'text'
	));

	//Banner
	$wp_customize->add_section( 'electronics_retailer_bannersettings' , array(
  	'title'      => __( 'Banner Settings', 'electronics-retailer' ),
		'panel' => 'electronics_retailer_panel_id',
	) );

	$wp_customize->add_setting( 'electronics_retailer_show_hide_banner',array(
  	'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ));
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_show_hide_banner',array(
  	'label' => esc_html__( 'Show / Hide Banner','electronics-retailer' ),
  	'section' => 'electronics_retailer_bannersettings',
  )));

  // Left Banner
	$wp_customize->add_setting('electronics_retailer_featured_image_sec',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'electronics_retailer_featured_image_sec',array(
		'label' => __('Add Image','electronics-retailer'),
		'section' => 'electronics_retailer_bannersettings',
		'description' => __('Image size (975px x 550px)','electronics-retailer'),
	)));

	$wp_customize->add_setting('electronics_retailer_banner_small_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_retailer_banner_small_text',array(
		'label'	=>esc_html__( 'Banner Small Title', 'electronics-retailer' ),
		'section'	=> 'electronics_retailer_bannersettings',
		'type'		=> 'text',
		'input_attrs' => array(
	      'placeholder' => __( 'Electronics Market', 'electronics-retailer' ),
	    ),
	));

  $wp_customize->add_setting('electronics_retailer_banner_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_retailer_banner_title',array(
		'label'	=> esc_html__( 'Banner Title', 'electronics-retailer' ), 
		'section'	=> 'electronics_retailer_bannersettings',
		'type'		=> 'text',
		'input_attrs' => array(
	      'placeholder' => __( 'Upgrade Your Life with Cutting-Edge Electronics!', 'electronics-retailer' ),
	    ),
	));

	$wp_customize->add_setting('electronics_retailer_banner_para_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_retailer_banner_para_text',array(
		'label'	=>esc_html__( 'Banner Content', 'electronics-retailer' ),
		'section'	=> 'electronics_retailer_bannersettings',
		'type'		=> 'text',
	));

	$wp_customize->add_setting('electronics_retailer_explore_button_label',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_explore_button_label',array(
		'label' => esc_html__( 'Add Button Text', 'electronics-retailer' ),
		'section' => 'electronics_retailer_bannersettings',
		'setting' => 'electronics_retailer_explore_button_label',
		'type' => 'text',
		'input_attrs' => array(
      'placeholder' => __( 'Explore more', 'electronics-retailer' ),
    ),
	));

	$wp_customize->add_setting('electronics_retailer_explore_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control('electronics_retailer_explore_button_url',array(
		'label'	=> esc_html__( 'Add Button URL', 'electronics-retailer' ), 
		'section'	=> 'electronics_retailer_bannersettings',
		'setting'	=> 'electronics_retailer_explore_button_url',
		'type'	=> 'url',
	));

	// Middle Banner
	$wp_customize->add_setting('electronics_retailer_middle_image_sec',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'electronics_retailer_middle_image_sec',array(
		'label' => __('Add Middle Image','electronics-retailer'),
		'section' => 'electronics_retailer_bannersettings',
		'description' => __('Image size (335px x 550px)','electronics-retailer'),
	)));

	$wp_customize->add_setting('electronics_retailer_middle_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_retailer_middle_title',array(
		'label'	=>esc_html__( 'Add Title', 'electronics-retailer' ),
		'section'	=> 'electronics_retailer_bannersettings',
		'type'		=> 'text',
		'input_attrs' => array(
      'placeholder' => __( 'Immerse Yourself in Sound: Exclusive Headphone Deals Await!', 'electronics-retailer' ),
    ),
	));

	$wp_customize->add_setting('electronics_retailer_shop_button_label',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_shop_button_label',array(
		'label' => esc_html__( 'Add Button Text', 'electronics-retailer' ),
		'section' => 'electronics_retailer_bannersettings',
		'setting' => 'electronics_retailer_shop_button_label',
		'type' => 'text',
		'input_attrs' => array(
	      'placeholder' => __( 'SHOP NOW', 'electronics-retailer' ),
	    ),
	));

	$wp_customize->add_setting('electronics_retailer_shop_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control('electronics_retailer_shop_button_url',array(
		'label'	=> esc_html__( 'Add Button URL', 'electronics-retailer' ), 
		'section'	=> 'electronics_retailer_bannersettings',
		'setting'	=> 'electronics_retailer_shop_button_url',
		'type'	=> 'url',
	));

	$wp_customize->add_setting('electronics_retailer_discount_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_retailer_discount_text',array(
		'label'	=>esc_html__( 'Discount Content', 'electronics-retailer' ),
		'section'	=> 'electronics_retailer_bannersettings',
		'type'		=> 'text',
		'input_attrs' => array(
      'placeholder' => __( 'Get Upto', 'electronics-retailer' ),
    ),
	));

	$wp_customize->add_setting('electronics_retailer_add_discount',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_retailer_add_discount',array(
		'label'	=>esc_html__( 'Add Discount', 'electronics-retailer' ),
		'section'	=> 'electronics_retailer_bannersettings',
		'type'		=> 'text',
		'input_attrs' => array(
      'placeholder' => __( '50% OFF', 'electronics-retailer' ),
    ),
	));

	// Right Banner
	$wp_customize->add_setting('electronics_retailer_banner_right_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_retailer_banner_right_title',array(
		'label'	=>esc_html__( 'Add Title', 'electronics-retailer' ),
		'section'	=> 'electronics_retailer_bannersettings',
		'type'		=> 'text',
		'input_attrs' => array(
      'placeholder' => __( 'Deal of the Day', 'electronics-retailer' ),
    ),
	));

	$wp_customize->add_setting('electronics_retailer_banner_right_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_retailer_banner_right_text',array(
		'label'	=>esc_html__( 'Add Content', 'electronics-retailer' ),
		'section'	=> 'electronics_retailer_bannersettings',
		'type'		=> 'text',
	));

	$electronics_retailer_args = array(
	    'post_type'      => 'product',
	    'posts_per_page' => -1,
	    'order'          => 'ASC',
	    'orderby'        => 'title',
	);
	$electronics_retailer_products = get_posts($electronics_retailer_args);

	$electronics_retailer_product_posts = array();
	$electronics_retailer_product_posts[''] = 'Select';

	foreach ($electronics_retailer_products as $electronics_retailer_product) {
	    $electronics_retailer_product_posts[$electronics_retailer_product->ID] = $electronics_retailer_product->post_title;
	}

	$wp_customize->add_setting('electronics_retailer_slider_product', array(
	    'default'           => '',
	    'sanitize_callback' => 'electronics_retailer_sanitize_choices',
	));
	$wp_customize->add_control('electronics_retailer_slider_product', array(
	    'type'     => 'select',
	    'choices'  => $electronics_retailer_product_posts,
	    'label'    => __('Select Product', 'electronics-retailer'),
	    'section'  => 'electronics_retailer_bannersettings',
	));

	// Banner Bottom
	$wp_customize->add_setting('electronics_retailer_banner_bottom_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_retailer_banner_bottom_title',array(
		'label'	=>esc_html__( 'Add Title', 'electronics-retailer' ),
		'section'	=> 'electronics_retailer_bannersettings',
		'type'		=> 'text',
		'input_attrs' => array(
      'placeholder' => __( 'New Dual Sense Console', 'electronics-retailer' ),
    ),
	));

	$wp_customize->add_setting('electronics_retailer_banner_bottom_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('electronics_retailer_banner_bottom_text',array(
		'label'	=>esc_html__( 'Add Text', 'electronics-retailer' ),
		'section'	=> 'electronics_retailer_bannersettings',
		'type'		=> 'text',
		'input_attrs' => array(
      'placeholder' => __( 'For PlayStation 5', 'electronics-retailer' ),
    ),
	));

	$wp_customize->add_setting('electronics_retailer_bottom_image_sec',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'electronics_retailer_bottom_image_sec',array(
		'label' => __('Add Image','electronics-retailer'),
		'section' => 'electronics_retailer_bannersettings',
		'description' => __('Image size (145px x 80px)','electronics-retailer'),
	)));

	// Category Section
	$wp_customize->add_section('electronics_retailer_category_section',array(
		'title'	=> __('Category Section','electronics-retailer'),
		'panel' => 'electronics_retailer_panel_id',
	));

	$wp_customize->add_setting( 'electronics_retailer_hide_show_category_section',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
	));
	$wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_hide_show_category_section',array(
		'label' => esc_html__( 'Show / Hide Section','electronics-retailer' ),
		'section' => 'electronics_retailer_category_section'
	)));

	$wp_customize->add_setting('electronics_retailer_discover_button_label',array(
		'default' => 'discover now',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_discover_button_label',array(
		'label' => esc_html__( 'Add Button Text', 'electronics-retailer' ),
		'section' => 'electronics_retailer_category_section',
		'setting' => 'electronics_retailer_discover_button_label',
		'type' => 'text',
	));

	//Footer Text
	$wp_customize->add_section('electronics_retailer_footer',array(
		'title'	=> esc_html__('Footer Settings','electronics-retailer'),
		'panel' => 'electronics_retailer_panel_id',
	));

	$wp_customize->add_setting( 'electronics_retailer_footer_hide_show',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ));
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_footer_hide_show',array(
    'label' => esc_html__( 'Show / Hide Footer','electronics-retailer' ),
    'section' => 'electronics_retailer_footer'
  )));

 	// font size
	$wp_customize->add_setting('electronics_retailer_button_footer_font_size',array(
		'default'=> 25,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_button_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','electronics-retailer'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'electronics_retailer_footer',
	));

	$wp_customize->add_setting('electronics_retailer_button_footer_heading_letter_spacing',array(
		'default'=> 1,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_button_footer_heading_letter_spacing',array(
		'label'	=> __('Heading Letter Spacing','electronics-retailer'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'electronics_retailer_footer',
	));

	// text trasform
	$wp_customize->add_setting('electronics_retailer_button_footer_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_button_footer_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Heading Text Transform','electronics-retailer'),
		'choices' => array(
			'Uppercase' => __('Uppercase','electronics-retailer'),
			'Capitalize' => __('Capitalize','electronics-retailer'),
			'Lowercase' => __('Lowercase','electronics-retailer'),
		),
		'section'=> 'electronics_retailer_footer',
	));

	$wp_customize->add_setting('electronics_retailer_footer_heading_weight',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_footer_heading_weight',array(
        'type' => 'select',
        'label' => __('Heading Font Weight','electronics-retailer'),
        'section' => 'electronics_retailer_footer',
        'choices' => array(
        	'100' => __('100','electronics-retailer'),
            '200' => __('200','electronics-retailer'),
            '300' => __('300','electronics-retailer'),
            '400' => __('400','electronics-retailer'),
            '500' => __('500','electronics-retailer'),
            '600' => __('600','electronics-retailer'),
            '700' => __('700','electronics-retailer'),
            '800' => __('800','electronics-retailer'),
            '900' => __('900','electronics-retailer'),
        ),
	) );

	$wp_customize->add_setting('electronics_retailer_footer_template',array(
		'default'	=> esc_html('electronics_retailer-footer-one'),
		'sanitize_callback'	=> 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_footer_template',array(
		'label'	=> esc_html__('Footer style','electronics-retailer'),
		'section'	=> 'electronics_retailer_footer',
		'setting'	=> 'electronics_retailer_footer_template',
		'type' => 'select',
		'choices' => array(
			'electronics_retailer-footer-one' => esc_html__('Style 1', 'electronics-retailer'),
			'electronics_retailer-footer-two' => esc_html__('Style 2', 'electronics-retailer'),
			'electronics_retailer-footer-three' => esc_html__('Style 3', 'electronics-retailer'),
			'electronics_retailer-footer-four' => esc_html__('Style 4', 'electronics-retailer'),
			'electronics_retailer-footer-five' => esc_html__('Style 5', 'electronics-retailer'),
		)
	));

	$wp_customize->add_setting('electronics_retailer_footer_background_color', array(
		'default'           => '#C81786',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_retailer_footer_background_color', array(
		'label'    => __('Footer Background Color', 'electronics-retailer'),
		'section'  => 'electronics_retailer_footer',
	)));

	$wp_customize->add_setting('electronics_retailer_footer_background_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'electronics_retailer_footer_background_image',array(
    'label' => __('Footer Background Image','electronics-retailer'),
    'section' => 'electronics_retailer_footer'
	)));

	$wp_customize->add_setting('electronics_retailer_footer_img_position',array(
	  'default' => 'center center',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','electronics-retailer'),
		'section' => 'electronics_retailer_footer',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'electronics-retailer' ),
			'center top'   => esc_html__( 'Top', 'electronics-retailer' ),
			'right top'   => esc_html__( 'Top Right', 'electronics-retailer' ),
			'left center'   => esc_html__( 'Left', 'electronics-retailer' ),
			'center center'   => esc_html__( 'Center', 'electronics-retailer' ),
			'right center'   => esc_html__( 'Right', 'electronics-retailer' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'electronics-retailer' ),
			'center bottom'   => esc_html__( 'Bottom', 'electronics-retailer' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'electronics-retailer' ),
		),
	));

  // Footer
  $wp_customize->add_setting('electronics_retailer_img_footer',array(
    'default'=> 'scroll',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
  ));
  $wp_customize->add_control('electronics_retailer_img_footer',array(
    'type' => 'select',
    'label' => __('Footer Background Attatchment','electronics-retailer'),
    'choices' => array(
      'fixed' => __('fixed','electronics-retailer'),
      'scroll' => __('scroll','electronics-retailer'),
    ),
    'section'=> 'electronics_retailer_footer',
  ));

  // footer padding
  $wp_customize->add_setting('electronics_retailer_footer_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('electronics_retailer_footer_padding',array(
    'label' => __('Footer Top Bottom Padding','electronics-retailer'),
    'description' => __('Enter a value in pixels. Example:20px','electronics-retailer'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'electronics-retailer' ),
    ),
    'section'=> 'electronics_retailer_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('electronics_retailer_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
  ));
  $wp_customize->add_control('electronics_retailer_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading','electronics-retailer'),
    'section' => 'electronics_retailer_footer',
    'choices' => array(
      'Left' => __('Left','electronics-retailer'),
      'Center' => __('Center','electronics-retailer'),
      'Right' => __('Right','electronics-retailer')
    ),
  ) );

  $wp_customize->add_setting('electronics_retailer_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
  ));
  $wp_customize->add_control('electronics_retailer_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content','electronics-retailer'),
    'section' => 'electronics_retailer_footer',
    'choices' => array(
      'Left' => __('Left','electronics-retailer'),
      'Center' => __('Center','electronics-retailer'),
      'Right' => __('Right','electronics-retailer')
  	),
	) );
	
	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('electronics_retailer_footer_text', array(
		'selector' => '.copyright p',
		'render_callback' => 'electronics_retailer_Customize_partial_electronics_retailer_footer_text',
	));

	$wp_customize->add_setting('electronics_retailer_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_footer_text',array(
		'label'	=> esc_html__('Copyright Text','electronics-retailer'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Copyright 2024, .....', 'electronics-retailer' ),
      ),
		'section'=> 'electronics_retailer_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'electronics_retailer_copyright_hide_show',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'electronics_retailer_switch_sanitization'
	));
	$wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_copyright_hide_show',array(
		'label' => esc_html__( 'Show / Hide Copyright','electronics-retailer' ),
		'section' => 'electronics_retailer_footer'
	)));

	$wp_customize->add_setting('electronics_retailer_copyright_alingment',array(
	    'default' => 'center',
	    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
		));
		$wp_customize->add_control(new Electronics_Retailer_Image_Radio_Control($wp_customize, 'electronics_retailer_copyright_alingment', array(
	    'type' => 'select',
	    'label' => esc_html__('Copyright Alignment','electronics-retailer'),
	    'section' => 'electronics_retailer_footer',
	    'settings' => 'electronics_retailer_copyright_alingment',
	    'choices' => array(
	        'left' => esc_url(get_template_directory_uri()).'/assets/images/copyright1.png',
	        'center' => esc_url(get_template_directory_uri()).'/assets/images/copyright2.png',
	        'right' => esc_url(get_template_directory_uri()).'/assets/images/copyright3.png'
	))));

	$wp_customize->add_setting('electronics_retailer_copyright_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_retailer_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'electronics-retailer'),
		'section'  => 'electronics_retailer_footer',
	)));

	$wp_customize->add_setting('electronics_retailer_copyright_font_size',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_copyright_font_size',array(
		'label' => __('Copyright Font Size','electronics-retailer'),
		'description' => __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'electronics-retailer' ),
	    ),
		'section'=> 'electronics_retailer_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'electronics_retailer_hide_show_scroll',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
	));
	$wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_hide_show_scroll',array(
		'label' => esc_html__( 'Show / Hide Scroll to Top','electronics-retailer' ),
		'section' => 'electronics_retailer_footer'
	)));

  //Selective Refresh
	$wp_customize->selective_refresh->add_partial('electronics_retailer_scroll_to_top_icon', array(
		'selector' => '.scrollup i',
		'render_callback' => 'electronics_retailer_Customize_partial_electronics_retailer_scroll_to_top_icon',
	));

  $wp_customize->add_setting('electronics_retailer_scroll_top_alignment',array(
    'default' => 'Right',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control(new Electronics_Retailer_Image_Radio_Control($wp_customize, 'electronics_retailer_scroll_top_alignment', array(
    'type' => 'select',
    'label' => esc_html__('Scroll To Top','electronics-retailer'),
    'section' => 'electronics_retailer_footer',
    'settings' => 'electronics_retailer_scroll_top_alignment',
    'choices' => array(
        'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
        'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
        'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
  ))));

 	$wp_customize->add_setting('electronics_retailer_scroll_top_icon',array(
    'default' => 'fas fa-long-arrow-alt-up',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser($wp_customize,'electronics_retailer_scroll_top_icon',array(
    'label' => __('Add Scroll to Top Icon','electronics-retailer'),
    'transport' => 'refresh',
    'section' => 'electronics_retailer_footer',
    'setting' => 'electronics_retailer_scroll_top_icon',
    'type'    => 'icon'
  )));

  $wp_customize->add_setting('electronics_retailer_scroll_to_top_font_size',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('electronics_retailer_scroll_to_top_font_size',array(
    'label' => __('Icon Font Size','electronics-retailer'),
    'description' => __('Enter a value in pixels. Example:20px','electronics-retailer'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'electronics-retailer' ),
    ),
    'section'=> 'electronics_retailer_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('electronics_retailer_scroll_to_top_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('electronics_retailer_scroll_to_top_padding',array(
    'label' => __('Icon Top Bottom Padding','electronics-retailer'),
    'description' => __('Enter a value in pixels. Example:20px','electronics-retailer'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'electronics-retailer' ),
    ),
    'section'=> 'electronics_retailer_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('electronics_retailer_scroll_to_top_width',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('electronics_retailer_scroll_to_top_width',array(
    'label' => __('Icon Width','electronics-retailer'),
    'description' => __('Enter a value in pixels Example:20px','electronics-retailer'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'electronics-retailer' ),
  ),
	  'section'=> 'electronics_retailer_footer',
	  'type'=> 'text'
  ));

  $wp_customize->add_setting('electronics_retailer_scroll_to_top_height',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('electronics_retailer_scroll_to_top_height',array(
    'label' => __('Icon Height','electronics-retailer'),
    'description' => __('Enter a value in pixels. Example:20px','electronics-retailer'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'electronics-retailer' ),
    ),
    'section'=> 'electronics_retailer_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting( 'electronics_retailer_scroll_to_top_border_radius', array(
    'default'              => '',
    'transport'        => 'refresh',
    'sanitize_callback'    => 'electronics_retailer_sanitize_number_range'
  ) );
  $wp_customize->add_control( 'electronics_retailer_scroll_to_top_border_radius', array(
    'label'       => esc_html__( 'Icon Border Radius','electronics-retailer' ),
    'section'     => 'electronics_retailer_footer',
    'type'        => 'range',
    'input_attrs' => array(
      'step'             => 1,
      'min'              => 1,
      'max'              => 50,
    ),
  ) );

 	//Blog Post
	$wp_customize->add_panel( 'electronics_retailer_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'electronics-retailer' ),
		'panel' => 'electronics_retailer_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'electronics_retailer_post_settings', array(
		'title' => esc_html__( 'Post Settings', 'electronics-retailer' ),
		'panel' => 'electronics_retailer_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('electronics_retailer_toggle_postdate', array(
		'selector' => '.post-main-box h2 a',
		'render_callback' => 'electronics_retailer_Customize_partial_electronics_retailer_toggle_postdate',
	));

	//Blog layout
  $wp_customize->add_setting('electronics_retailer_blog_layout_option',array(
    'default' => 'Left',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
  ));
  $wp_customize->add_control(new Electronics_Retailer_Image_Radio_Control($wp_customize, 'electronics_retailer_blog_layout_option', array(
    'type' => 'select',
    'label' => __('Blog Post Layouts','electronics-retailer'),
    'section' => 'electronics_retailer_post_settings',
    'choices' => array(
      'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
      'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
      'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
  ))));

	$wp_customize->add_setting('electronics_retailer_theme_options',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_theme_options',array(
    'type' => 'select',
    'label' => esc_html__('Post Sidebar Layout','electronics-retailer'),
    'description' => esc_html__('Here you can change the sidebar layout for posts. ','electronics-retailer'),
    'section' => 'electronics_retailer_post_settings',
    'choices' => array(
        'Left Sidebar' => esc_html__('Left Sidebar','electronics-retailer'),
        'Right Sidebar' => esc_html__('Right Sidebar','electronics-retailer'),
        'One Column' => esc_html__('One Column','electronics-retailer'),
        'Grid Layout' => esc_html__('Grid Layout','electronics-retailer')
    ),
	) );

 	$wp_customize->add_setting('electronics_retailer_theme_options',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_theme_options',array(
    'type' => 'select',
    'label' => esc_html__('Post Sidebar Layout','electronics-retailer'),
    'description' => esc_html__('Here you can change the sidebar layout for posts. ','electronics-retailer'),
    'section' => 'electronics_retailer_post_settings',
    'choices' => array(
        'Left Sidebar' => esc_html__('Left Sidebar','electronics-retailer'),
        'Right Sidebar' => esc_html__('Right Sidebar','electronics-retailer'),
        'One Column' => esc_html__('One Column','electronics-retailer'),
        'Grid Layout' => esc_html__('Grid Layout','electronics-retailer')
        ),
	) );

	$wp_customize->add_setting('electronics_retailer_theme_options',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_theme_options',array(
    'type' => 'select',
    'label' => esc_html__('Post Sidebar Layout','electronics-retailer'),
    'description' => esc_html__('Here you can change the sidebar layout for posts. ','electronics-retailer'),
    'section' => 'electronics_retailer_post_settings',
    'choices' => array(
        'Left Sidebar' => esc_html__('Left Sidebar','electronics-retailer'),
        'Right Sidebar' => esc_html__('Right Sidebar','electronics-retailer'),
        'One Column' => esc_html__('One Column','electronics-retailer'),
        'Grid Layout' => esc_html__('Grid Layout','electronics-retailer')
        ),
	) );

	$wp_customize->add_setting('electronics_retailer_toggle_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser(
  $wp_customize,'electronics_retailer_toggle_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','electronics-retailer'),
		'transport' => 'refresh',
		'section'	=> 'electronics_retailer_post_settings',
		'setting'	=> 'electronics_retailer_toggle_postdate_icon',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting( 'electronics_retailer_blog_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ));
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_blog_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','electronics-retailer' ),
    'section' => 'electronics_retailer_post_settings'
  )));

	$wp_customize->add_setting('electronics_retailer_toggle_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser(
  $wp_customize,'electronics_retailer_toggle_author_icon',array(
		'label'	=> __('Add Author Icon','electronics-retailer'),
		'transport' => 'refresh',
		'section'	=> 'electronics_retailer_post_settings',
		'setting'	=> 'electronics_retailer_toggle_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'electronics_retailer_blog_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ));
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_blog_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','electronics-retailer' ),
		'section' => 'electronics_retailer_post_settings'
  )));

  $wp_customize->add_setting('electronics_retailer_toggle_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser(
  $wp_customize,'electronics_retailer_toggle_comments_icon',array(
		'label'	=> __('Add Comments Icon','electronics-retailer'),
		'transport' => 'refresh',
		'section'	=> 'electronics_retailer_post_settings',
		'setting'	=> 'electronics_retailer_toggle_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'electronics_retailer_blog_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_blog_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','electronics-retailer' ),
		'section' => 'electronics_retailer_post_settings'
  )));

  $wp_customize->add_setting('electronics_retailer_toggle_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser(
  $wp_customize,'electronics_retailer_toggle_time_icon',array(
		'label'	=> __('Add Time Icon','electronics-retailer'),
		'transport' => 'refresh',
		'section'	=> 'electronics_retailer_post_settings',
		'setting'	=> 'electronics_retailer_toggle_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'electronics_retailer_blog_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_blog_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','electronics-retailer' ),
		'section' => 'electronics_retailer_post_settings'
  )));

  $wp_customize->add_setting( 'electronics_retailer_featured_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
	));
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_featured_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','electronics-retailer' ),
		'section' => 'electronics_retailer_post_settings'
  )));

  $wp_customize->add_setting( 'electronics_retailer_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'electronics_retailer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'electronics_retailer_featured_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','electronics-retailer' ),
		'section'     => 'electronics_retailer_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'electronics_retailer_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'electronics_retailer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'electronics_retailer_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','electronics-retailer' ),
		'section'     => 'electronics_retailer_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Featured Image
	$wp_customize->add_setting('electronics_retailer_blog_post_featured_image_dimension',array(
   'default' => 'default',
   'sanitize_callback'	=> 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_blog_post_featured_image_dimension',array(
		'type' => 'select',
		'label'	=> __('Blog Post Featured Image Dimension','electronics-retailer'),
		'section'	=> 'electronics_retailer_post_settings',
		'choices' => array(
		'default' => __('Default','electronics-retailer'),
		'custom' => __('Custom Image Size','electronics-retailer'),
      ),
	));

	$wp_customize->add_setting('electronics_retailer_blog_post_featured_image_custom_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('electronics_retailer_blog_post_featured_image_custom_width',array(
		'label'	=> __('Featured Image Custom Width','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'electronics-retailer' ),),
		'section'=> 'electronics_retailer_post_settings',
		'type'=> 'text',
		'active_callback' => 'electronics_retailer_blog_post_featured_image_dimension'
		));

	$wp_customize->add_setting('electronics_retailer_blog_post_featured_image_custom_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_blog_post_featured_image_custom_height',array(
		'label'	=> __('Featured Image Custom Height','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'electronics-retailer' ),),
		'section'=> 'electronics_retailer_post_settings',
		'type'=> 'text',
		'active_callback' => 'electronics_retailer_blog_post_featured_image_dimension'
	));

  $wp_customize->add_setting( 'electronics_retailer_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'electronics_retailer_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'electronics_retailer_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','electronics-retailer' ),
		'section'     => 'electronics_retailer_post_settings',
		'type'        => 'range',
		'settings'    => 'electronics_retailer_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('electronics_retailer_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','electronics-retailer'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','electronics-retailer'),
		'section'=> 'electronics_retailer_post_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('electronics_retailer_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Post Content','electronics-retailer'),
    'section' => 'electronics_retailer_post_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','electronics-retailer'),
        'Excerpt' => esc_html__('Excerpt','electronics-retailer'),
        'No Content' => esc_html__('No Content','electronics-retailer')
        ),
	) );

  $wp_customize->add_setting('electronics_retailer_blog_page_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_blog_page_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Blog Posts','electronics-retailer'),
    'section' => 'electronics_retailer_post_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','electronics-retailer'),
        'Without Blocks' => __('Without Blocks','electronics-retailer')
        ),
	) );

	$wp_customize->add_setting( 'electronics_retailer_blog_pagination_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ));
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_blog_pagination_hide_show',array(
		'label' => esc_html__( 'Show / Hide Blog Pagination','electronics-retailer' ),
		'section' => 'electronics_retailer_post_settings'
  )));

	$wp_customize->add_setting('electronics_retailer_blog_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_blog_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','electronics-retailer'),
		'input_attrs' => array(
      'placeholder' => __( '[...]', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_post_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'electronics_retailer_blog_pagination_type', array(
    'default'			=> 'blog-page-numbers',
    'sanitize_callback'	=> 'electronics_retailer_sanitize_choices'
  ));
  $wp_customize->add_control( 'electronics_retailer_blog_pagination_type', array(
    'section' => 'electronics_retailer_post_settings',
    'type' => 'select',
    'label' => __( 'Blog Pagination', 'electronics-retailer' ),
    'choices'		=> array(
      'blog-page-numbers'  => __( 'Numeric', 'electronics-retailer' ),
      'next-prev' => __( 'Older Posts/Newer Posts', 'electronics-retailer' ),
  )));

  // Button Settings
	$wp_customize->add_section( 'electronics_retailer_button_settings', array(
		'title' => esc_html__( 'Button Settings', 'electronics-retailer' ),
		'panel' => 'electronics_retailer_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('electronics_retailer_button_text', array(
		'selector' => '.post-main-box .more-btn a',
		'render_callback' => 'electronics_retailer_Customize_partial_electronics_retailer_button_text',
	));

  $wp_customize->add_setting('electronics_retailer_button_text',array(
		'default'=> esc_html__('Read More','electronics-retailer'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_button_text',array(
		'label'	=> esc_html__('Add Button Text','electronics-retailer'),
		'input_attrs' => array(
    'placeholder' => esc_html__( 'Read More', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_button_settings',
		'type'=> 'text'
	));

	// font size button
	$wp_customize->add_setting('electronics_retailer_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_button_font_size',array(
		'label'	=> __('Button Font Size','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
  		'placeholder' => __( '10px', 'electronics-retailer' ),
    ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'electronics_retailer_button_settings',
	));


	$wp_customize->add_setting( 'electronics_retailer_button_border_radius', array(
		'default'              => 5,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'electronics_retailer_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'electronics_retailer_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','electronics-retailer' ),
		'section'     => 'electronics_retailer_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// button padding
	$wp_customize->add_setting('electronics_retailer_button_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_button_top_bottom_padding',array(
		'label'	=> __('Button Top Bottom Padding','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'electronics-retailer' ),
    ),
		'section'=> 'electronics_retailer_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_button_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_button_left_right_padding',array(
		'label'	=> __('Button Left Right Padding','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'electronics-retailer' ),
    ),
		'section'=> 'electronics_retailer_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_button_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_button_letter_spacing',array(
		'label'	=> __('Button Letter Spacing','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'electronics-retailer' ),
  ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'electronics_retailer_button_settings',
	));

	// text trasform
	$wp_customize->add_setting('electronics_retailer_button_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','electronics-retailer'),
		'choices' => array(
      'Uppercase' => __('Uppercase','electronics-retailer'),
      'Capitalize' => __('Capitalize','electronics-retailer'),
      'Lowercase' => __('Lowercase','electronics-retailer'),
    ),
		'section'=> 'electronics_retailer_button_settings',
	));

	// Related Post Settings
	$wp_customize->add_section( 'electronics_retailer_related_posts_settings', array(
		'title' => esc_html__( 'Related Posts Settings', 'electronics-retailer' ),
		'panel' => 'electronics_retailer_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('electronics_retailer_related_post_title', array(
		'selector' => '.related-post h3',
		'render_callback' => 'electronics_retailer_Customize_partial_electronics_retailer_related_post_title',
	));

  $wp_customize->add_setting( 'electronics_retailer_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_related_post',array(
		'label' => esc_html__( 'Related Post','electronics-retailer' ),
		'section' => 'electronics_retailer_related_posts_settings'
  )));

  $wp_customize->add_setting('electronics_retailer_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_related_post_title',array(
		'label'	=> esc_html__('Add Related Post Title','electronics-retailer'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Related Post', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_related_posts_settings',
		'type'=> 'text'
	));

 	$wp_customize->add_setting('electronics_retailer_related_posts_count',array(
		'default'=> 3,
		'sanitize_callback'	=> 'electronics_retailer_sanitize_number_absint'
	));
	$wp_customize->add_control('electronics_retailer_related_posts_count',array(
		'label'	=> esc_html__('Add Related Post Count','electronics-retailer'),
		'input_attrs' => array(
      'placeholder' => esc_html__( '3', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_related_posts_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'electronics_retailer_related_posts_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'electronics_retailer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'electronics_retailer_related_posts_excerpt_number', array(
		'label'       => esc_html__( 'Related Posts Excerpt length','electronics-retailer' ),
		'section'     => 'electronics_retailer_related_posts_settings',
		'type'        => 'range',
		'settings'    => 'electronics_retailer_related_posts_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// Single Posts Settings
	$wp_customize->add_section( 'electronics_retailer_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'electronics-retailer' ),
		'panel' => 'electronics_retailer_blog_post_parent_panel',
	));

	$wp_customize->add_setting('electronics_retailer_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser(
  $wp_customize,'electronics_retailer_single_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','electronics-retailer'),
		'transport' => 'refresh',
		'section'	=> 'electronics_retailer_single_blog_settings',
		'setting'	=> 'electronics_retailer_single_postdate_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'electronics_retailer_single_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_switch_sanitization'
	) );
	$wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_single_postdate',array(
		'label' => esc_html__( 'Show / Hide Date','electronics-retailer' ),
		'section' => 'electronics_retailer_single_blog_settings'
	)));

	$wp_customize->add_setting('electronics_retailer_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser(
  $wp_customize,'electronics_retailer_single_author_icon',array(
		'label'	=> __('Add Author Icon','electronics-retailer'),
		'transport' => 'refresh',
		'section'	=> 'electronics_retailer_single_blog_settings',
		'setting'	=> 'electronics_retailer_single_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'electronics_retailer_single_author',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_switch_sanitization'
	) );
	$wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_single_author',array(
    'label' => esc_html__( 'Show / Hide Author','electronics-retailer' ),
    'section' => 'electronics_retailer_single_blog_settings'
	)));

 	$wp_customize->add_setting('electronics_retailer_single_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser(
  $wp_customize,'electronics_retailer_single_comments_icon',array(
		'label'	=> __('Add Comments Icon','electronics-retailer'),
		'transport' => 'refresh',
		'section'	=> 'electronics_retailer_single_blog_settings',
		'setting'	=> 'electronics_retailer_single_comments_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'electronics_retailer_single_comments',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_switch_sanitization'
	) );
	$wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_single_comments',array(
    'label' => esc_html__( 'Show / Hide Comments','electronics-retailer' ),
    'section' => 'electronics_retailer_single_blog_settings'
	)));

	$wp_customize->add_setting('electronics_retailer_single_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser(
  $wp_customize,'electronics_retailer_single_time_icon',array(
		'label'	=> __('Add Time Icon','electronics-retailer'),
		'transport' => 'refresh',
		'section'	=> 'electronics_retailer_single_blog_settings',
		'setting'	=> 'electronics_retailer_single_time_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'electronics_retailer_single_time',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_switch_sanitization'
	) );
	$wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_single_time',array(
    'label' => esc_html__( 'Show / Hide Time','electronics-retailer' ),
    'section' => 'electronics_retailer_single_blog_settings'
	)));

	$wp_customize->add_setting( 'electronics_retailer_toggle_tags',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
	));
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_toggle_tags', array(
		'label' => esc_html__( 'Show / Hide Tags','electronics-retailer' ),
		'section' => 'electronics_retailer_single_blog_settings'
  )));

	$wp_customize->add_setting( 'electronics_retailer_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ) );
 	$wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','electronics-retailer' ),
		'section' => 'electronics_retailer_single_blog_settings'
  )));

	// Single Posts Category
 	 $wp_customize->add_setting( 'electronics_retailer_single_post_category',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ) );
	$wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_single_post_category',array(
		'label' => esc_html__( 'Show / Hide Category','electronics-retailer' ),
		'section' => 'electronics_retailer_single_blog_settings'
  )));

	$wp_customize->add_setting('electronics_retailer_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','electronics-retailer'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','electronics-retailer'),
		'section'=> 'electronics_retailer_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'electronics_retailer_single_blog_post_navigation_show_hide',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
	));
	$wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_single_blog_post_navigation_show_hide', array(
	  'label' => esc_html__( 'Show / Hide Post Navigation','electronics-retailer' ),
	  'section' => 'electronics_retailer_single_blog_settings'
	)));

	$wp_customize->add_setting( 'electronics_retailer_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
    ) );
 	$wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','electronics-retailer' ),
		'section' => 'electronics_retailer_single_blog_settings'
  )));

	//navigation text
	$wp_customize->add_setting('electronics_retailer_single_blog_prev_navigation_text',array(
		'default'=> 'PREVIOUS',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_single_blog_prev_navigation_text',array(
		'label'	=> __('Post Navigation Text','electronics-retailer'),
		'input_attrs' => array(
      'placeholder' => __( 'PREVIOUS', 'electronics-retailer' ),
      ),
		'section'=> 'electronics_retailer_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_single_blog_next_navigation_text',array(
		'default'=> 'NEXT',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_single_blog_next_navigation_text',array(
		'label'	=> __('Post Navigation Text','electronics-retailer'),
		'input_attrs' => array(
      'placeholder' => __( 'NEXT', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_single_blog_comment_title',array(
		'default'=> 'Leave a Reply',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('electronics_retailer_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','electronics-retailer'),
		'input_attrs' => array(
      'placeholder' => __( 'Leave a Reply', 'electronics-retailer' ),
    	),
		'section'=> 'electronics_retailer_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_single_blog_comment_button_text',array(
		'default'=> 'Post Comment',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('electronics_retailer_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','electronics-retailer'),
		'input_attrs' => array(
    'placeholder' => __( 'Post Comment', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','electronics-retailer'),
		'description'	=> __('Enter a value in %. Example:50%','electronics-retailer'),
		'input_attrs' => array(
      'placeholder' => __( '100%', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_single_blog_settings',
		'type'=> 'text'
	));

	 // Grid layout setting
	$wp_customize->add_section( 'electronics_retailer_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'electronics-retailer' ),
		'panel' => 'electronics_retailer_blog_post_parent_panel',
	));

	$wp_customize->add_setting('electronics_retailer_grid_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser(
        $wp_customize,'electronics_retailer_grid_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','electronics-retailer'),
		'transport' => 'refresh',
		'section'	=> 'electronics_retailer_grid_layout_settings',
		'setting'	=> 'electronics_retailer_grid_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'electronics_retailer_grid_postdate',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_grid_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','electronics-retailer' ),
    'section' => 'electronics_retailer_grid_layout_settings'
  )));

	$wp_customize->add_setting('electronics_retailer_grid_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser(
        $wp_customize,'electronics_retailer_grid_author_icon',array(
		'label'	=> __('Add Author Icon','electronics-retailer'),
		'transport' => 'refresh',
		'section'	=> 'electronics_retailer_grid_layout_settings',
		'setting'	=> 'electronics_retailer_grid_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'electronics_retailer_grid_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_grid_author',array(
		'label' => esc_html__( 'Show / Hide Author','electronics-retailer' ),
		'section' => 'electronics_retailer_grid_layout_settings'
  )));

  $wp_customize->add_setting('electronics_retailer_grid_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser(
        $wp_customize,'electronics_retailer_grid_comments_icon',array(
		'label'	=> __('Add Comments Icon','electronics-retailer'),
		'transport' => 'refresh',
		'section'	=> 'electronics_retailer_grid_layout_settings',
		'setting'	=> 'electronics_retailer_grid_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'electronics_retailer_grid_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_grid_time',array(
		'label' => esc_html__( 'Show / Hide Time','electronics-retailer' ),
		'section' => 'electronics_retailer_grid_layout_settings'
  )));

  $wp_customize->add_setting('electronics_retailer_grid_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser(
        $wp_customize,'electronics_retailer_grid_time_icon',array(
		'label'	=> __('Add Time Icon','electronics-retailer'),
		'transport' => 'refresh',
		'section'	=> 'electronics_retailer_grid_layout_settings',
		'setting'	=> 'electronics_retailer_grid_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'electronics_retailer_grid_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_grid_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','electronics-retailer' ),
		'section' => 'electronics_retailer_grid_layout_settings'
  )));

 	$wp_customize->add_setting('electronics_retailer_grid_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_grid_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','electronics-retailer'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','electronics-retailer'),
		'section'=> 'electronics_retailer_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('electronics_retailer_display_grid_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_display_grid_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Grid Posts','electronics-retailer'),
    'section' => 'electronics_retailer_grid_layout_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','electronics-retailer'),
      'Without Blocks' => __('Without Blocks','electronics-retailer')
      ),
	) );

	$wp_customize->add_setting('electronics_retailer_grid_button_text',array(
		'default'=> esc_html__('Read More','electronics-retailer'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','electronics-retailer'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_grid_layout_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_grid_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_grid_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','electronics-retailer'),
		'input_attrs' => array(
        'placeholder' => __( '[...]', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('electronics_retailer_grid_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_grid_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Grid Post Content','electronics-retailer'),
    'section' => 'electronics_retailer_grid_layout_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','electronics-retailer'),
      'Excerpt' => esc_html__('Excerpt','electronics-retailer'),
      'No Content' => esc_html__('No Content','electronics-retailer')
    ),
	) );

  $wp_customize->add_setting( 'electronics_retailer_grid_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'electronics_retailer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'electronics_retailer_grid_featured_image_border_radius', array(
		'label'       => esc_html__( 'Grid Featured Image Border Radius','electronics-retailer' ),
		'section'     => 'electronics_retailer_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'electronics_retailer_grid_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'electronics_retailer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'electronics_retailer_grid_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Grid Featured Image Box Shadow','electronics-retailer' ),
		'section'     => 'electronics_retailer_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Other
	$wp_customize->add_panel( 'electronics_retailer_other_parent_panel', array(
		'title' => esc_html__( 'Other Settings', 'electronics-retailer' ),
		'panel' => 'electronics_retailer_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'electronics_retailer_left_right', array(
  	'title' => esc_html__('General Settings', 'electronics-retailer'),
		'panel' => 'electronics_retailer_other_parent_panel'
	) );

	$wp_customize->add_setting('electronics_retailer_width_option',array(
    'default' => 'Full Width',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control(new Electronics_Retailer_Image_Radio_Control($wp_customize, 'electronics_retailer_width_option', array(
    'type' => 'select',
    'label' => esc_html__('Width Layouts','electronics-retailer'),
    'description' => esc_html__('Here you can change the width layout of Website.','electronics-retailer'),
    'section' => 'electronics_retailer_left_right',
    'choices' => array(
        'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
        'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
        'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
  ))));

	$wp_customize->add_setting('electronics_retailer_page_layout',array(
    'default' => 'One_Column',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_page_layout',array(
    'type' => 'select',
    'label' => esc_html__('Page Sidebar Layout','electronics-retailer'),
    'description' => esc_html__('Here you can change the sidebar layout for pages. ','electronics-retailer'),
    'section' => 'electronics_retailer_left_right',
    'choices' => array(
        'Left_Sidebar' => esc_html__('Left Sidebar','electronics-retailer'),
        'Right_Sidebar' => esc_html__('Right Sidebar','electronics-retailer'),
        'One_Column' => esc_html__('One Column','electronics-retailer')
    ),
	) );
	
    // Pre-Loader
	$wp_customize->add_setting( 'electronics_retailer_loader_enable',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_loader_enable',array(
    'label' => esc_html__( 'Pre-Loader','electronics-retailer' ),
    'section' => 'electronics_retailer_left_right'
  )));

	$wp_customize->add_setting('electronics_retailer_preloader_bg_color', array(
		'default'           => '#C81786',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_retailer_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'electronics-retailer'),
		'section'  => 'electronics_retailer_left_right',
	)));

	$wp_customize->add_setting('electronics_retailer_preloader_border_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_retailer_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'electronics-retailer'),
		'section'  => 'electronics_retailer_left_right',
	)));

	$wp_customize->add_setting('electronics_retailer_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'electronics_retailer_preloader_bg_img',array(
    'label' => __('Preloader Background Image','electronics-retailer'),
    'section' => 'electronics_retailer_left_right'
	)));

    //404 Page Setting
	$wp_customize->add_section('electronics_retailer_404_page',array(
		'title'	=> __('404 Page Settings','electronics-retailer'),
		'panel' => 'electronics_retailer_other_parent_panel',
	));

	$wp_customize->add_setting('electronics_retailer_404_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('electronics_retailer_404_page_title',array(
		'label'	=> __('Add Title','electronics-retailer'),
		'input_attrs' => array(
            'placeholder' => __( '404 Not Found', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_404_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_404_page_content',array(
		'label'	=> __('Add Text','electronics-retailer'),
		'input_attrs' => array(
            'placeholder' => __( 'Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_404_page_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_404_page_button_text',array(
		'label'	=> __('Add Button Text','electronics-retailer'),
		'input_attrs' => array(
            'placeholder' => __( 'Go Back', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_404_page',
		'type'=> 'text'
	));

	//No Result Page Setting
	$wp_customize->add_section('electronics_retailer_no_results_page',array(
		'title'	=> __('No Results Page Settings','electronics-retailer'),
		'panel' => 'electronics_retailer_other_parent_panel',
	));

	$wp_customize->add_setting('electronics_retailer_no_results_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('electronics_retailer_no_results_page_title',array(
		'label'	=> __('Add Title','electronics-retailer'),
		'input_attrs' => array(
            'placeholder' => __( 'Nothing Found', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_no_results_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_no_results_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_no_results_page_content',array(
		'label'	=> __('Add Text','electronics-retailer'),
		'input_attrs' => array(
            'placeholder' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_no_results_page',
		'type'=> 'text'
	));

	//Social Icon Setting
	$wp_customize->add_section('electronics_retailer_social_icon_settings',array(
		'title'	=> __('Sidebar Social Icons Settings','electronics-retailer'),
		'panel' => 'electronics_retailer_other_parent_panel',
	));

	$wp_customize->add_setting('electronics_retailer_social_icon_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_social_icon_font_size',array(
		'label'	=> __('Icon Font Size','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_social_icon_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_social_icon_padding',array(
		'label'	=> __('Icon Padding','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_social_icon_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_social_icon_width',array(
		'label'	=> __('Icon Width','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_social_icon_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_social_icon_height',array(
		'label'	=> __('Icon Height','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_social_icon_settings',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('electronics_retailer_responsive_media',array(
		'title'	=> esc_html__('Responsive Media','electronics-retailer'),
		'panel' => 'electronics_retailer_other_parent_panel',
	));

  	$wp_customize->add_setting('electronics_retailer_res_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser(
        $wp_customize,'electronics_retailer_res_open_menu_icon',array(
		'label'	=> __('Add Open Menu Icon','electronics-retailer'),
		'transport' => 'refresh',
		'section'	=> 'electronics_retailer_responsive_media',
		'setting'	=> 'electronics_retailer_res_open_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('electronics_retailer_res_close_menu_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Electronics_Retailer_Fontawesome_Icon_Chooser(
        $wp_customize,'electronics_retailer_res_close_menu_icon',array(
		'label'	=> __('Add Close Menu Icon','electronics-retailer'),
		'transport' => 'refresh',
		'section'	=> 'electronics_retailer_responsive_media',
		'setting'	=> 'electronics_retailer_res_close_menu_icon',
		'type'		=> 'icon'
	)));

  //Woocommerce settings
	$wp_customize->add_section('electronics_retailer_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'electronics-retailer'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'electronics_retailer_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar',
		'render_callback' => 'electronics_retailer_customize_partial_electronics_retailer_woocommerce_shop_page_sidebar', ) );

    //Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'electronics_retailer_woocommerce_shop_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_woocommerce_shop_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Shop Page Sidebar','electronics-retailer' ),
		'section' => 'electronics_retailer_woocommerce_section'
  )));

   $wp_customize->add_setting('electronics_retailer_shop_page_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_shop_page_layout',array(
    'type' => 'select',
    'label' => __('Shop Page Sidebar Layout','electronics-retailer'),
    'section' => 'electronics_retailer_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','electronics-retailer'),
        'Right Sidebar' => __('Right Sidebar','electronics-retailer'),
    ),
	) );

   //Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'electronics_retailer_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar',
		'render_callback' => 'electronics_retailer_customize_partial_electronics_retailer_woocommerce_single_product_page_sidebar', ) );

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'electronics_retailer_woocommerce_single_product_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'electronics_retailer_switch_sanitization'
   ) );
 	$wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Single Product Sidebar','electronics-retailer' ),
		'section' => 'electronics_retailer_woocommerce_section'
  )));

   $wp_customize->add_setting('electronics_retailer_single_product_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_single_product_layout',array(
    'type' => 'select',
    'label' => __('Single Product Sidebar Layout','electronics-retailer'),
    'section' => 'electronics_retailer_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','electronics-retailer'),
        'Right Sidebar' => __('Right Sidebar','electronics-retailer'),
    ),
	) );

	//Products per page
    $wp_customize->add_setting('electronics_retailer_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'electronics_retailer_sanitize_float'
	));
	$wp_customize->add_control('electronics_retailer_products_per_page',array(
		'label'	=> __('Products Per Page','electronics-retailer'),
		'description' => __('Display on shop page','electronics-retailer'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'electronics_retailer_woocommerce_section',
		'type'=> 'number',
	));

    //Products per row
    $wp_customize->add_setting('electronics_retailer_products_per_row',array(
		'default'=> '4',
		'sanitize_callback'	=> 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_products_per_row',array(
		'label'	=> __('Products Per Row','electronics-retailer'),
		'description' => __('Display on shop page','electronics-retailer'),
		'choices' => array(
      '2' => '2',
			'3' => '3',
			'4' => '4',
    ),
		'section'=> 'electronics_retailer_woocommerce_section',
		'type'=> 'select',
		));

	//Products padding
	$wp_customize->add_setting('electronics_retailer_products_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_products_padding_top_bottom',array(
		'label'	=> __('Products Padding Top Bottom','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_products_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_products_padding_left_right',array(
		'label'	=> __('Products Padding Left Right','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_woocommerce_section',
		'type'=> 'text'
	));

	//Products box shadow
	$wp_customize->add_setting( 'electronics_retailer_products_box_shadow', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'electronics_retailer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'electronics_retailer_products_box_shadow', array(
		'label'       => esc_html__( 'Products Box Shadow','electronics-retailer' ),
		'section'     => 'electronics_retailer_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products border radius
    $wp_customize->add_setting( 'electronics_retailer_products_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'electronics_retailer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'electronics_retailer_products_border_radius', array(
		'label'       => esc_html__( 'Products Border Radius','electronics-retailer' ),
		'section'     => 'electronics_retailer_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'electronics_retailer_products_button_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'electronics_retailer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'electronics_retailer_products_button_border_radius', array(
		'label'       => esc_html__( 'Products Button Border Radius','electronics-retailer' ),
		'section'     => 'electronics_retailer_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('electronics_retailer_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_woocommerce_section',
		'type'=> 'text'
	));

	//Products Sale Badge
	$wp_customize->add_setting('electronics_retailer_woocommerce_sale_position',array(
    'default' => 'right',
    'sanitize_callback' => 'electronics_retailer_sanitize_choices'
	));
	$wp_customize->add_control('electronics_retailer_woocommerce_sale_position',array(
    'type' => 'select',
    'label' => __('Sale Badge Position','electronics-retailer'),
    'section' => 'electronics_retailer_woocommerce_section',
    'choices' => array(
        'left' => __('Left','electronics-retailer'),
        'right' => __('Right','electronics-retailer'),
    ),
	) );

	$wp_customize->add_setting('electronics_retailer_woocommerce_sale_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_woocommerce_sale_padding_top_bottom',array(
		'label'	=> __('Sale Padding Top Bottom','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('electronics_retailer_woocommerce_sale_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_retailer_woocommerce_sale_padding_left_right',array(
		'label'	=> __('Sale Padding Left Right','electronics-retailer'),
		'description'	=> __('Enter a value in pixels. Example:20px','electronics-retailer'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'electronics-retailer' ),
        ),
		'section'=> 'electronics_retailer_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'electronics_retailer_woocommerce_sale_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'electronics_retailer_sanitize_number_range'
	) );
	$wp_customize->add_control( 'electronics_retailer_woocommerce_sale_border_radius', array(
		'label'       => esc_html__( 'Sale Border Radius','electronics-retailer' ),
		'section'     => 'electronics_retailer_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// Related Product
  $wp_customize->add_setting( 'electronics_retailer_related_product_show_hide',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'electronics_retailer_switch_sanitization'
  ) );
  $wp_customize->add_control( new Electronics_Retailer_Toggle_Switch_Custom_Control( $wp_customize, 'electronics_retailer_related_product_show_hide',array(
    'label' => esc_html__( 'Show / Hide Related product','electronics-retailer' ),
    'section' => 'electronics_retailer_woocommerce_section'
  )));

}

add_action( 'customize_register', 'electronics_retailer_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Electronics_Retailer_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Electronics_Retailer_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Electronics_Retailer_Customize_Section_Pro( $manager,'electronics_retailer_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'RETAILER PRO', 'electronics-retailer' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'electronics-retailer' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/products/electronics-store-wordpress-theme'),
		) )	);

		$manager->add_section(new Electronics_Retailer_Customize_Section_Pro($manager,'electronics_retailer_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'electronics-retailer' ),
			'pro_text' => esc_html__( 'DOCS', 'electronics-retailer' ),
			'pro_url'  => esc_url('https://preview.vwthemesdemo.com/docs/free-electronics-retailer/'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'electronics-retailer-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'electronics-retailer-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Electronics_Retailer_Customize::get_instance();