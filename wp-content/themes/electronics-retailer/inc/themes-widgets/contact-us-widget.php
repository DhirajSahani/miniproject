<?php
/**
 * Custom Contact us Widget
 */

class Electronics_Retailer_Contact_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Electronics_Retailer_Contact_Widget', 
			__('VW Contact us', 'electronics-retailer'),
			array( 'description' => __( 'Widget for contact us section in sidebar', 'electronics-retailer' ), ) 
		);
	}
	
	public function widget( $electronics_retailer_args, $electronics_retailer_instance ) {
		?>
		<aside class="widget">
			<?php
			$electronics_retailer_title = isset( $electronics_retailer_instance['title'] ) ? $electronics_retailer_instance['title'] : '';
			$electronics_retailer_phone = isset( $electronics_retailer_instance['phone'] ) ? $electronics_retailer_instance['phone'] : '';
			$electronics_retailer_email = isset( $electronics_retailer_instance['email'] ) ? $electronics_retailer_instance['email'] : '';
			$electronics_retailer_address = isset( $electronics_retailer_instance['address'] ) ? $electronics_retailer_instance['address'] : '';
			$electronics_retailer_timing = isset( $electronics_retailer_instance['timing'] ) ? $electronics_retailer_instance['timing'] : '';
			$electronics_retailer_longitude = isset( $electronics_retailer_instance['longitude'] ) ? $electronics_retailer_instance['longitude'] : '';
			$electronics_retailer_latitude = isset( $electronics_retailer_instance['latitude'] ) ? $electronics_retailer_instance['latitude'] : '';
			$electronics_retailer_contact_form = isset( $electronics_retailer_instance['contact_form'] ) ? $electronics_retailer_instance['contact_form'] : '';

	        echo '<div class="custom-contact-us">';
	        if(!empty($electronics_retailer_title) ){ ?><h3 class="custom_title1"><?php echo esc_html($electronics_retailer_title); ?></h3><?php } ?>
		        <?php if(!empty($electronics_retailer_phone) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-solid fa-phone-volume me-2"></i></span>
		        		</div>
		        		<div class="col-lg-10 col-md-10 align-self-center">
		        			<span class="contact-title"><?php echo esc_html('Contact', 'electronics-retailer'); ?></span><span class="custom_desc"><?php echo esc_html($electronics_retailer_phone); ?></span>
		        		</div>		        		
		        	</div>
		        <?php } ?>
		        <?php if(!empty($electronics_retailer_email) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-regular fa-envelope me-2"></i></span>
		        		</div>
		        		<div class="col-lg-10 col-md-10 align-self-center">
		        			<span class="contact-title"><?php echo esc_html('Mail Address', 'electronics-retailer'); ?></span><span class="custom_desc"><?php echo esc_html($electronics_retailer_email); ?></span>
		        		</div>
		        	</div>
		        <?php } ?>
		        <?php if(!empty($electronics_retailer_address) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-solid fa-location-dot me-2"></i></span>
		        		</div>
			        	<div class="col-lg-10 col-md-10 align-self-center">
			        		<span class="contact-title"><?php echo esc_html('Location', 'electronics-retailer'); ?></span><span class="custom_desc"><?php echo esc_html($electronics_retailer_address); ?></span>
			        	</div>
			        </div>
			    <?php } ?> 
		        <?php if(!empty($electronics_retailer_timing) ){ ?><p><span class="custom_details"><?php esc_html_e('Opening Time: ','electronics-retailer'); ?></span><span class="custom_desc"><?php echo esc_html($electronics_retailer_timing); ?></span></p><?php } ?>
		        <?php if(!empty($electronics_retailer_longitude) ){ ?><embed width="100%" height="200px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_html($electronics_retailer_longitude); ?>,<?php echo esc_html($electronics_retailer_latitude); ?>&hl=es;z=14&amp;output=embed"></embed><?php } ?>
		        <?php if(!empty($electronics_retailer_contact_form) ){ ?><?php echo do_shortcode($electronics_retailer_contact_form); ?><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $electronics_retailer_instance ) {

		$electronics_retailer_title= ''; $electronics_retailer_phone= ''; $electronics_retailer_email = ''; $electronics_retailer_address = ''; $electronics_retailer_timing = ''; $electronics_retailer_longitude = ''; $electronics_retailer_latitude = ''; $electronics_retailer_contact_form = ''; 
		
		$electronics_retailer_title = isset( $electronics_retailer_instance['title'] ) ? $electronics_retailer_instance['title'] : '';
		$electronics_retailer_phone = isset( $electronics_retailer_instance['phone'] ) ? $electronics_retailer_instance['phone'] : '';
		$electronics_retailer_email = isset( $electronics_retailer_instance['email'] ) ? $electronics_retailer_instance['email'] : '';
		$electronics_retailer_address = isset( $electronics_retailer_instance['address'] ) ? $electronics_retailer_instance['address'] : '';
		$electronics_retailer_timing = isset( $electronics_retailer_instance['timing'] ) ? $electronics_retailer_instance['timing'] : '';
		$electronics_retailer_longitude = isset( $electronics_retailer_instance['longitude'] ) ? $electronics_retailer_instance['longitude'] : '';
		$electronics_retailer_latitude = isset( $electronics_retailer_instance['latitude'] ) ? $electronics_retailer_instance['latitude'] : '';
		$electronics_retailer_contact_form = isset( $electronics_retailer_instance['contact_form'] ) ? $electronics_retailer_instance['contact_form'] : '';
		
		?>

		<p>
        	<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','electronics-retailer'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_title); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone Number:','electronics-retailer'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_phone); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email id:','electronics-retailer'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_email); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e('Address:','electronics-retailer'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_address); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('timing')); ?>"><?php esc_html_e('Opening Time:','electronics-retailer'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('timing')); ?>" name="<?php echo esc_attr($this->get_field_name('timing')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_timing); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('longitude')); ?>"><?php esc_html_e('Longitude:','electronics-retailer'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('longitude')); ?>" name="<?php echo esc_attr($this->get_field_name('longitude')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_longitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('latitude')); ?>"><?php esc_html_e('Latitude:','electronics-retailer'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('latitude')); ?>" name="<?php echo esc_attr($this->get_field_name('latitude')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_latitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('contact_form')); ?>"><?php esc_html_e('Contact Form Shortcode:','electronics-retailer'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_form')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_form')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_contact_form); ?>">
    	</p>
		
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $electronics_retailer_new_instance, $electronics_retailer_old_instance ) {
		$electronics_retailer_instance = array();	
		$electronics_retailer_instance['title'] = (!empty($electronics_retailer_new_instance['title']) ) ? strip_tags($electronics_retailer_new_instance['title']) : '';
		$electronics_retailer_instance['phone'] = (!empty($electronics_retailer_new_instance['phone']) ) ? electronics_retailer_sanitize_phone_number($electronics_retailer_new_instance['phone']) : '';
		$electronics_retailer_instance['email'] = (!empty($electronics_retailer_new_instance['email']) ) ? sanitize_email($electronics_retailer_new_instance['email']) : '';
		$electronics_retailer_instance['address'] = (!empty($electronics_retailer_new_instance['address']) ) ? strip_tags($electronics_retailer_new_instance['address']) : '';
		$electronics_retailer_instance['timing'] = (!empty($electronics_retailer_new_instance['timing']) ) ? strip_tags($electronics_retailer_new_instance['timing']) : '';
		$electronics_retailer_instance['longitude'] = (!empty($electronics_retailer_new_instance['longitude']) ) ? strip_tags($electronics_retailer_new_instance['longitude']) : '';
		$electronics_retailer_instance['latitude'] = (!empty($electronics_retailer_new_instance['latitude']) ) ? strip_tags($electronics_retailer_new_instance['latitude']) : '';
		$electronics_retailer_instance['contact_form'] = (!empty($electronics_retailer_new_instance['contact_form']) ) ? strip_tags($electronics_retailer_new_instance['contact_form']) : '';
        
		return $electronics_retailer_instance;
	}
}
// Register and load the widget
function electronics_retailer_contact_custom_load_widget() {
	register_widget( 'Electronics_Retailer_Contact_Widget' );
}
add_action( 'widgets_init', 'electronics_retailer_contact_custom_load_widget' );