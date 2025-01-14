<?php

	$electronics_retailer_custom_css= "";

	/*-------------------- Highlight Color -------------------*/

	$electronics_retailer_first_color = get_theme_mod('electronics_retailer_first_color');
	$electronics_retailer_second_color = get_theme_mod('electronics_retailer_second_color');

	if($electronics_retailer_first_color != false || $electronics_retailer_second_color != false){
        $electronics_retailer_custom_css .='#sidebar .wp-block-tag-cloud a:hover, #footer, .custom-about-us a.custom_read_more, #footer .wp-block-tag-cloud a:hover, table.compare-list .add-to-cart td a:not(.unstyled_button), .banner-left .explore-btn a, .banner-middle .discount-box, .banner-middle .shop-btn a, .banner-bottom, #category-section .category-button, .main-header .topbar, .main-header .product-cat li:hover, .order-track .order-again, .home-page-header .main-navigation .current_page_item a:before, .main-navigation .current_page_item a:before, .more-btn a , #comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.pro-button a, .woocommerce a.added_to_cart.wc-forward, #preloader, #footer-2, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .header-fixed .menu-header, nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-next a, #sidebar .custom-social-icons a, #sidebar .custom-social-icons a:hover, #footer .custom-social-icons a:hover, #sidebar h3:before,#sidebar .widget_block h3:before, #sidebar h2:before, #sidebar label.wp-block-search__label:before, #sidebar .tagcloud a:hover, .pagination span, .pagination a, .post-nav-links span, .post-nav-links a, .pagination a:hover, .pagination .current, .woocommerce span.onsale, nav.woocommerce-MyAccount-navigation ul li, .woocommerce ul.products li.product .button, .woocommerce a.added_to_cart.wc-forward,a.added_to_cart.wc-forward, .wishlist-items-wrapper .product-add-to-cart a, .wishlist_table.mobile .product-add-to-cart a, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart, .wp-block-woocommerce-empty-cart-block .wp-block-button .add_to_cart_button, header.woocommerce-Address-title.title a, #tag-cloud-sec .tag-cloud-link{
        background: linear-gradient(90deg, '.esc_attr($electronics_retailer_first_color).' 0%, '.esc_attr($electronics_retailer_second_color).' 100%) 0% 0% no-repeat padding-box;
        }';
    }

    if($electronics_retailer_first_color != false || $electronics_retailer_second_color != false){
        $electronics_retailer_custom_css .='.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button{
        background: linear-gradient(90deg, '.esc_attr($electronics_retailer_first_color).' 0%, '.esc_attr($electronics_retailer_second_color).' 100%) 0% 0% no-repeat padding-box !important;
        }';
    }

    if($electronics_retailer_first_color != false || $electronics_retailer_second_color != false){
        $electronics_retailer_custom_css .='.woo-topbar .woo-icons .wishlist i, .main-header button.product-btn i, .main-header .product-cat li i, .menu-header .phone-icon i, .menu-header .phone-icon i, .menu-header:after, .menu-header:before{
        background: linear-gradient(180deg, '.esc_attr($electronics_retailer_first_color).' 0%, '.esc_attr($electronics_retailer_second_color).' 100%);
        }';
    }

    if ($electronics_retailer_first_color != false || $electronics_retailer_second_color != false) {
    $electronics_retailer_custom_css .= '.banner-left .small-title, .banner-right .countdown-timer .numbers, .single-product .woo-sctr-single-product-container .woo-sctr-shortcode-countdown-value {
            border-image-source: linear-gradient(90deg, ' . esc_attr($electronics_retailer_first_color) . ' 0%, ' . esc_attr($electronics_retailer_second_color) . ' 100%);
        }';
        $electronics_retailer_custom_css .='.banner-left .small-title, .banner-right .countdown-timer .numbers, .single-product .woo-sctr-single-product-container .woo-sctr-shortcode-countdown-value, .woo-topbar .woo-icons .wishlist i, .main-header button.product-btn i, .main-header .product-cat li i, .menu-header .phone-icon i, .menu-header .phone-icon i, .menu-header:after, .menu-header:before{';
			$electronics_retailer_custom_css .='-webkit-background-clip: text; background-clip: text;';
		$electronics_retailer_custom_css .='}';
	}

    // Second Color

	if($electronics_retailer_second_color != false){
		$electronics_retailer_custom_css .='#comments input[type="submit"]:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.widget_product_search button:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce a.added_to_cart.wc-forward:hover, #sidebar .wp-block-search .wp-block-search__button:hover, .woo-topbar .woo-icons .wishlist i:hover, .banner-left .explore-btn a:hover, .banner-middle .shop-btn a:hover, #category-section .category-button:hover, input[type="submit"]:hover, .post-nav-links span:hover, .post-nav-links a:hover, #comments input[type="submit"]:hover, #comments a.comment-reply-link:hover, .more-btn a:hover, #comments a.comment-reply-link:hover,.pagination a:hover,#footer .tagcloud a:hover, .pro-button a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span:hover, #footer .tagcloud a:hover, .copyright .custom-social-icons i:hover, .bradcrumbs a, .post-categories li a, .bradcrumbs span, nav.woocommerce-MyAccount-navigation ul li:hover, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart:hover{';
			$electronics_retailer_custom_css .='background: '.esc_attr($electronics_retailer_second_color).';';
		$electronics_retailer_custom_css .='}';
	}

	if($electronics_retailer_second_color != false){
		$electronics_retailer_custom_css .='header.woocommerce-Address-title.title a:hover,#tag-cloud-sec .tag-cloud-link:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover, #sidebar ul li::before, .wc-block-grid__product-onsale, .wp-block-woocommerce-cart .wc-block-components-product-badge, .wc-block-components-order-summary-item__quantity, header.woocommerce-Address-title.title a:hover,#tag-cloud-sec .tag-cloud-link:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover{';
			$electronics_retailer_custom_css .='background: '.esc_attr($electronics_retailer_second_color).'!important;';
		$electronics_retailer_custom_css .='}';
	}

	if($electronics_retailer_second_color != false){
		$electronics_retailer_custom_css .='a:hover, .sticky .post-main-box h2:before, .menu-bar-sec i, .sf-arrows .sf-with-ul:after, .main-header .topbar .custom-social-icons i:hover, .woo-topbar .woo-icons i:hover, .post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .grid-post-main-box:hover h2 a, .grid-post-main-box:hover .post-info span a, #sidebar ul li:hover, .woocommerce-error::before, .post-navigation span.meta-nav:hover, .woocommerce-message::before,.woocommerce-info::before, .wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote{';
			$electronics_retailer_custom_css .='color: '.esc_attr($electronics_retailer_second_color).';';
		$electronics_retailer_custom_css .='}';
	}

	if($electronics_retailer_second_color != false){
		$electronics_retailer_custom_css .='#footer .tagcloud a:hover, .tags-bg a:hover{';
			$electronics_retailer_custom_css .='color: '.esc_attr($electronics_retailer_second_color).'!important;';
		$electronics_retailer_custom_css .='}';
	}

	if($electronics_retailer_second_color != false){
		$electronics_retailer_custom_css .='.post-main-box, .grid-post-main-box, #sidebar .widget{';
			$electronics_retailer_custom_css .='border-color: '.esc_attr($electronics_retailer_second_color).';';
		$electronics_retailer_custom_css .='}';
	}

	if($electronics_retailer_second_color != false){
		$electronics_retailer_custom_css .='.main-navigation ul ul, #sidebar .widget{';
			$electronics_retailer_custom_css .='border-bottom-color: '.esc_attr($electronics_retailer_second_color).';';
		$electronics_retailer_custom_css .='}';
	}

	if($electronics_retailer_second_color != false){
		$electronics_retailer_custom_css .='.main-navigation ul ul, #sidebar .widget, .woocommerce-error, .woocommerce-message,.woocommerce-info{';
			$electronics_retailer_custom_css .='border-top-color: '.esc_attr($electronics_retailer_second_color).';';
		$electronics_retailer_custom_css .='}';
	}

	if($electronics_retailer_second_color != false){
		$electronics_retailer_custom_css .='#sidebar .widget{';
			$electronics_retailer_custom_css .='border-right-color: '.esc_attr($electronics_retailer_second_color).';';
		$electronics_retailer_custom_css .='}';
	}

	if($electronics_retailer_second_color != false){
		$electronics_retailer_custom_css .='#sidebar .widget, .wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote{';
			$electronics_retailer_custom_css .='border-left-color: '.esc_attr($electronics_retailer_second_color).';';
		$electronics_retailer_custom_css .='}';
	}

	if($electronics_retailer_first_color != false || $electronics_retailer_second_color != false){
		$electronics_retailer_custom_css .='@media screen and (max-width:1000px) {';

			$electronics_retailer_custom_css .='.toggle-nav i{
	        background: linear-gradient(90deg, '.esc_attr($electronics_retailer_first_color).' 0%, '.esc_attr($electronics_retailer_second_color).' 100%) 0% 0% no-repeat padding-box !important;
	        }';

			$electronics_retailer_custom_css .='.main-navigation a:hover{';
				$electronics_retailer_custom_css .='color: '.esc_attr($electronics_retailer_second_color).'!important;';
			$electronics_retailer_custom_css .='}';
			$electronics_retailer_custom_css .='.header-fixed .toggle-nav i{';
				$electronics_retailer_custom_css .='color: '.esc_attr($electronics_retailer_second_color).';';
			$electronics_retailer_custom_css .='}';
		$electronics_retailer_custom_css .='}';
	}
	
	// Topbar 
	$electronics_retailer_top_first_color = get_theme_mod('electronics_retailer_top_first_color');
	$electronics_retailer_top_second_color = get_theme_mod('electronics_retailer_top_second_color');

	if ($electronics_retailer_top_first_color && $electronics_retailer_top_second_color) {
	    $electronics_retailer_custom_css .= '.main-header .topbar {';
	    $electronics_retailer_custom_css .= 'background: linear-gradient(90deg, '
	        . esc_attr($electronics_retailer_top_first_color) . ' 0%, '
	        . esc_attr($electronics_retailer_top_second_color) . ' 100%) no-repeat padding-box;';
	    $electronics_retailer_custom_css .= '}';
	}

	/*---------------------------Width Layout -------------------*/

	$electronics_retailer_theme_lay = get_theme_mod( 'electronics_retailer_width_option','Full Width');
    if($electronics_retailer_theme_lay == 'Boxed'){
		$electronics_retailer_custom_css .='body{';
			$electronics_retailer_custom_css .='max-width: 1140px; width: 100%; margin-right: auto; margin-left: auto;';
		$electronics_retailer_custom_css .='}';
		$electronics_retailer_custom_css .='.scrollup i{';
			$electronics_retailer_custom_css .='right: 100px;';
		$electronics_retailer_custom_css .='}';
		$electronics_retailer_custom_css .='.row.outer-logo{';
			$electronics_retailer_custom_css .='margin-left: 0px;';
		$electronics_retailer_custom_css .='}';
	}else if($electronics_retailer_theme_lay == 'Wide Width'){
		$electronics_retailer_custom_css .='body{';
			$electronics_retailer_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$electronics_retailer_custom_css .='}';
		$electronics_retailer_custom_css .='.scrollup i{';
			$electronics_retailer_custom_css .='right: 30px;';
		$electronics_retailer_custom_css .='}';
		$electronics_retailer_custom_css .='.row.outer-logo{';
			$electronics_retailer_custom_css .='margin-left: 0px;';
		$electronics_retailer_custom_css .='}';
	}else if($electronics_retailer_theme_lay == 'Full Width'){
		$electronics_retailer_custom_css .='body{';
			$electronics_retailer_custom_css .='max-width: 100%;';
		$electronics_retailer_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$electronics_retailer_sticky_header_padding = get_theme_mod('electronics_retailer_sticky_header_padding');
	if($electronics_retailer_sticky_header_padding != false){
		$electronics_retailer_custom_css .='.header-fixed{';
			$electronics_retailer_custom_css .='padding: '.esc_attr($electronics_retailer_sticky_header_padding).';';
		$electronics_retailer_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$electronics_retailer_resp_sidebar = get_theme_mod( 'electronics_retailer_sidebar_hide_show',true);
    if($electronics_retailer_resp_sidebar == true){
    	$electronics_retailer_custom_css .='@media screen and (max-width:575px) {';
		$electronics_retailer_custom_css .='#sidebar{';
			$electronics_retailer_custom_css .='display:block;';
		$electronics_retailer_custom_css .='} }';
	}else if($electronics_retailer_resp_sidebar == false){
		$electronics_retailer_custom_css .='@media screen and (max-width:575px) {';
		$electronics_retailer_custom_css .='#sidebar{';
			$electronics_retailer_custom_css .='display:none;';
		$electronics_retailer_custom_css .='} }';
	}

	$electronics_retailer_resp_scroll_top = get_theme_mod( 'electronics_retailer_resp_scroll_top_hide_show',true);
	if($electronics_retailer_resp_scroll_top == true && get_theme_mod( 'electronics_retailer_hide_show_scroll',true) == false){
    	$electronics_retailer_custom_css .='.scrollup i{';
			$electronics_retailer_custom_css .='visibility:hidden !important;';
		$electronics_retailer_custom_css .='} ';
	}
    if($electronics_retailer_resp_scroll_top == true){
    	$electronics_retailer_custom_css .='@media screen and (max-width:575px) {';
		$electronics_retailer_custom_css .='.scrollup i{';
			$electronics_retailer_custom_css .='visibility:visible !important;';
		$electronics_retailer_custom_css .='} }';
	}else if($electronics_retailer_resp_scroll_top == false){
		$electronics_retailer_custom_css .='@media screen and (max-width:575px){';
		$electronics_retailer_custom_css .='.scrollup i{';
			$electronics_retailer_custom_css .='visibility:hidden !important;';
		$electronics_retailer_custom_css .='} }';
	}

	$electronics_retailer_resp_stickyheader = get_theme_mod( 'electronics_retailer_stickyheader_hide_show',false);
	if($electronics_retailer_resp_stickyheader == true && get_theme_mod( 'electronics_retailer_sticky_header',false) != true){
    	$electronics_retailer_custom_css .='.header-fixed{';
			$electronics_retailer_custom_css .='position:static;';
		$electronics_retailer_custom_css .='} ';
	}
	
	/*-------------- Copyright Alignment ----------------*/

	$electronics_retailer_copyright_alingment = get_theme_mod('electronics_retailer_copyright_alingment');
	if($electronics_retailer_copyright_alingment != false){
		$electronics_retailer_custom_css .='.copyright p{';
			$electronics_retailer_custom_css .='text-align: '.esc_attr($electronics_retailer_copyright_alingment).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_footer_background_color = get_theme_mod('electronics_retailer_footer_background_color');
	if($electronics_retailer_footer_background_color != false){
		$electronics_retailer_custom_css .='#footer{';
			$electronics_retailer_custom_css .='background-color: '.esc_attr($electronics_retailer_footer_background_color).';';
		$electronics_retailer_custom_css .='}';
	}

	/*------------- Preloader Background Color  -------------------*/

	$electronics_retailer_preloader_bg_color = get_theme_mod('electronics_retailer_preloader_bg_color');
	if($electronics_retailer_preloader_bg_color != false){
		$electronics_retailer_custom_css .='#preloader{';
			$electronics_retailer_custom_css .='background-color: '.esc_attr($electronics_retailer_preloader_bg_color).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_preloader_border_color = get_theme_mod('electronics_retailer_preloader_border_color');
	if($electronics_retailer_preloader_border_color != false){
		$electronics_retailer_custom_css .='.loader-line{';
			$electronics_retailer_custom_css .='border-color: '.esc_attr($electronics_retailer_preloader_border_color).'!important;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_preloader_bg_img = get_theme_mod('electronics_retailer_preloader_bg_img');
	if($electronics_retailer_preloader_bg_img != false){
		$electronics_retailer_custom_css .='#preloader{';
			$electronics_retailer_custom_css .='background: url('.esc_attr($electronics_retailer_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$electronics_retailer_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$electronics_retailer_copyright_alingment = get_theme_mod('electronics_retailer_copyright_alingment');
	if($electronics_retailer_copyright_alingment != false){
		$electronics_retailer_custom_css .='.copyright p{';
			$electronics_retailer_custom_css .='text-align: '.esc_attr($electronics_retailer_copyright_alingment).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_copyright_background_color = get_theme_mod('electronics_retailer_copyright_background_color');
	if($electronics_retailer_copyright_background_color != false){
		$electronics_retailer_custom_css .='#footer-2{';
			$electronics_retailer_custom_css .='background-color: '.esc_attr($electronics_retailer_copyright_background_color).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_footer_background_image = get_theme_mod('electronics_retailer_footer_background_image');
	if($electronics_retailer_footer_background_image != false){
		$electronics_retailer_custom_css .='#footer{';
			$electronics_retailer_custom_css .='background: url('.esc_attr($electronics_retailer_footer_background_image).')no-repeat;background-size:cover';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_theme_lay = get_theme_mod( 'electronics_retailer_img_footer','scroll');
	if($electronics_retailer_theme_lay == 'fixed'){
		$electronics_retailer_custom_css .='#footer{';
			$electronics_retailer_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$electronics_retailer_custom_css .='}';
	}elseif ($electronics_retailer_theme_lay == 'scroll'){
		$electronics_retailer_custom_css .='#footer{';
			$electronics_retailer_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_footer_img_position = get_theme_mod('electronics_retailer_footer_img_position','center center');
	if($electronics_retailer_footer_img_position != false){
		$electronics_retailer_custom_css .='#footer{';
			$electronics_retailer_custom_css .='background-position: '.esc_attr($electronics_retailer_footer_img_position).'!important;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_footer_widgets_heading = get_theme_mod( 'electronics_retailer_footer_widgets_heading','Left');
    if($electronics_retailer_footer_widgets_heading == 'Left'){
		$electronics_retailer_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$electronics_retailer_custom_css .='text-align: left;';
		$electronics_retailer_custom_css .='}';
	}else if($electronics_retailer_footer_widgets_heading == 'Center'){
		$electronics_retailer_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$electronics_retailer_custom_css .='text-align: center;';
		$electronics_retailer_custom_css .='}';
	}else if($electronics_retailer_footer_widgets_heading == 'Right'){
		$electronics_retailer_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$electronics_retailer_custom_css .='text-align: right;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_footer_widgets_content = get_theme_mod( 'electronics_retailer_footer_widgets_content','Left');
    if($electronics_retailer_footer_widgets_content == 'Left'){
		$electronics_retailer_custom_css .='#footer .widget{';
		$electronics_retailer_custom_css .='text-align: left;';
		$electronics_retailer_custom_css .='}';
	}else if($electronics_retailer_footer_widgets_content == 'Center'){
		$electronics_retailer_custom_css .='#footer .widget{';
			$electronics_retailer_custom_css .='text-align: center;';
		$electronics_retailer_custom_css .='}';
	}else if($electronics_retailer_footer_widgets_content == 'Right'){
		$electronics_retailer_custom_css .='#footer .widget{';
			$electronics_retailer_custom_css .='text-align: right;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_copyright_font_size = get_theme_mod('electronics_retailer_copyright_font_size');
	if($electronics_retailer_copyright_font_size != false){
		$electronics_retailer_custom_css .='#footer-2 a, #footer-2 p{';
			$electronics_retailer_custom_css .='font-size: '.esc_attr($electronics_retailer_copyright_font_size).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_copyright_alingment = get_theme_mod('electronics_retailer_copyright_alingment');
	if($electronics_retailer_copyright_alingment != false){
		$electronics_retailer_custom_css .='#footer-2 p{';
			$electronics_retailer_custom_css .='text-align: '.esc_attr($electronics_retailer_copyright_alingment).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_copyright_padding_top_bottom = get_theme_mod('electronics_retailer_copyright_padding_top_bottom');
	if($electronics_retailer_copyright_padding_top_bottom != false){
		$electronics_retailer_custom_css .='#footer-2{';
			$electronics_retailer_custom_css .='padding-top: '.esc_attr($electronics_retailer_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($electronics_retailer_copyright_padding_top_bottom).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_footer_padding = get_theme_mod('electronics_retailer_footer_padding');
	if($electronics_retailer_footer_padding != false){
		$electronics_retailer_custom_css .='#footer{';
			$electronics_retailer_custom_css .='padding: '.esc_attr($electronics_retailer_footer_padding).' 0;';
		$electronics_retailer_custom_css .='}';
	}
	/*-------------- Copyright Alignment ----------------*/

	$electronics_retailer_copyright_alingment = get_theme_mod('electronics_retailer_copyright_alingment');
	if($electronics_retailer_copyright_alingment != false){
		$electronics_retailer_custom_css .='.copyright p{';
			$electronics_retailer_custom_css .='text-align: '.esc_attr($electronics_retailer_copyright_alingment).';';
		$electronics_retailer_custom_css .='}';
	}

	/*----------------Scroll to top Settings ------------------*/

	$electronics_retailer_scroll_to_top_font_size = get_theme_mod('electronics_retailer_scroll_to_top_font_size');
	if($electronics_retailer_scroll_to_top_font_size != false){
		$electronics_retailer_custom_css .='.scrollup i{';
			$electronics_retailer_custom_css .='font-size: '.esc_attr($electronics_retailer_scroll_to_top_font_size).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_scroll_to_top_padding = get_theme_mod('electronics_retailer_scroll_to_top_padding');
	$electronics_retailer_scroll_to_top_padding = get_theme_mod('electronics_retailer_scroll_to_top_padding');
	if($electronics_retailer_scroll_to_top_padding != false){
		$electronics_retailer_custom_css .='.scrollup i{';
			$electronics_retailer_custom_css .='padding-top: '.esc_attr($electronics_retailer_scroll_to_top_padding).';padding-bottom: '.esc_attr($electronics_retailer_scroll_to_top_padding).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_scroll_to_top_width = get_theme_mod('electronics_retailer_scroll_to_top_width');
	if($electronics_retailer_scroll_to_top_width != false){
		$electronics_retailer_custom_css .='.scrollup i{';
			$electronics_retailer_custom_css .='width: '.esc_attr($electronics_retailer_scroll_to_top_width).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_scroll_to_top_height = get_theme_mod('electronics_retailer_scroll_to_top_height');
	if($electronics_retailer_scroll_to_top_height != false){
		$electronics_retailer_custom_css .='.scrollup i{';
			$electronics_retailer_custom_css .='height: '.esc_attr($electronics_retailer_scroll_to_top_height).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_scroll_to_top_border_radius = get_theme_mod('electronics_retailer_scroll_to_top_border_radius');
	if($electronics_retailer_scroll_to_top_border_radius != false){
		$electronics_retailer_custom_css .='.scrollup i{';
			$electronics_retailer_custom_css .='border-radius: '.esc_attr($electronics_retailer_scroll_to_top_border_radius).'px;';
		$electronics_retailer_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$electronics_retailer_logo_padding = get_theme_mod('electronics_retailer_logo_padding');
	if($electronics_retailer_logo_padding != false){
		$electronics_retailer_custom_css .='.logo{';
			$electronics_retailer_custom_css .='padding: '.esc_attr($electronics_retailer_logo_padding).' !important;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_logo_margin = get_theme_mod('electronics_retailer_logo_margin');
	if($electronics_retailer_logo_margin != false){
		$electronics_retailer_custom_css .='.logo{';
			$electronics_retailer_custom_css .='margin: '.esc_attr($electronics_retailer_logo_margin).';';
		$electronics_retailer_custom_css .='}';
	}

	// Site title Font Size
	$electronics_retailer_site_title_font_size = get_theme_mod('electronics_retailer_site_title_font_size');
	if($electronics_retailer_site_title_font_size != false){
		$electronics_retailer_custom_css .='.logo p.site-title, .logo h1{';
			$electronics_retailer_custom_css .='font-size: '.esc_attr($electronics_retailer_site_title_font_size).';';
		$electronics_retailer_custom_css .='}';
	}

	// Site tagline Font Size
	$electronics_retailer_site_tagline_font_size = get_theme_mod('electronics_retailer_site_tagline_font_size');
	if($electronics_retailer_site_tagline_font_size != false){
		$electronics_retailer_custom_css .='.logo p.site-description{';
			$electronics_retailer_custom_css .='font-size: '.esc_attr($electronics_retailer_site_tagline_font_size).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_site_title_color = get_theme_mod('electronics_retailer_site_title_color');
	if($electronics_retailer_site_title_color != false){
		$electronics_retailer_custom_css .='p.site-title a, .logo h1 a{';
			$electronics_retailer_custom_css .='color: '.esc_attr($electronics_retailer_site_title_color).'!important;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_site_tagline_color = get_theme_mod('electronics_retailer_site_tagline_color');
	if($electronics_retailer_site_tagline_color != false){
		$electronics_retailer_custom_css .='.logo p.site-description{';
			$electronics_retailer_custom_css .='color: '.esc_attr($electronics_retailer_site_tagline_color).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_logo_width = get_theme_mod('electronics_retailer_logo_width');
	if($electronics_retailer_logo_width != false){
		$electronics_retailer_custom_css .='.logo img{';
			$electronics_retailer_custom_css .='width: '.esc_attr($electronics_retailer_logo_width).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_logo_height = get_theme_mod('electronics_retailer_logo_height');
	if($electronics_retailer_logo_height != false){
		$electronics_retailer_custom_css .='.logo img{';
			$electronics_retailer_custom_css .='height: '.esc_attr($electronics_retailer_logo_height).';object-fit:cover;';
		$electronics_retailer_custom_css .='}';
	}

	// Header Background Color
	$electronics_retailer_header_background_color = get_theme_mod('electronics_retailer_header_background_color');
	if($electronics_retailer_header_background_color != false){
		$electronics_retailer_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$electronics_retailer_custom_css .='background-color: '.esc_attr($electronics_retailer_header_background_color).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_header_img_position = get_theme_mod('electronics_retailer_header_img_position','center top');
	if($electronics_retailer_header_img_position != false){
		$electronics_retailer_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$electronics_retailer_custom_css .='background-position: '.esc_attr($electronics_retailer_header_img_position).'!important;';
		$electronics_retailer_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$electronics_retailer_theme_lay = get_theme_mod( 'electronics_retailer_blog_layout_option','Left');
    if($electronics_retailer_theme_lay == 'Default'){
		$electronics_retailer_custom_css .='.post-main-box{';
			$electronics_retailer_custom_css .='';
		$electronics_retailer_custom_css .='}';
	}else if($electronics_retailer_theme_lay == 'Center'){
		$electronics_retailer_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$electronics_retailer_custom_css .='text-align:center;';
		$electronics_retailer_custom_css .='}';
		$electronics_retailer_custom_css .='.post-info{';
			$electronics_retailer_custom_css .='margin-top:10px;';
		$electronics_retailer_custom_css .='}';
		$electronics_retailer_custom_css .='.post-info hr{';
			$electronics_retailer_custom_css .='margin:15px auto;';
		$electronics_retailer_custom_css .='}';
	}else if($electronics_retailer_theme_lay == 'Left'){
		$electronics_retailer_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$electronics_retailer_custom_css .='text-align:Left;';
		$electronics_retailer_custom_css .='}';
		$electronics_retailer_custom_css .='.post-info hr{';
			$electronics_retailer_custom_css .='margin-bottom:10px;';
		$electronics_retailer_custom_css .='}';
		$electronics_retailer_custom_css .='.post-main-box h2{';
			$electronics_retailer_custom_css .='margin-top:10px;';
		$electronics_retailer_custom_css .='}';
		$electronics_retailer_custom_css .='.service-text .more-btn{';
			$electronics_retailer_custom_css .='display:inline-block;';
		$electronics_retailer_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$electronics_retailer_blog_page_posts_settings = get_theme_mod( 'electronics_retailer_blog_page_posts_settings','Into Blocks');
    if($electronics_retailer_blog_page_posts_settings == 'Without Blocks'){
		$electronics_retailer_custom_css .='.post-main-box{';
			$electronics_retailer_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$electronics_retailer_custom_css .='}';
	}

	// featured image dimention
	$electronics_retailer_blog_post_featured_image_dimension = get_theme_mod('electronics_retailer_blog_post_featured_image_dimension', 'default');
	$electronics_retailer_blog_post_featured_image_custom_width = get_theme_mod('electronics_retailer_blog_post_featured_image_custom_width',250);
	$electronics_retailer_blog_post_featured_image_custom_height = get_theme_mod('electronics_retailer_blog_post_featured_image_custom_height',250);
	if($electronics_retailer_blog_post_featured_image_dimension == 'custom'){
		$electronics_retailer_custom_css .='.post-main-box img{';
			$electronics_retailer_custom_css .='width: '.esc_attr($electronics_retailer_blog_post_featured_image_custom_width).'!important; height: '.esc_attr($electronics_retailer_blog_post_featured_image_custom_height).';';
		$electronics_retailer_custom_css .='}';
	}

	/*---------------- Posts Settings ------------------*/

	$electronics_retailer_featured_image_border_radius = get_theme_mod('electronics_retailer_featured_image_border_radius', 0);
	if($electronics_retailer_featured_image_border_radius != false){
		$electronics_retailer_custom_css .='.box-image img, .feature-box img{';
			$electronics_retailer_custom_css .='border-radius: '.esc_attr($electronics_retailer_featured_image_border_radius).'px;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_featured_image_box_shadow = get_theme_mod('electronics_retailer_featured_image_box_shadow',0);
	if($electronics_retailer_featured_image_box_shadow != false){
		$electronics_retailer_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$electronics_retailer_custom_css .='box-shadow: '.esc_attr($electronics_retailer_featured_image_box_shadow).'px '.esc_attr($electronics_retailer_featured_image_box_shadow).'px '.esc_attr($electronics_retailer_featured_image_box_shadow).'px #cccccc;';
		$electronics_retailer_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$electronics_retailer_button_letter_spacing = get_theme_mod('electronics_retailer_button_letter_spacing',14);
	$electronics_retailer_custom_css .='.post-main-box .more-btn{';
		$electronics_retailer_custom_css .='letter-spacing: '.esc_attr($electronics_retailer_button_letter_spacing).';';
	$electronics_retailer_custom_css .='}';

	$electronics_retailer_button_border_radius = get_theme_mod('electronics_retailer_button_border_radius');
	if($electronics_retailer_button_border_radius != false){
		$electronics_retailer_custom_css .='.post-main-box .more-btn a{';
			$electronics_retailer_custom_css .='border-radius: '.esc_attr($electronics_retailer_button_border_radius).'px !important;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_button_top_bottom_padding = get_theme_mod('electronics_retailer_button_top_bottom_padding');
	$electronics_retailer_button_left_right_padding = get_theme_mod('electronics_retailer_button_left_right_padding');
	if($electronics_retailer_button_top_bottom_padding != false || $electronics_retailer_button_left_right_padding != false){
		$electronics_retailer_custom_css .='.post-main-box .more-btn{';
			$electronics_retailer_custom_css .='padding-top: '.esc_attr($electronics_retailer_button_top_bottom_padding).'!important; padding-bottom: '.esc_attr($electronics_retailer_button_top_bottom_padding).'!important;padding-left: '.esc_attr($electronics_retailer_button_left_right_padding).'!important;padding-right: '.esc_attr($electronics_retailer_button_left_right_padding).'!important;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_button_font_size = get_theme_mod('electronics_retailer_button_font_size',14);
	$electronics_retailer_custom_css .='.post-main-box .more-btn a{';
		$electronics_retailer_custom_css .='font-size: '.esc_attr($electronics_retailer_button_font_size).';';
	$electronics_retailer_custom_css .='}';

	$electronics_retailer_theme_lay = get_theme_mod( 'electronics_retailer_button_text_transform','Capitalize');
	if($electronics_retailer_theme_lay == 'Capitalize'){
		$electronics_retailer_custom_css .='.post-main-box .more-btn a{';
			$electronics_retailer_custom_css .='text-transform:Capitalize;';
		$electronics_retailer_custom_css .='}';
	}
	if($electronics_retailer_theme_lay == 'Lowercase'){
		$electronics_retailer_custom_css .='.post-main-box .more-btn a{';
			$electronics_retailer_custom_css .='text-transform:Lowercase;';
		$electronics_retailer_custom_css .='}';
	}
	if($electronics_retailer_theme_lay == 'Uppercase'){
		$electronics_retailer_custom_css .='.post-main-box .more-btn a{';
			$electronics_retailer_custom_css .='text-transform:Uppercase;';
		$electronics_retailer_custom_css .='}';
	}

	/*---------------- Single Blog Page Settings ------------------*/

	$electronics_retailer_single_blog_comment_button_text = get_theme_mod('electronics_retailer_single_blog_comment_button_text', 'Post Comment');
	if($electronics_retailer_single_blog_comment_button_text == ''){
		$electronics_retailer_custom_css .='#comments p.form-submit {';
			$electronics_retailer_custom_css .='display: none;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_comment_width = get_theme_mod('electronics_retailer_single_blog_comment_width');
	if($electronics_retailer_comment_width != false){
		$electronics_retailer_custom_css .='#comments textarea{';
			$electronics_retailer_custom_css .='width: '.esc_attr($electronics_retailer_comment_width).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_single_blog_post_navigation_show_hide = get_theme_mod('electronics_retailer_single_blog_post_navigation_show_hide',true);
	if($electronics_retailer_single_blog_post_navigation_show_hide != true){
		$electronics_retailer_custom_css .='.post-navigation{';
			$electronics_retailer_custom_css .='display: none;';
		$electronics_retailer_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$electronics_retailer_display_grid_posts_settings = get_theme_mod( 'electronics_retailer_display_grid_posts_settings','Into Blocks');
    if($electronics_retailer_display_grid_posts_settings == 'Without Blocks'){
		$electronics_retailer_custom_css .='.grid-post-main-box{';
			$electronics_retailer_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$electronics_retailer_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$electronics_retailer_related_product_show_hide = get_theme_mod('electronics_retailer_related_product_show_hide',true);
	if($electronics_retailer_related_product_show_hide != true){
		$electronics_retailer_custom_css .='.related.products{';
			$electronics_retailer_custom_css .='display: none;';
		$electronics_retailer_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$electronics_retailer_products_padding_top_bottom = get_theme_mod('electronics_retailer_products_padding_top_bottom');
	if($electronics_retailer_products_padding_top_bottom != false){
		$electronics_retailer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$electronics_retailer_custom_css .='padding-top: '.esc_attr($electronics_retailer_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($electronics_retailer_products_padding_top_bottom).'!important;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_products_padding_left_right = get_theme_mod('electronics_retailer_products_padding_left_right');
	if($electronics_retailer_products_padding_left_right != false){
		$electronics_retailer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$electronics_retailer_custom_css .='padding-left: '.esc_attr($electronics_retailer_products_padding_left_right).'!important; padding-right: '.esc_attr($electronics_retailer_products_padding_left_right).'!important;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_products_box_shadow = get_theme_mod('electronics_retailer_products_box_shadow');
	if($electronics_retailer_products_box_shadow != false){
		$electronics_retailer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$electronics_retailer_custom_css .='box-shadow: '.esc_attr($electronics_retailer_products_box_shadow).'px '.esc_attr($electronics_retailer_products_box_shadow).'px '.esc_attr($electronics_retailer_products_box_shadow).'px #ddd;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_products_border_radius = get_theme_mod('electronics_retailer_products_border_radius');
	if($electronics_retailer_products_border_radius != false){
		$electronics_retailer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$electronics_retailer_custom_css .='border-radius: '.esc_attr($electronics_retailer_products_border_radius).'px;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_products_btn_padding_top_bottom = get_theme_mod('electronics_retailer_products_btn_padding_top_bottom');
	if($electronics_retailer_products_btn_padding_top_bottom != false){
		$electronics_retailer_custom_css .='.woocommerce a.button{';
			$electronics_retailer_custom_css .='padding-top: '.esc_attr($electronics_retailer_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($electronics_retailer_products_btn_padding_top_bottom).' !important;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_products_btn_padding_left_right = get_theme_mod('electronics_retailer_products_btn_padding_left_right');
	if($electronics_retailer_products_btn_padding_left_right != false){
		$electronics_retailer_custom_css .='.woocommerce a.button{';
			$electronics_retailer_custom_css .='padding-left: '.esc_attr($electronics_retailer_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($electronics_retailer_products_btn_padding_left_right).' !important;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_products_button_border_radius = get_theme_mod('electronics_retailer_products_button_border_radius', 0);
	if($electronics_retailer_products_button_border_radius != false){
		$electronics_retailer_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce a.button{';
			$electronics_retailer_custom_css .='border-radius: '.esc_attr($electronics_retailer_products_button_border_radius).'px !important;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_woocommerce_sale_position = get_theme_mod( 'electronics_retailer_woocommerce_sale_position','right');
    if($electronics_retailer_woocommerce_sale_position == 'left'){
		$electronics_retailer_custom_css .='.woocommerce ul.products li.product .onsale{';
			$electronics_retailer_custom_css .='left: 14px !important; right: auto !important;';
		$electronics_retailer_custom_css .='}';
	}else if($electronics_retailer_woocommerce_sale_position == 'right'){
		$electronics_retailer_custom_css .='.woocommerce ul.products li.product .onsale{';
			$electronics_retailer_custom_css .='left: auto!important; right: 14px !important;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_woocommerce_sale_font_size = get_theme_mod('electronics_retailer_woocommerce_sale_font_size');
	if($electronics_retailer_woocommerce_sale_font_size != false){
		$electronics_retailer_custom_css .='.woocommerce span.onsale{';
			$electronics_retailer_custom_css .='font-size: '.esc_attr($electronics_retailer_woocommerce_sale_font_size).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_woocommerce_sale_padding_top_bottom = get_theme_mod('electronics_retailer_woocommerce_sale_padding_top_bottom');
	if($electronics_retailer_woocommerce_sale_padding_top_bottom != false){
		$electronics_retailer_custom_css .='.woocommerce span.onsale{';
			$electronics_retailer_custom_css .='padding-top: '.esc_attr($electronics_retailer_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($electronics_retailer_woocommerce_sale_padding_top_bottom).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_woocommerce_sale_padding_left_right = get_theme_mod('electronics_retailer_woocommerce_sale_padding_left_right');
	if($electronics_retailer_woocommerce_sale_padding_left_right != false){
		$electronics_retailer_custom_css .='.woocommerce span.onsale{';
			$electronics_retailer_custom_css .='padding-left: '.esc_attr($electronics_retailer_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($electronics_retailer_woocommerce_sale_padding_left_right).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_woocommerce_sale_border_radius = get_theme_mod('electronics_retailer_woocommerce_sale_border_radius', 0);
	if($electronics_retailer_woocommerce_sale_border_radius != false){
		$electronics_retailer_custom_css .='.woocommerce span.onsale{';
			$electronics_retailer_custom_css .='border-radius: '.esc_attr($electronics_retailer_woocommerce_sale_border_radius).'px;';
		$electronics_retailer_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$electronics_retailer_sticky_header_padding = get_theme_mod('electronics_retailer_sticky_header_padding');
	if($electronics_retailer_sticky_header_padding != false){
		$electronics_retailer_custom_css .='.header-fixed{';
			$electronics_retailer_custom_css .='padding: '.esc_attr($electronics_retailer_sticky_header_padding).';';
		$electronics_retailer_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$electronics_retailer_social_icon_font_size = get_theme_mod('electronics_retailer_social_icon_font_size');
	if($electronics_retailer_social_icon_font_size != false){
		$electronics_retailer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$electronics_retailer_custom_css .='font-size: '.esc_attr($electronics_retailer_social_icon_font_size).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_social_icon_padding = get_theme_mod('electronics_retailer_social_icon_padding');
	if($electronics_retailer_social_icon_padding != false){
		$electronics_retailer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$electronics_retailer_custom_css .='padding: '.esc_attr($electronics_retailer_social_icon_padding).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_social_icon_width = get_theme_mod('electronics_retailer_social_icon_width');
	if($electronics_retailer_social_icon_width != false){
		$electronics_retailer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$electronics_retailer_custom_css .='width: '.esc_attr($electronics_retailer_social_icon_width).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_social_icon_height = get_theme_mod('electronics_retailer_social_icon_height');
	if($electronics_retailer_social_icon_height != false){
		$electronics_retailer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$electronics_retailer_custom_css .='height: '.esc_attr($electronics_retailer_social_icon_height).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_social_icon_border_radius = get_theme_mod('electronics_retailer_social_icon_border_radius');
	if($electronics_retailer_social_icon_border_radius != false){
		$electronics_retailer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$electronics_retailer_custom_css .='border-radius: '.esc_attr($electronics_retailer_social_icon_border_radius).'px;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_grid_featured_image_box_shadow = get_theme_mod('electronics_retailer_grid_featured_image_box_shadow',0);
	if($electronics_retailer_grid_featured_image_box_shadow != false){
		$electronics_retailer_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$electronics_retailer_custom_css .='box-shadow: '.esc_attr($electronics_retailer_grid_featured_image_box_shadow).'px '.esc_attr($electronics_retailer_grid_featured_image_box_shadow).'px '.esc_attr($electronics_retailer_grid_featured_image_box_shadow).'px #cccccc;';
		$electronics_retailer_custom_css .='}';
	}

	/*-------------- Menus Setings ----------------*/

	$electronics_retailer_navigation_menu_font_size = get_theme_mod('electronics_retailer_navigation_menu_font_size');
	if($electronics_retailer_navigation_menu_font_size != false){
		$electronics_retailer_custom_css .='.main-navigation ul a{';
			$electronics_retailer_custom_css .='font-size: '.esc_attr($electronics_retailer_navigation_menu_font_size).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_navigation_menu_font_weight = get_theme_mod('electronics_retailer_navigation_menu_font_weight','600');
	if($electronics_retailer_navigation_menu_font_weight != false){
		$electronics_retailer_custom_css .='.main-navigation ul a{';
			$electronics_retailer_custom_css .='font-weight: '.esc_attr($electronics_retailer_navigation_menu_font_weight).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_theme_lay = get_theme_mod( 'electronics_retailer_menu_text_transform','Capitalize');
	if($electronics_retailer_theme_lay == 'Capitalize'){
		$electronics_retailer_custom_css .='.main-navigation ul a{';
			$electronics_retailer_custom_css .='text-transform:Capitalize;';
		$electronics_retailer_custom_css .='}';
	}
	if($electronics_retailer_theme_lay == 'Lowercase'){
		$electronics_retailer_custom_css .='.main-navigation ul a{';
			$electronics_retailer_custom_css .='text-transform:Lowercase;';
		$electronics_retailer_custom_css .='}';
	}
	if($electronics_retailer_theme_lay == 'Uppercase'){
		$electronics_retailer_custom_css .='.main-navigation ul a{';
			$electronics_retailer_custom_css .='text-transform:Uppercase;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_header_menus_color = get_theme_mod('electronics_retailer_header_menus_color');
	if($electronics_retailer_header_menus_color != false){
		$electronics_retailer_custom_css .='.main-navigation ul a{';
			$electronics_retailer_custom_css .='color: '.esc_attr($electronics_retailer_header_menus_color).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_header_menus_hover_color = get_theme_mod('electronics_retailer_header_menus_hover_color');
	if($electronics_retailer_header_menus_hover_color != false){
		$electronics_retailer_custom_css .='.main-navigation ul a:hover{';
			$electronics_retailer_custom_css .='color: '.esc_attr($electronics_retailer_header_menus_hover_color).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_header_submenus_color = get_theme_mod('electronics_retailer_header_submenus_color');
	if($electronics_retailer_header_submenus_color != false){
		$electronics_retailer_custom_css .='.main-navigation ul ul a{';
			$electronics_retailer_custom_css .='color: '.esc_attr($electronics_retailer_header_submenus_color).';';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_header_submenus_hover_color = get_theme_mod('electronics_retailer_header_submenus_hover_color');
	if($electronics_retailer_header_submenus_hover_color != false){
		$electronics_retailer_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$electronics_retailer_custom_css .='color: '.esc_attr($electronics_retailer_header_submenus_hover_color).'!important;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_menus_item = get_theme_mod( 'electronics_retailer_menus_item_style','None');
    if($electronics_retailer_menus_item == 'None'){
		$electronics_retailer_custom_css .='.main-navigation ul a{';
			$electronics_retailer_custom_css .='';
		$electronics_retailer_custom_css .='}';
	}else if($electronics_retailer_menus_item == 'Zoom In'){
		$electronics_retailer_custom_css .='.main-navigation ul a:hover{';
			$electronics_retailer_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$electronics_retailer_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$electronics_retailer_theme_lay = get_theme_mod( 'electronics_retailer_footer_template','electronics_retailer-footer-one');
    if($electronics_retailer_theme_lay == 'electronics_retailer-footer-one'){
		$electronics_retailer_custom_css .='#footer{';
			$electronics_retailer_custom_css .='';
		$electronics_retailer_custom_css .='}';

	}else if($electronics_retailer_theme_lay == 'electronics_retailer-footer-two'){
		$electronics_retailer_custom_css .='#footer{';
			$electronics_retailer_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$electronics_retailer_custom_css .='}';
		$electronics_retailer_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$electronics_retailer_custom_css .='color:#000;';
		$electronics_retailer_custom_css .='}';
		$electronics_retailer_custom_css .='#footer ul li::before{';
			$electronics_retailer_custom_css .='background:#000;';
		$electronics_retailer_custom_css .='}';
		$electronics_retailer_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$electronics_retailer_custom_css .='border: 1px solid #000;';
		$electronics_retailer_custom_css .='}';

	}else if($electronics_retailer_theme_lay == 'electronics_retailer-footer-three'){
		$electronics_retailer_custom_css .='#footer{';
			$electronics_retailer_custom_css .='background: #232524;';
		$electronics_retailer_custom_css .='}';
	}
	else if($electronics_retailer_theme_lay == 'electronics_retailer-footer-four'){
		$electronics_retailer_custom_css .='#footer{';
			$electronics_retailer_custom_css .='background: #C81786;';
		$electronics_retailer_custom_css .='}';
		$electronics_retailer_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$electronics_retailer_custom_css .='color:#fff;';
		$electronics_retailer_custom_css .='}';
		$electronics_retailer_custom_css .='#footer ul li::before{';
			$electronics_retailer_custom_css .='background:#fff;';
		$electronics_retailer_custom_css .='}';
		$electronics_retailer_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$electronics_retailer_custom_css .='border: 1px solid #fff;';
		$electronics_retailer_custom_css .='}';
	}
	else if($electronics_retailer_theme_lay == 'electronics_retailer-footer-five'){
		$electronics_retailer_custom_css .='#footer{';
			$electronics_retailer_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$electronics_retailer_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$electronics_retailer_button_footer_heading_letter_spacing = get_theme_mod('electronics_retailer_button_footer_heading_letter_spacing',1);
	$electronics_retailer_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$electronics_retailer_custom_css .='letter-spacing: '.esc_attr($electronics_retailer_button_footer_heading_letter_spacing).'px;';
	$electronics_retailer_custom_css .='}';

	$electronics_retailer_button_footer_font_size = get_theme_mod('electronics_retailer_button_footer_font_size','30');
	$electronics_retailer_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$electronics_retailer_custom_css .='font-size: '.esc_attr($electronics_retailer_button_footer_font_size).'px;';
	$electronics_retailer_custom_css .='}';

	$electronics_retailer_theme_lay = get_theme_mod( 'electronics_retailer_button_footer_text_transform','Capitalize');
	if($electronics_retailer_theme_lay == 'Capitalize'){
		$electronics_retailer_custom_css .='#footer h3{';
			$electronics_retailer_custom_css .='text-transform:Capitalize;';
		$electronics_retailer_custom_css .='}';
	}
	if($electronics_retailer_theme_lay == 'Lowercase'){
		$electronics_retailer_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$electronics_retailer_custom_css .='text-transform:Lowercase;';
		$electronics_retailer_custom_css .='}';
	}
	if($electronics_retailer_theme_lay == 'Uppercase'){
		$electronics_retailer_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$electronics_retailer_custom_css .='text-transform:Uppercase;';
		$electronics_retailer_custom_css .='}';
	}

	$electronics_retailer_footer_heading_weight = get_theme_mod('electronics_retailer_footer_heading_weight','600');
	if($electronics_retailer_footer_heading_weight != false){
		$electronics_retailer_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$electronics_retailer_custom_css .='font-weight: '.esc_attr($electronics_retailer_footer_heading_weight).';';
		$electronics_retailer_custom_css .='}';
	}
