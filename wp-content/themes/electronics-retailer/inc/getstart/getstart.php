<?php
//about theme info
add_action( 'admin_menu', 'electronics_retailer_gettingstarted' );
function electronics_retailer_gettingstarted() {
	add_theme_page( esc_html__('About Electronics Retailer ', 'electronics-retailer'), esc_html__('THEME DEMO IMPORT', 'electronics-retailer'), 'edit_theme_options', 'electronics_retailer_guide', 'electronics_retailer_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function electronics_retailer_admin_theme_style() {
	wp_enqueue_style('electronics-retailer-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('electronics-retailer-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'electronics_retailer_admin_theme_style');

//guidline for about theme
function electronics_retailer_mostrar_guide() { 
	//custom function about theme customizer
	$electronics_retailer_return = add_query_arg( array()) ;
	$electronics_retailer_theme = wp_get_theme( 'electronics-retailer' );
?>

<div class="wrapper-info">
    <div class="col-left sshot-section">
    	<h2><?php esc_html_e( 'Welcome to Electronics Retailer ', 'electronics-retailer' ); ?> <span class="version"><?php esc_html_e( 'Version', 'electronics-retailer' ); ?>: <?php echo esc_html($electronics_retailer_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','electronics-retailer'); ?></p>
    </div>

    <div class="col-right coupen-section">
    	<div class="logo-section">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
		<div class="logo-right">			
			<div class="update-now">
				<h4><?php esc_html_e('Try Premium ','electronics-retailer'); ?></h4>
				<h4><?php esc_html_e('Electronics Retailer Theme','electronics-retailer'); ?></h4>
				<h4 class="disc-text"><?php esc_html_e('at 20% Discount','electronics-retailer'); ?></h4>
				<h4><?php esc_html_e('Use Coupon','electronics-retailer'); ?> ( <span><?php esc_html_e('vwpro20','electronics-retailer'); ?></span> ) </h4> 
				<div class="info-link">
					<a href="<?php echo esc_url( ELECTRONICS_RETAILER_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'electronics-retailer' ); ?></a>
				</div>
			</div>
		</div>   
		<div class="logo-img">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
    </div>

    <div class="tab-sec">
    	<div class="tab">
    		<button class="tablinks" onclick="electronics_retailer_open_tab(event, 'theme_offer')"><?php esc_html_e( 'Demo Importer', 'electronics-retailer' ); ?></button>
			<button class="tablinks" onclick="electronics_retailer_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'electronics-retailer' ); ?></button>
			<button class="tablinks" onclick="electronics_retailer_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'electronics-retailer' ); ?></button>
  			<button class="tablinks" onclick="electronics_retailer_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free Vs Pro', 'electronics-retailer' ); ?></button>
  			<button class="tablinks" onclick="electronics_retailer_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 250+ Themes Bundle at $99', 'electronics-retailer' ); ?></button>
		</div>

		<?php 
			$electronics_retailer_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$electronics_retailer_plugin_custom_css ='display: block';
			}
		?>

		<div id="theme_offer" class="tabcontent open">
			<div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'electronics-retailer' ); ?></h3>
				<?php 
				/* Get Started. */ 
				require get_parent_theme_file_path( '/inc/getstart/demo-content.php' );
			 	?>
			</div> 	
		</div>

		<div id="lite_theme" class="tabcontent">
			<?php  if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Electronics_Retailer_Plugin_Activation_Settings::get_instance();
				$electronics_retailer_actions = $plugin_ins->recommended_actions;
				?>
				<div class="electronics-retailer-recommended-plugins">
				    <div class="electronics-retailer-action-list">
				        <?php if ($electronics_retailer_actions): foreach ($electronics_retailer_actions as $key => $electronics_retailer_actionValue): ?>
				                <div class="electronics-retailer-action" id="<?php echo esc_attr($electronics_retailer_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($electronics_retailer_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($electronics_retailer_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($electronics_retailer_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','electronics-retailer'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($electronics_retailer_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'electronics-retailer' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('The Electronics Retailer WordPress Theme is a premium, fully responsive theme designed specifically for electronics retailers and e-commerce platforms. It’s perfect for businesses selling a wide range of electronics, from mobile gadgets and wearable technology to home entertainment systems and kitchen electronics. This theme offers a visually engaging layout that showcases electronics product categories like high-end electronics, gaming gadgets, and home appliances with ease. It features a modern design that aligns with consumer electronics trends, ensuring that your website stands out in the competitive online marketplace. The theme is packed with features that benefit retailers, including product display grids, product reviews, and integration with popular e-commerce tools like WooCommerce for seamless shopping experiences. It supports multiple payment options, delivery tracking, and easy integration with electronics retailer SEO strategies to improve search engine rankings. With dedicated spaces for showcasing electronics warranties, return policies, and customer service, your site can provide all the information your customers need to make informed buying decisions. The theme also includes advanced customization options, so you can tailor the design to fit your brand and create a unique, user-friendly shopping experience Whether youre a small electronics shop or a large, global retailer, this theme helps elevate your online presence and boosts sales with a clean, professional look.','electronics-retailer'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'electronics-retailer' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'electronics-retailer' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( ELECTRONICS_RETAILER_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'electronics-retailer' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'electronics-retailer'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'electronics-retailer'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'electronics-retailer'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'electronics-retailer'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'electronics-retailer'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( ELECTRONICS_RETAILER_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'electronics-retailer'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'electronics-retailer'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'electronics-retailer'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( ELECTRONICS_RETAILER_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'electronics-retailer'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'electronics-retailer' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','electronics-retailer'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=electronics_retailer_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','electronics-retailer'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=electronics_retailer_top_bar') ); ?>" target="_blank"><?php esc_html_e('Top Bar','electronics-retailer'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=electronics_retailer_bannersettings') ); ?>" target="_blank"><?php esc_html_e('Banner Settings','electronics-retailer'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=electronics_retailer_category_section') ); ?>" target="_blank"><?php esc_html_e('Category Section','electronics-retailer'); ?></a>
								</div>

								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','electronics-retailer'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=electronics_retailer_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','electronics-retailer'); ?></a>
								</div>

								<div class="row-box2">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=electronics_retailer_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','electronics-retailer'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','electronics-retailer'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','electronics-retailer'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','electronics-retailer'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','electronics-retailer'); ?></span><?php esc_html_e(' Go to ','electronics-retailer'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','electronics-retailer'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','electronics-retailer'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','electronics-retailer'); ?></span><?php esc_html_e(' Go to ','electronics-retailer'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','electronics-retailer'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','electronics-retailer'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','electronics-retailer'); ?> <a class="doc-links" href="<?php echo esc_url( ELECTRONICS_RETAILER_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','electronics-retailer'); ?></a></p>
			  	</div>
			</div>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'electronics-retailer' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('The Electronics Store WordPress Theme is the ideal solution for building a robust and professional online electronics store. This theme is designed specifically for electronics retailers, allowing businesses to showcase their products in an organized and stylish manner. Whether youre selling consumer electronics, gadgets, or high-end home electronics, this theme offers a seamless shopping experience for customers. It comes with a fully responsive design, meaning it works perfectly on all devices, ensuring your online electronics store is accessible to a wide audience. With WooCommerce integration, you can easily manage product listings, handle payments, and create attractive product pages. The theme also supports product reviews and testimonials, helping build trust with your customers. Additionally, it features a sleek and modern design with a customizable layout, making it easy to create a unique look that aligns with your brand. Whether you’re a small retailer or a large electronics marketplace, this theme helps you enhance the shopping experience and boost sales.','electronics-retailer'); ?></p>
		    </div>
		    <div class="col-right-pro">
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( ELECTRONICS_RETAILER_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'electronics-retailer'); ?></a>
					<a href="<?php echo esc_url( ELECTRONICS_RETAILER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'electronics-retailer'); ?></a>
					<a href="<?php echo esc_url( ELECTRONICS_RETAILER_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'electronics-retailer'); ?></a>
					<a href="<?php echo esc_url( ELECTRONICS_RETAILER_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 250+ Themes Bundle at $99', 'electronics-retailer'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'electronics-retailer' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'electronics-retailer'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'electronics-retailer'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Banner Settings', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'electronics-retailer'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'electronics-retailer'); ?></td>
								<td class="table-img"><?php esc_html_e('10', 'electronics-retailer'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'electronics-retailer'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'electronics-retailer'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'electronics-retailer'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'electronics-retailer'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'electronics-retailer'); ?></td>
								<td class="table-img"><?php esc_html_e('13', 'electronics-retailer'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template / Support Templates', 'electronics-retailer'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'electronics-retailer'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'electronics-retailer'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'electronics-retailer'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'electronics-retailer'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Left/Right Sidebar)', 'electronics-retailer'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Video Gallery', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Electronics Retailer ', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Detail Services', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('About Business Page', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Team Member Page', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Project Description Page', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support Page', 'electronics-retailer'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( ELECTRONICS_RETAILER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'electronics-retailer'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   	<div class="col-left-pro">
		   		<h3><?php esc_html_e( 'WP Theme Bundle', 'electronics-retailer' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 250+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','electronics-retailer'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'electronics-retailer' ); ?></h4>
		    		<p><?php esc_html_e('250+ Premium Themes & 5+ Plugins.', 'electronics-retailer'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'electronics-retailer'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'electronics-retailer'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'electronics-retailer'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'electronics-retailer'); ?></p>
		    	</div>
		    	<p><?php esc_html_e('Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!', 'electronics-retailer'); ?></p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( ELECTRONICS_RETAILER_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'electronics-retailer'); ?></a>
					<a href="<?php echo esc_url( ELECTRONICS_RETAILER_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'electronics-retailer'); ?></a>
				</div>
		   	</div>
		   	<div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   	</div>		    
		</div>
	</div>
</div>

<?php } ?>