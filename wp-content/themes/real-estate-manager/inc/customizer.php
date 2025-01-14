<?php
/**
 * Real Estate Manager: Customizer
 *
 * @package Real Estate Manager
 * @subpackage real_estate_manager
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function Real_Estate_Manager_Customize_register( $wp_customize ) {

	require get_parent_theme_file_path('/inc/controls/icon-changer.php');

	require get_parent_theme_file_path('/inc/controls/range-slider-control.php');

	// Register the custom control type.
	$wp_customize->register_control_type( 'Real_Estate_Manager_Toggle_Control' );

	//Register the sortable control type.
	$wp_customize->register_control_type( 'Real_Estate_Manager_Control_Sortable' );	

	//add home page setting pannel
	$wp_customize->add_panel( 'real_estate_manager_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Custom Home page', 'real-estate-manager' ),
	    'description' => __( 'Description of what this panel does.', 'real-estate-manager' ),
	) );

	//TP Genral Option
	$wp_customize->add_section('real_estate_manager_tp_general_settings',array(
        'title' => __('TP General Option', 'real-estate-manager'),
        'priority' => 1,
        'panel' => 'real_estate_manager_panel_id'
    ) );
 	$wp_customize->add_setting('real_estate_manager_tp_body_layout_settings',array(
		'default' => 'Full',
		'sanitize_callback' => 'real_estate_manager_sanitize_choices'
	));

 	$wp_customize->add_control('real_estate_manager_tp_body_layout_settings',array(
		'type' => 'radio',
		'label'     => __('Body Layout Setting', 'real-estate-manager'),
		'description'   => __('This option work for complete body, if you want to set the complete website in container.', 'real-estate-manager'),
		'section' => 'real_estate_manager_tp_general_settings',
		'choices' => array(
		'Full' => __('Full','real-estate-manager'),
		'Container' => __('Container','real-estate-manager'),
		'Container Fluid' => __('Container Fluid','real-estate-manager')
		),
	) );

    // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('real_estate_manager_sidebar_post_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'real_estate_manager_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_manager_sidebar_post_layout',array(
     'type' => 'radio',
     'label'     => __('Post Sidebar Position', 'real-estate-manager'),
     'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'real-estate-manager'),
     'section' => 'real_estate_manager_tp_general_settings',
     'choices' => array(
         'full' => __('Full','real-estate-manager'),
         'left' => __('Left','real-estate-manager'),
         'right' => __('Right','real-estate-manager'),
         'three-column' => __('Three Columns','real-estate-manager'),
         'four-column' => __('Four Columns','real-estate-manager'),
         'grid' => __('Grid Layout','real-estate-manager')
     ),
	) );

	// Add Settings and Controls for single post sidebar Layout
	$wp_customize->add_setting('real_estate_manager_sidebar_single_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'real_estate_manager_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_manager_sidebar_single_post_layout',array(
        'type' => 'radio',
        'label'     => __('Single Post Sidebar Position', 'real-estate-manager'),
        'description'   => __('This option work for single blog page', 'real-estate-manager'),
        'section' => 'real_estate_manager_tp_general_settings',
        'choices' => array(
            'full' => __('Full','real-estate-manager'),
            'left' => __('Left','real-estate-manager'),
            'right' => __('Right','real-estate-manager'),
        ),
	) );

	// Add Settings and Controls for Page Layout
	$wp_customize->add_setting('real_estate_manager_sidebar_page_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'real_estate_manager_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_manager_sidebar_page_layout',array(
     'type' => 'radio',
     'label'     => __('Page Sidebar Position', 'real-estate-manager'),
     'description'   => __('This option work for pages.', 'real-estate-manager'),
     'section' => 'real_estate_manager_tp_general_settings',
     'choices' => array(
         'full' => __('Full','real-estate-manager'),
         'left' => __('Left','real-estate-manager'),
         'right' => __('Right','real-estate-manager')
     ),
	) );
	//tp typography option
	$real_estate_manager_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One',
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower',
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit',
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two',
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda',
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli',
		'Marck Script'           => 'Marck Script',
		'Noto Serif'             => 'Noto Serif',
		'Open Sans'              => 'Open Sans',
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen',
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display',
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik',
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo',
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn',
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	$wp_customize->add_section('real_estate_manager_typography_option',array(
		'title'         => __('TP Typography Option', 'real-estate-manager'),
		'priority' => 1,
		'panel' => 'real_estate_manager_panel_id'
   	));

   	$wp_customize->add_setting('real_estate_manager_heading_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'real_estate_manager_sanitize_choices',
	));
	$wp_customize->add_control(	'real_estate_manager_heading_font_family', array(
		'section' => 'real_estate_manager_typography_option',
		'label'   => __('heading Fonts', 'real-estate-manager'),
		'type'    => 'select',
		'choices' => $real_estate_manager_font_array,
	));

	$wp_customize->add_setting('real_estate_manager_body_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'real_estate_manager_sanitize_choices',
	));
	$wp_customize->add_control(	'real_estate_manager_body_font_family', array(
		'section' => 'real_estate_manager_typography_option',
		'label'   => __('Body Fonts', 'real-estate-manager'),
		'type'    => 'select',
		'choices' => $real_estate_manager_font_array,
	));

	//TP Color Option
	$wp_customize->add_section('real_estate_manager_color_option',array(
     'title'         => __('TP Color Option', 'real-estate-manager'),
     'priority' => 1,
     'panel' => 'real_estate_manager_panel_id'
    ) );
    
	$wp_customize->add_setting( 'real_estate_manager_tp_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'real_estate_manager_tp_color_option', array(
			'label'     => __('Theme First Color', 'real-estate-manager'),
	    'description' => __('It will change the complete theme color in one click.', 'real-estate-manager'),
	    'section' => 'real_estate_manager_color_option',
	    'settings' => 'real_estate_manager_tp_color_option',
  	)));

	//TP Preloader Option
	$wp_customize->add_section('real_estate_manager_prelaoder_option',array(
		'title'         => __('TP Preloader Option', 'real-estate-manager'),
		'priority' => 1,
		'panel' => 'real_estate_manager_panel_id'
	) );

	$wp_customize->add_setting( 'real_estate_manager_preloader_show_hide', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Real_Estate_Manager_Toggle_Control( $wp_customize, 'real_estate_manager_preloader_show_hide', array(
		'label'       => esc_html__( 'Show / Hide Preloader Option', 'real-estate-manager' ),
		'section'     => 'real_estate_manager_prelaoder_option',
		'type'        => 'toggle',
		'settings'    => 'real_estate_manager_preloader_show_hide',
	) ) );
	$wp_customize->add_setting( 'real_estate_manager_tp_preloader_color1_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'real_estate_manager_tp_preloader_color1_option', array(
			'label'     => __('Preloader First Ring Color', 'real-estate-manager'),
	    'description' => __('It will change the complete theme preloader ring 1 color in one click.', 'real-estate-manager'),
	    'section' => 'real_estate_manager_prelaoder_option',
	    'settings' => 'real_estate_manager_tp_preloader_color1_option',
  	)));
  	$wp_customize->add_setting( 'real_estate_manager_tp_preloader_color2_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'real_estate_manager_tp_preloader_color2_option', array(
			'label'     => __('Preloader Second Ring Color', 'real-estate-manager'),
	    'description' => __('It will change the complete theme preloader ring 2 color in one click.', 'real-estate-manager'),
	    'section' => 'real_estate_manager_prelaoder_option',
	    'settings' => 'real_estate_manager_tp_preloader_color2_option',
  	)));
  	$wp_customize->add_setting( 'real_estate_manager_tp_preloader_bg_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'real_estate_manager_tp_preloader_bg_color_option', array(
			'label'     => __('Preloader Background Color', 'real-estate-manager'),
	    'description' => __('It will change the complete theme preloader bg color in one click.', 'real-estate-manager'),
	    'section' => 'real_estate_manager_prelaoder_option',
	    'settings' => 'real_estate_manager_tp_preloader_bg_color_option',
  	)));

	//TP Blog Option
	$wp_customize->add_section('real_estate_manager_blog_option',array(
		'title' => __('TP Blog Option', 'real-estate-manager'),
		'priority' => 1,
		'panel' => 'real_estate_manager_panel_id'
	) );

	$wp_customize->add_setting('blog_meta_order', array(
        'default' => array('date', 'author', 'comment', 'category'),
        'sanitize_callback' => 'real_estate_manager_sanitize_sortable',
    ));
    $wp_customize->add_control(new Real_Estate_Manager_Control_Sortable($wp_customize, 'blog_meta_order', array(
    	'label' => esc_html__('Meta Order', 'real-estate-manager'),
        'description' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'real-estate-manager') ,
        'section' => 'real_estate_manager_blog_option',
        'choices' => array(
            'date' => __('date', 'real-estate-manager') ,
            'author' => __('author', 'real-estate-manager') ,
            'comment' => __('comment', 'real-estate-manager') ,
            'category' => __('category', 'real-estate-manager') ,
        ) ,
    )));

    $wp_customize->add_setting( 'real_estate_manager_excerpt_count', array(
		'default'              => 35,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'real_estate_manager_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'real_estate_manager_excerpt_count', array(
		'label'       => esc_html__( 'Edit Excerpt Limit','real-estate-manager' ),
		'section'     => 'real_estate_manager_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('real_estate_manager_read_more_text',array(
		'default'=> __('Read More','real-estate-manager'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_manager_read_more_text',array(
		'label'	=> __('Edit Button Text','real-estate-manager'),
		'section'=> 'real_estate_manager_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_manager_post_image_round', array(
	  'default' => '0',
      'sanitize_callback' => 'real_estate_manager_sanitize_number_range',
	));
	$wp_customize->add_control(new Real_Estate_Manager_Range_Slider($wp_customize, 'real_estate_manager_post_image_round', array(
       'section' => 'real_estate_manager_blog_option',
      'label' => esc_html__('Edit Post Image Border Radius', 'real-estate-manager'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 180,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('real_estate_manager_post_image_width', array(
	  'default' => '',
      'sanitize_callback' => 'real_estate_manager_sanitize_number_range',
	));
	$wp_customize->add_control(new Real_Estate_Manager_Range_Slider($wp_customize, 'real_estate_manager_post_image_width', array(
       'section' => 'real_estate_manager_blog_option',
      'label' => esc_html__('Edit Post Image Width', 'real-estate-manager'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 367,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('real_estate_manager_post_image_length', array(
	  'default' => '',
      'sanitize_callback' => 'real_estate_manager_sanitize_number_range',
	));
	$wp_customize->add_control(new Real_Estate_Manager_Range_Slider($wp_customize, 'real_estate_manager_post_image_length', array(
       'section' => 'real_estate_manager_blog_option',
      'label' => esc_html__('Edit Post Image height', 'real-estate-manager'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 900,
        'step' => 1
    )
	)));

	$wp_customize->add_setting( 'real_estate_manager_remove_read_button', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Real_Estate_Manager_Toggle_Control( $wp_customize, 'real_estate_manager_remove_read_button', array(
		'label'       => esc_html__( 'Show / Hide Read More Button', 'real-estate-manager' ),
		'section'     => 'real_estate_manager_blog_option',
		'type'        => 'toggle',
		'settings'    => 'real_estate_manager_remove_read_button',
	) ) );

    $wp_customize->selective_refresh->add_partial( 'real_estate_manager_remove_read_button', array(
		'selector' => '.readmore-btn',
		'render_callback' => 'Real_Estate_Manager_Customize_partial_real_estate_manager_remove_read_button',
	 ));

	 $wp_customize->add_setting( 'real_estate_manager_remove_tags', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Real_Estate_Manager_Toggle_Control( $wp_customize, 'real_estate_manager_remove_tags', array(
		'label'       => esc_html__( 'Show / Hide Tags Option', 'real-estate-manager' ),
		'section'     => 'real_estate_manager_blog_option',
		'type'        => 'toggle',
		'settings'    => 'real_estate_manager_remove_tags',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'real_estate_manager_remove_tags', array(
		'selector' => '.box-content a[rel="tag"]',
		'render_callback' => 'Real_Estate_Manager_Customize_partial_real_estate_manager_remove_tags',
	));
	$wp_customize->add_setting( 'real_estate_manager_remove_category', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Real_Estate_Manager_Toggle_Control( $wp_customize, 'real_estate_manager_remove_category', array(
		'label'       => esc_html__( 'Show / Hide Category Option', 'real-estate-manager' ),
		'section'     => 'real_estate_manager_blog_option',
		'type'        => 'toggle',
		'settings'    => 'real_estate_manager_remove_category',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'real_estate_manager_remove_category', array(
		'selector' => '.box-content a[rel="category"]',
		'render_callback' => 'Real_Estate_Manager_Customize_partial_real_estate_manager_remove_category',
	));
	$wp_customize->add_setting( 'real_estate_manager_remove_comment', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Real_Estate_Manager_Toggle_Control( $wp_customize, 'real_estate_manager_remove_comment', array(
	 'label'       => esc_html__( 'Show / Hide Comment Form', 'real-estate-manager' ),
	 'section'     => 'real_estate_manager_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'real_estate_manager_remove_comment',
	) ) );

	$wp_customize->add_setting( 'real_estate_manager_remove_related_post', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Real_Estate_Manager_Toggle_Control( $wp_customize, 'real_estate_manager_remove_related_post', array(
	 'label'       => esc_html__( 'Show / Hide Related Post', 'real-estate-manager' ),
	 'section'     => 'real_estate_manager_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'real_estate_manager_remove_related_post',
	) ) );
	$wp_customize->add_setting( 'real_estate_manager_related_post_per_page', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'real_estate_manager_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'real_estate_manager_related_post_per_page', array(
		'label'       => esc_html__( 'Related Post Per Page','real-estate-manager' ),
		'section'     => 'real_estate_manager_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 3,
			'max'              => 9,
		),
	) );

	 //MENU TYPOGRAPHY
	$wp_customize->add_section( 'real_estate_manager_menu_typography', array(
    	'title'      => __( 'Menu Typography', 'real-estate-manager' ),
    	'priority' => 2,
		'panel' => 'real_estate_manager_panel_id'
	) );
	$wp_customize->add_setting('real_estate_manager_menu_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'real_estate_manager_sanitize_choices',
	));
	$wp_customize->add_control(	'real_estate_manager_menu_font_family', array(
		'section' => 'real_estate_manager_menu_typography',
		'label'   => __('Menu Fonts', 'real-estate-manager'),
		'type'    => 'select',
		'choices' => $real_estate_manager_font_array,
	));

	$wp_customize->add_setting('real_estate_manager_menu_text_tranform',array(
		'default' => '',
		'sanitize_callback' => 'real_estate_manager_sanitize_choices'
 	));
 	$wp_customize->add_control('real_estate_manager_menu_text_tranform',array(
		'type' => 'select',
		'label' => __('Menu Text Transform','real-estate-manager'),
		'section' => 'real_estate_manager_menu_typography',
		'choices' => array(
		   'Uppercase' => __('Uppercase','real-estate-manager'),
		   'Lowercase' => __('Lowercase','real-estate-manager'),
		   'Capitalize' => __('Capitalize','real-estate-manager'),
		),
	) );
	
	$wp_customize->add_setting('real_estate_manager_menu_font_size', array(
	  'default' => '',
      'sanitize_callback' => 'real_estate_manager_sanitize_number_range',
	));
	$wp_customize->add_control(new Real_Estate_Manager_Range_Slider($wp_customize, 'real_estate_manager_menu_font_size', array(
       'section' => 'real_estate_manager_menu_typography',
      'label' => esc_html__('Font Size', 'real-estate-manager'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 20,
        'step' => 1
    )
	)));

	// Top bar Section
	$wp_customize->add_section( 'real_estate_manager_topbar', array(
    	'title'      => __( 'Header Details', 'real-estate-manager' ),
    	'description' => __( 'Add Header details', 'real-estate-manager' ),
		'panel' => 'real_estate_manager_panel_id',
      'priority' => 2,
	) );

	$wp_customize->add_setting('real_estate_manager_topbar_visibility', array(
	    'default'           => true, // Default is to show the top bar.
	    'transport'         => 'refresh',
	    'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
	));

	$wp_customize->add_control(new Real_Estate_Manager_Toggle_Control($wp_customize, 'real_estate_manager_topbar_visibility', array(
	    'label'       => esc_html__('Show / Hide Topbar', 'real-estate-manager'),
	    'section'     => 'real_estate_manager_topbar',
	    'type'        => 'toggle',
	    'settings'    => 'real_estate_manager_topbar_visibility',
	)));

	$wp_customize->add_setting('real_estate_manager_topbar_text_top',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_manager_topbar_text_top',array(
		'label'	=> __('Add Topbar Text','real-estate-manager'),
		'section'=> 'real_estate_manager_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_manager_header_button_first',array(
		'default'=> 'Explore Now',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_manager_header_button_first',array(
		'label'	=> __('Explore Now Text','real-estate-manager'),
		'section'=> 'real_estate_manager_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_manager_header_link_first',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('real_estate_manager_header_link_first',array(
		'label'	=> __('Explore Now Link','real-estate-manager'),
		'section'=> 'real_estate_manager_topbar',
		'type'=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'real_estate_manager_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'real-estate-manager' ),
		'panel' => 'real_estate_manager_panel_id',
      'priority' => 6,
	) );

	$wp_customize->add_setting( 'real_estate_manager_slider_arrows', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Real_Estate_Manager_Toggle_Control( $wp_customize, 'real_estate_manager_slider_arrows', array(
		'label'       => esc_html__( 'Show / Hide slider', 'real-estate-manager' ),
		'section'     => 'real_estate_manager_slider_section',
		'type'        => 'toggle',
		'settings'    => 'real_estate_manager_slider_arrows',
	) ) );

    $wp_customize->selective_refresh->add_partial( 'real_estate_manager_slider_arrows', array(
		'selector' => '#slider .carousel-caption',
		'render_callback' => 'Real_Estate_Manager_Customize_partial_real_estate_manager_slider_arrows',
	) );

	$wp_customize->add_setting('real_estate_manager_slider_short_heading',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_manager_slider_short_heading',array(
		'label'	=> __('Add short Heading','real-estate-manager'),
		'section'=> 'real_estate_manager_slider_section',
		'type'=> 'text'
	));


	for ( $real_estate_manager_count = 1; $real_estate_manager_count <= 4; $real_estate_manager_count++ ) {

	// Add color scheme setting and control.
	$wp_customize->add_setting( 'real_estate_manager_slider_page' . $real_estate_manager_count, array(
		'default'           => '',
		'sanitize_callback' => 'real_estate_manager_sanitize_dropdown_pages'
	) );

	$wp_customize->add_control( 'real_estate_manager_slider_page' . $real_estate_manager_count, array(
		'label'    => __( 'Select Slide Image Page', 'real-estate-manager' ),
		'section'  => 'real_estate_manager_slider_section',
		'type'     => 'dropdown-pages'
	) );
	}

	$wp_customize->add_setting('real_estate_manager_product_btn_text1',array(
		'default'=> 'Explore',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_manager_product_btn_text1',array(
		'label'	=> esc_html__('Add Slider Button 1 Text','real-estate-manager'),
		'section'=> 'real_estate_manager_slider_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('real_estate_manager_product_btn_link1',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('real_estate_manager_product_btn_link1',array(
		'label'	=> esc_html__('Add Slider Button 1 link','real-estate-manager'),
		'section'=> 'real_estate_manager_slider_section',
		'type'=> 'url'
	));

	$real_estate_manager_featured_post = get_theme_mod('real_estate_manager_projetcs_number',3);

	for ( $j = 1; $j <= 3; $j++ ) {

	    $wp_customize->add_setting('real_estate_manager_projetcs_text'.$j,array(
	        'default'=> '',
	        'sanitize_callback' => 'sanitize_text_field'
	    ));
	    $wp_customize->add_control('real_estate_manager_projetcs_text'.$j,array(
	        'label' => esc_html__('Add Tab Text ','real-estate-manager').$j,
	        'section'=> 'real_estate_manager_slider_section',
	        'type'=> 'text'
	    ));

	    $wp_customize->add_setting('real_estate_manager_projetcs_shortcode' . $j, array(
	        'default' => '',
	        'sanitize_callback' => 'sanitize_text_field'
	    ));

	    $wp_customize->add_control('real_estate_manager_projetcs_shortcode' . $j, array(
	        'label' => esc_html__('Add Shortcode for Tab ', 'real-estate-manager') . $j,
	        'section' => 'real_estate_manager_slider_section',
	        'type' => 'text',
	    ));

	}
	
	/*=========================================
	service Section
	=========================================*/
	$wp_customize->add_section( 
		'real_estate_manager_properties_section' , 
		array(
	        'title'      => __( 'Premium Properties Section', 'real-estate-manager' ),
	        'priority' => 7,
	        'panel' => 'real_estate_manager_panel_id',
    	) 
    );

    $wp_customize->add_setting( 'real_estate_manager_courses_setting', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Real_Estate_Manager_Toggle_Control( $wp_customize, 'real_estate_manager_courses_setting', array(
		'label'       => esc_html__( 'Show / Hide Section', 'real-estate-manager' ),
		'section'     => 'real_estate_manager_properties_section',
		'type'        => 'toggle',
		'settings'    => 'real_estate_manager_courses_setting',
	) ) );

    $wp_customize->add_setting(
    	'real_estate_manager_offer_section_text',
    	array(
	        'default'   => '',
	        'sanitize_callback' => 'sanitize_text_field'
    	)
    );
    $wp_customize->add_control(
    	'real_estate_manager_offer_section_text',
    	array(
	        'label' => __('Section Small Title','real-estate-manager'),
	        'section'   => 'real_estate_manager_properties_section',
	        'type'      => 'text'
    	)
    );

    $wp_customize->add_setting(
    	'real_estate_manager_offer_section_tittle',
    	array(
	        'default'   => '',
	        'sanitize_callback' => 'sanitize_text_field'
    	)
    );
    $wp_customize->add_control(
    	'real_estate_manager_offer_section_tittle',
    	array(
	        'label' => __('Section Title','real-estate-manager'),
	        'section'   => 'real_estate_manager_properties_section',
	        'type'      => 'text'
    	)
    );

    $categories = get_categories();
    $cats = array();
    $i = 0;
    $offer_cat[]= 'select';
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $offer_cat[$category->slug] = $category->name;
    }

    $wp_customize->add_setting(
    	'real_estate_manager_offer_section_category',
    	array(
	        'default'   => 'select',
	        'sanitize_callback' => 'real_estate_manager_sanitize_choices',
    	)
    );
    $wp_customize->add_control(
    	'real_estate_manager_offer_section_category',
    	array(
	        'type'    => 'select',
	        'choices' => $offer_cat,
	        'label' => __('Select Category','real-estate-manager'),
	        'section' => 'real_estate_manager_properties_section',
    	)
    );

   // Setting for number of posts to show
    $wp_customize->add_setting('real_estate_manager_posts_to_show', array(
        'default'           => 4, // Default number of posts to show
        'sanitize_callback' => 'absint', // Sanitization callback
    ));

    // Add control for number of posts to show
    $wp_customize->add_control('real_estate_manager_posts_to_show', array(
        'label'       => __('Number of Popular Posts to Show', 'real-estate-manager'),
        'section'     => 'real_estate_manager_properties_section',
        'priority'    => 10,
        'type'        => 'number',
        'input_attrs' => array(
            'step' => 1,
            'min'  => 0,
            'max'  => 50,
        ),
    ));

    // Get the number of posts to show
    $real_estate_manager_posts_to_show = get_theme_mod('real_estate_manager_posts_to_show', 4);
    
    // Loop to create settings and controls for each post's price and star rating
    for ($real_estate_manager_i = 1; $real_estate_manager_i <= $real_estate_manager_posts_to_show; $real_estate_manager_i++) {

    	$wp_customize->add_setting('real_estate_manager_home_location' . $real_estate_manager_i, array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('real_estate_manager_home_location' . $real_estate_manager_i, array(
            'label'    => __('Add Home Location for Post ', 'real-estate-manager') . $real_estate_manager_i,
            'section'  => 'real_estate_manager_properties_section',
            'type'     => 'text',
            'priority' => 998,
        ));

        $wp_customize->add_setting('real_estate_manager_home_date' . $real_estate_manager_i, array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('real_estate_manager_home_date' . $real_estate_manager_i, array(
            'label'    => __('Add Date for Post ', 'real-estate-manager') . $real_estate_manager_i,
            'section'  => 'real_estate_manager_properties_section',
            'type'     => 'text',
            'priority' => 998,
        ));

    	$wp_customize->add_setting('real_estate_manager_no_bedrooms' . $real_estate_manager_i, array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('real_estate_manager_no_bedrooms' . $real_estate_manager_i, array(
            'label'    => __('Add No. of Bedrooms in Post ', 'real-estate-manager') . $real_estate_manager_i,
            'section'  => 'real_estate_manager_properties_section',
            'type'     => 'text',
            'priority' => 998,
        ));

        $wp_customize->add_setting('real_estate_manager_no_bathrooms' . $real_estate_manager_i, array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));

        $wp_customize->add_control('real_estate_manager_no_bathrooms' . $real_estate_manager_i, array(
            'label'    => __('Add No. of Bathrooms in Post ', 'real-estate-manager') . $real_estate_manager_i,
            'section'  => 'real_estate_manager_properties_section',
            'type'     => 'text',
            'priority' => 998,
        ));

        $wp_customize->add_setting('real_estate_manager_home_area' . $real_estate_manager_i, array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));

        $wp_customize->add_control('real_estate_manager_home_area' . $real_estate_manager_i, array(
            'label'    => __('Add Total Area in Post ', 'real-estate-manager') . $real_estate_manager_i,
            'section'  => 'real_estate_manager_properties_section',
            'type'     => 'text',
            'priority' => 998,
        ));

        $wp_customize->add_setting('real_estate_manager_courses_prices' . $real_estate_manager_i, array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('real_estate_manager_courses_prices' . $real_estate_manager_i, array(
            'label'    => __('Add Price for Post ', 'real-estate-manager') . $real_estate_manager_i,
            'section'  => 'real_estate_manager_properties_section',
            'type'     => 'text',
            'priority' => 998,
        ));

    }

	//footer
	$wp_customize->add_section('real_estate_manager_footer_section',array(
		'title'	=> __('Footer Text','real-estate-manager'),
		'description'	=> __('Add copyright text.','real-estate-manager'),
		'panel' => 'real_estate_manager_panel_id',
		'priority' => 7,
	));
	$wp_customize->add_setting('real_estate_manager_footer_text',array(
		'default'	=> 'Real Estate Manager WordPress Theme',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_manager_footer_text',array(
		'label'	=> __('Copyright Text','real-estate-manager'),
		'section'	=> 'real_estate_manager_footer_section',
		'type'		=> 'text'
	));

	//footer widget title font size
	$wp_customize->add_setting('real_estate_manager_footer_copyright_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'real_estate_manager_sanitize_number_absint'
	));
	$wp_customize->add_control('real_estate_manager_footer_copyright_font_size',array(
		'label'	=> __('Change Footer Copyright Font Size in PX','real-estate-manager'),
		'section'	=> 'real_estate_manager_footer_section',
	    'setting'	=> 'real_estate_manager_footer_copyright_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'real_estate_manager_footer_copyright_text_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'real_estate_manager_footer_copyright_text_color', array(
			'label'     => __('Change Footer Copyright Text Color', 'real-estate-manager'),
	    'section' => 'real_estate_manager_footer_section',
	    'settings' => 'real_estate_manager_footer_copyright_text_color',
  	)));

  	$wp_customize->add_setting('real_estate_manager_footer_copyright_top_bottom_padding',array(
		'default'	=> '',
		'sanitize_callback'	=> 'real_estate_manager_sanitize_number_absint'
	));
	$wp_customize->add_control('real_estate_manager_footer_copyright_top_bottom_padding',array(
		'label'	=> __('Change Footer Copyright Padding in PX','real-estate-manager'),
		'section'	=> 'real_estate_manager_footer_section',
	    'setting'	=> 'real_estate_manager_footer_copyright_top_bottom_padding',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	// footer columns
	$wp_customize->add_setting('real_estate_manager_footer_columns',array(
		'default'	=> 4,
		'sanitize_callback'	=> 'real_estate_manager_sanitize_number_absint'
	));
	$wp_customize->add_control('real_estate_manager_footer_columns',array(
		'label'	=> __('Footer Widget Columns','real-estate-manager'),
		'section'	=> 'real_estate_manager_footer_section',
		'setting'	=> 'real_estate_manager_footer_columns',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	));
	$wp_customize->add_setting( 'real_estate_manager_tp_footer_bg_color_option', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'real_estate_manager_tp_footer_bg_color_option', array(
			'label'     => __('Footer Widget Background Color', 'real-estate-manager'),
			'description' => __('It will change the complete footer widget backgorund color.', 'real-estate-manager'),
			'section' => 'real_estate_manager_footer_section',
			'settings' => 'real_estate_manager_tp_footer_bg_color_option',
	)));
	$wp_customize->add_setting('real_estate_manager_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'real_estate_manager_footer_widget_image',array(
        'label' => __('Footer Widget Background Image','real-estate-manager'),
         'section' => 'real_estate_manager_footer_section'
	)));

	//footer widget title font size
	$wp_customize->add_setting('real_estate_manager_footer_widget_title_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'real_estate_manager_sanitize_number_absint'
	));
	$wp_customize->add_control('real_estate_manager_footer_widget_title_font_size',array(
		'label'	=> __('Change Footer Widget Title Font Size in PX','real-estate-manager'),
		'section'	=> 'real_estate_manager_footer_section',
	    'setting'	=> 'real_estate_manager_footer_widget_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'real_estate_manager_footer_widget_title_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'real_estate_manager_footer_widget_title_color', array(
			'label'     => __('Change Footer Widget Title Color', 'real-estate-manager'),
	    'section' => 'real_estate_manager_footer_section',
	    'settings' => 'real_estate_manager_footer_widget_title_color',
  	)));

	$wp_customize->add_setting( 'real_estate_manager_return_to_header', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Real_Estate_Manager_Toggle_Control( $wp_customize, 'real_estate_manager_return_to_header', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'real-estate-manager' ),
		'section'     => 'real_estate_manager_footer_section',
		'type'        => 'toggle',
		'settings'    => 'real_estate_manager_return_to_header',
	) ) );
    $wp_customize->add_setting('real_estate_manager_scroll_top_icon',array(
	  'default'	=> 'fas fa-arrow-up',
	  'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Real_Estate_Manager_Icon_Changer(
	        $wp_customize,'real_estate_manager_scroll_top_icon',array(
		'label'	=> __('Scroll to top Icon','real-estate-manager'),
		'transport' => 'refresh',
		'section'	=> 'real_estate_manager_footer_section',
			'type'		=> 'icon'
	)));

    // Add Settings and Controls for Scroll top
	$wp_customize->add_setting('real_estate_manager_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'real_estate_manager_sanitize_choices'
	));
	$wp_customize->add_control('real_estate_manager_scroll_top_position',array(
        'type' => 'radio',
        'label'     => __('Scroll to top Position', 'real-estate-manager'),
        'description'   => __('This option work for scroll to top', 'real-estate-manager'),
       'section' => 'real_estate_manager_footer_section',
       'choices' => array(
            'Right' => __('Right','real-estate-manager'),
            'Left' => __('Left','real-estate-manager'),
            'Center' => __('Center','real-estate-manager')
     ),
	) );
	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'Real_Estate_Manager_Customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'Real_Estate_Manager_Customize_partial_blogdescription',
	) );

	//Mobile Respnsive
	$wp_customize->add_section('real_estate_manager_mobile_media_option',array(
		'title'         => __('Mobile Responsive media', 'real-estate-manager'),
		'description' => __('Control will not function if the toggle in the main settings is off.', 'real-estate-manager'),
		'priority' => 8,
		'panel' => 'real_estate_manager_panel_id'
	) );
	$wp_customize->add_setting( 'real_estate_manager_return_to_header_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Real_Estate_Manager_Toggle_Control( $wp_customize, 'real_estate_manager_return_to_header_mob', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'real-estate-manager' ),
		'section'     => 'real_estate_manager_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'real_estate_manager_return_to_header_mob',
	) ) );
	$wp_customize->add_setting( 'real_estate_manager_related_post_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Real_Estate_Manager_Toggle_Control( $wp_customize, 'real_estate_manager_related_post_mob', array(
		'label'       => esc_html__( 'Show / Hide Related Post', 'real-estate-manager' ),
		'section'     => 'real_estate_manager_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'real_estate_manager_related_post_mob',
	) ) );

	//Site Identity
	$wp_customize->add_setting( 'real_estate_manager_site_title', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Real_Estate_Manager_Toggle_Control( $wp_customize, 'real_estate_manager_site_title', array(
		'label'       => esc_html__( 'Show / Hide Site Title', 'real-estate-manager' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'real_estate_manager_site_title',
	) ) );

	$wp_customize->add_setting('real_estate_manager_site_title_font_size',array(
		'default'	=> 30,
		'sanitize_callback'	=> 'real_estate_manager_sanitize_number_absint'
	));
	$wp_customize->add_control('real_estate_manager_site_title_font_size',array(
		'label'	=> __('Site Title Font Size in PX','real-estate-manager'),
		'section'	=> 'title_tagline',
		'setting'	=> 'real_estate_manager_site_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 80,
		),
	));

	$wp_customize->add_setting( 'real_estate_manager_site_tagline_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'real_estate_manager_site_tagline_color', array(
			'label'     => __('Change Site Title Color', 'real-estate-manager'),
	    'section' => 'title_tagline',
	    'settings' => 'real_estate_manager_site_tagline_color',
  	)));

	$wp_customize->add_setting( 'real_estate_manager_site_tagline', array(
	    'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Real_Estate_Manager_Toggle_Control( $wp_customize, 'real_estate_manager_site_tagline', array(
		'label'       => esc_html__( 'Show / Hide Site Tagline', 'real-estate-manager' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'real_estate_manager_site_tagline',
	) ) );

	// logo site tagline size
	$wp_customize->add_setting('real_estate_manager_site_tagline_font_size',array(
		'default'	=> 15,
		'sanitize_callback'	=> 'real_estate_manager_sanitize_number_absint'
	));
	$wp_customize->add_control('real_estate_manager_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size in PX','real-estate-manager'),
		'section'	=> 'title_tagline',
	    'setting'	=> 'real_estate_manager_site_tagline_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'real_estate_manager_logo_tagline_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'real_estate_manager_logo_tagline_color', array(
			'label'     => __('Change Site Tagline Color', 'real-estate-manager'),
	    'section' => 'title_tagline',
	    'settings' => 'real_estate_manager_logo_tagline_color',
  	)));

    $wp_customize->add_setting('real_estate_manager_logo_width',array(
		'default' => 50,
		'sanitize_callback'	=> 'real_estate_manager_sanitize_number_absint'
	));
	$wp_customize->add_control('real_estate_manager_logo_width',array(
		'label'	=> esc_html__('Here You Can Customize Your Logo Size','real-estate-manager'),
		'section'	=> 'title_tagline',
		'type'		=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 150,
		),
	));

	//Woo Coomerce
	$wp_customize->add_setting('real_estate_manager_per_columns',array(
		'default'=> 3,
		'sanitize_callback'	=> 'real_estate_manager_sanitize_number_absint'
	));
	$wp_customize->add_control('real_estate_manager_per_columns',array(
		'label'	=> __('Product Per Row','real-estate-manager'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));
	$wp_customize->add_setting('real_estate_manager_product_per_page',array(
		'default'=> 9,
		'sanitize_callback'	=> 'real_estate_manager_sanitize_number_absint'
	));
	$wp_customize->add_control('real_estate_manager_product_per_page',array(
		'label'	=> __('Product Per Page','real-estate-manager'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));
   	$wp_customize->add_setting( 'real_estate_manager_product_sidebar', array(
		 'default'           => true,
		 'transport'         => 'refresh',
		 'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Real_Estate_Manager_Toggle_Control( $wp_customize, 'real_estate_manager_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Shop Page Sidebar', 'real-estate-manager' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'real_estate_manager_product_sidebar',
	) ) );

	$wp_customize->add_setting( 'real_estate_manager_single_product_sidebar', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Real_Estate_Manager_Toggle_Control( $wp_customize, 'real_estate_manager_single_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Product Page Sidebar', 'real-estate-manager' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'real_estate_manager_single_product_sidebar',
	) ) );
	$wp_customize->add_setting( 'real_estate_manager_related_product', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'real_estate_manager_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Real_Estate_Manager_Toggle_Control( $wp_customize, 'real_estate_manager_related_product', array(
		'label'       => esc_html__( 'Show / Hide related product', 'real-estate-manager' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'real_estate_manager_related_product',
	) ) );
	
	//add page template setting pannel
	$wp_customize->add_panel( 'real_estate_manager_page_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Page Template Settings', 'real-estate-manager' ),
	    'description' => __( 'Description of what this panel does.', 'real-estate-manager' ),
	) );

	// 404 PAGE
	$wp_customize->add_section('real_estate_manager_404_page_section',array(
		'title'         => __('404 Page', 'real-estate-manager'),
		'description'   => 'Here you can customize 404 Page content.',
		'panel' => 'real_estate_manager_page_panel_id'
	) );

	$wp_customize->add_setting('real_estate_manager_edit_404_title',array(
		'default'=> __('Oops! That page cant be found.','real-estate-manager'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('real_estate_manager_edit_404_title',array(
		'label'	=> __('Edit Title','real-estate-manager'),
		'section'=> 'real_estate_manager_404_page_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('real_estate_manager_edit_404_text',array(
		'default'=> __('It looks like nothing was found at this location. Maybe try a search?','real-estate-manager'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_manager_edit_404_text',array(
		'label'	=> __('Edit Text','real-estate-manager'),
		'section'=> 'real_estate_manager_404_page_section',
		'type'=> 'text'
	));

	// Search Results
	$wp_customize->add_section('real_estate_manager_no_result_section',array(
		'title'         => __('Search Results', 'real-estate-manager'),
		'description'   => 'Here you can customize Search Result content.',
		'panel' => 'real_estate_manager_page_panel_id'
	) );

	$wp_customize->add_setting('real_estate_manager_edit_no_result_title',array(
		'default'=> __('Nothing Found','real-estate-manager'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('real_estate_manager_edit_no_result_title',array(
		'label'	=> __('Edit Title','real-estate-manager'),
		'section'=> 'real_estate_manager_no_result_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('real_estate_manager_edit_no_result_text',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','real-estate-manager'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('real_estate_manager_edit_no_result_text',array(
		'label'	=> __('Edit Text','real-estate-manager'),
		'section'=> 'real_estate_manager_no_result_section',
		'type'=> 'text'
	));

}
add_action( 'customize_register', 'Real_Estate_Manager_Customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Real Estate Manager 1.0
 * @see Real_Estate_Manager_Customize_register()
 *
 * @return void
 */
function Real_Estate_Manager_Customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Real Estate Manager 1.0
 * @see Real_Estate_Manager_Customize_register()
 *
 * @return void
 */
function Real_Estate_Manager_Customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if ( ! defined( 'REAL_ESTATE_MANAGER_PRO_THEME_NAME' ) ) {
	define( 'REAL_ESTATE_MANAGER_PRO_THEME_NAME', esc_html__( 'Real Estate Manager Pro', 'real-estate-manager' ));
}
if ( ! defined( 'REAL_ESTATE_MANAGER_PRO_THEME_URL' ) ) {
	define( 'REAL_ESTATE_MANAGER_PRO_THEME_URL', esc_url('https://www.themespride.com/products/real-estate-wordpress-theme'));
}

if ( ! defined( 'REAL_ESTATE_MANAGER_DEMO_TITLE' ) ) {
	define( 'REAL_ESTATE_MANAGER_DEMO_TITLE', esc_html__( 'Click to View Site', 'real-estate-manager' ));
}
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Real_Estate_Manager_Customize {

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
		$manager->register_section_type( 'Real_Estate_Manager_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Real_Estate_Manager_Customize_Section_Pro(
				$manager,
				'real_estate_manager_section_pro',
				array(
					'priority'   => 9,
					'title'    => REAL_ESTATE_MANAGER_PRO_THEME_NAME,
					'pro_text' => esc_html__( 'Upgrade Pro', 'real-estate-manager' ),
					'pro_url'  => esc_url( REAL_ESTATE_MANAGER_PRO_THEME_URL, 'real-estate-manager' ),
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new real_estate_manager_Customize_Section_Pro(
				$manager,
				'real_estate_manager_section_pro_demo',
				array(
					'priority'   => 9,
					'title'    => REAL_ESTATE_MANAGER_DEMO_TITLE,
					'pro_text' => esc_html__( 'View Site', 'real-estate-manager' ),
					'pro_url'  => esc_url( home_url() ),
				)
			)
		);

	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'real-estate-manager-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'real-estate-manager-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Real_Estate_Manager_Customize::get_instance();