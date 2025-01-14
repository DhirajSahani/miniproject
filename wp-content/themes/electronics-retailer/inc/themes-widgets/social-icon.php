<?php
/**
 * Custom Social Widget
 */

class Electronics_Retailer_Social_Widget extends WP_Widget {
	
	function __construct() {
		parent::__construct(
			'Electronics_Retailer_Social_Widget',
			__('VW Social Icon', 'electronics-retailer'),
			array( 'description' => __( 'Widget for Social icons section', 'electronics-retailer' ), ) 
		);
	}

	public function widget( $electronics_retailer_args, $electronics_retailer_instance ) { ?>
		<div class="widget">
			<?php
			$electronics_retailer_title = isset( $electronics_retailer_instance['title'] ) ? $electronics_retailer_instance['title'] : '';
			$electronics_retailer_facebook = isset( $electronics_retailer_instance['facebook'] ) ? $electronics_retailer_instance['facebook'] : '';
			$electronics_retailer_twitter = isset( $electronics_retailer_instance['twitter'] ) ? $electronics_retailer_instance['twitter'] : '';
			$electronics_retailer_instagram = isset( $electronics_retailer_instance['instagram'] ) ? $electronics_retailer_instance['instagram'] : '';
			$electronics_retailer_youtube = isset( $electronics_retailer_instance['youtube'] ) ? $electronics_retailer_instance['youtube'] : '';
			$electronics_retailer_dribbal = isset( $electronics_retailer_instance['dribbal'] ) ? $electronics_retailer_instance['dribbal'] : '';
			$electronics_retailer_linkedin = isset( $electronics_retailer_instance['linkedin'] ) ? $electronics_retailer_instance['linkedin'] : '';
			$electronics_retailer_pinterest = isset( $electronics_retailer_instance['pinterest'] ) ? $electronics_retailer_instance['pinterest'] : '';
			$electronics_retailer_tumblr = isset( $electronics_retailer_instance['tumblr'] ) ? $electronics_retailer_instance['tumblr'] : '';
			

	        echo '<div class="custom-social-icons">';

	        if(!empty($electronics_retailer_title) ){ ?><h3 class="custom_title"><?php echo esc_html($electronics_retailer_title); ?></h3><?php } ?>
	        <?php if(!empty($electronics_retailer_facebook) ){ ?><p class="mb-0"><a class="custom_facebook fff" target= "_blank" href="<?php echo esc_url($electronics_retailer_facebook); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','electronics-retailer' );?></span></a></p><?php } ?>

	        <?php if(!empty($electronics_retailer_twitter) ){ ?><p class="mb-0"><a class="custom_twitter" target= "_blank" href="<?php echo esc_url($electronics_retailer_twitter); ?>"><i class="fa-brands fa-x-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','electronics-retailer' );?></span></a></p><?php } ?>
	        
	        <?php if(!empty($electronics_retailer_instagram) ){ ?><p class="mb-0"><a class="custom_instagram" target= "_blank" href="<?php echo esc_url($electronics_retailer_instagram); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','electronics-retailer' );?></span></a></p><?php } ?>

	        <?php if(!empty($electronics_retailer_youtube) ){ ?><p class="mb-0"><a class="custom_youtube" target= "_blank" href="<?php echo esc_url($electronics_retailer_youtube); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','electronics-retailer' );?></span></a></p><?php } ?>

	        <?php if(!empty($electronics_retailer_dribbal) ){ ?><p class="mb-0"><a class="custom_dribbal" target= "_blank" href="<?php echo esc_url($electronics_retailer_dribbal); ?>"><i class="fa-solid fa-basketball"></i><span class="screen-reader-text"><?php esc_html_e( 'Dribbal','electronics-retailer' );?></span></a></p><?php } ?>

	        <?php if(!empty($electronics_retailer_linkedin) ){ ?><p class="mb-0"><a class="custom_linkedin" target= "_blank" href="<?php echo esc_url($electronics_retailer_linkedin); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','electronics-retailer' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($electronics_retailer_pinterest) ){ ?><p class="mb-0"><a class="custom_pinterest" target= "_blank" href="<?php echo esc_url($electronics_retailer_pinterest); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','electronics-retailer' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($electronics_retailer_tumblr) ){ ?><p class="mb-0"><a class="custom_tumblr" target= "_blank" href="<?php echo esc_url($electronics_retailer_tumblr); ?>"><i class="fab fa-tumblr"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr','electronics-retailer' );?></span></a></p><?php } ?>

	        <?php echo '</div>';
			?>
		</div>
		<?php
	}
	
	// Widget Backend 
	public function form( $electronics_retailer_instance ) {

		$electronics_retailer_title= ''; $electronics_retailer_facebook = ''; $electronics_retailer_twitter = ''; $electronics_retailer_linkedin = '';  $electronics_retailer_pinterest = '';$electronics_retailer_tumblr = ''; $electronics_retailer_instagram = ''; $electronics_retailer_youtube = ''; 

		$electronics_retailer_title = isset( $electronics_retailer_instance['title'] ) ? $electronics_retailer_instance['title'] : '';
		$electronics_retailer_facebook = isset( $electronics_retailer_instance['facebook'] ) ? $electronics_retailer_instance['facebook'] : '';
		$electronics_retailer_instagram = isset( $electronics_retailer_instance['instagram'] ) ? $electronics_retailer_instance['instagram'] : '';
		$electronics_retailer_twitter = isset( $electronics_retailer_instance['twitter'] ) ? $electronics_retailer_instance['twitter'] : '';
		$electronics_retailer_youtube = isset( $electronics_retailer_instance['youtube'] ) ? $electronics_retailer_instance['youtube'] : '';
		$electronics_retailer_dribbal = isset( $electronics_retailer_instance['dribbal'] ) ? $electronics_retailer_instance['dribbal'] : '';
		$electronics_retailer_linkedin = isset( $electronics_retailer_instance['linkedin'] ) ? $electronics_retailer_instance['linkedin'] : '';
		$electronics_retailer_pinterest = isset( $electronics_retailer_instance['pinterest'] ) ? $electronics_retailer_instance['pinterest'] : '';
		$electronics_retailer_tumblr = isset( $electronics_retailer_instance['tumblr'] ) ? $electronics_retailer_instance['tumblr'] : '';
		
		?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','electronics-retailer'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_title); ?>">
    	</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>"><?php esc_html_e('Facebook:','electronics-retailer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_facebook); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>"><?php esc_html_e('Twitter:','electronics-retailer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_twitter); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('instagram')); ?>"><?php esc_html_e('Instagram:','electronics-retailer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('instagram')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_instagram); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('youtube')); ?>"><?php esc_html_e('Youtube:','electronics-retailer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('youtube')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_youtube); ?>">
		</p>
		<label for="<?php echo esc_attr($this->get_field_id('dribbal')); ?>"><?php esc_html_e('Dribbal:','electronics-retailer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('dribbal')); ?>" name="<?php echo esc_attr($this->get_field_name('dribbal')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_dribbal); ?>">
		</p>

		<label for="<?php echo esc_attr($this->get_field_id('linkedin')); ?>"><?php esc_html_e('Linkedin:','electronics-retailer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_linkedin); ?>">
		</p>
		<p>
		
		<label for="<?php echo esc_attr($this->get_field_id('pinterest')); ?>"><?php esc_html_e('Pinterest:','electronics-retailer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('pinterest')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_pinterest); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('tumblr')); ?>"><?php esc_html_e('Tumblr:','electronics-retailer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('tumblr')); ?>" name="<?php echo esc_attr($this->get_field_name('tumblr')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_tumblr); ?>">
		</p>
		<p>
		
		<?php 
	}
	
	public function update( $electronics_retailer_new_instance, $electronics_retailer_old_instance ) {
		$electronics_retailer_instance = array();
		$electronics_retailer_instance['title'] = (!empty($electronics_retailer_new_instance['title']) ) ? strip_tags($electronics_retailer_new_instance['title']) : '';	
        $electronics_retailer_instance['facebook'] = (!empty($electronics_retailer_new_instance['facebook']) ) ? esc_url_raw($electronics_retailer_new_instance['facebook']) : '';
        $electronics_retailer_instance['twitter'] = (!empty($electronics_retailer_new_instance['twitter']) ) ? esc_url_raw($electronics_retailer_new_instance['twitter']) : '';
        $electronics_retailer_instance['instagram'] = (!empty($electronics_retailer_new_instance['instagram']) ) ? esc_url_raw($electronics_retailer_new_instance['instagram']) : '';
        $electronics_retailer_instance['youtube'] = (!empty($electronics_retailer_new_instance['youtube']) ) ? esc_url_raw($electronics_retailer_new_instance['youtube']) : '';
        $electronics_retailer_instance['dribbal'] = (!empty($electronics_retailer_new_instance['dribbal']) ) ? esc_url_raw($electronics_retailer_new_instance['dribbal']) : '';
        $electronics_retailer_instance['linkedin'] = (!empty($electronics_retailer_new_instance['linkedin']) ) ? esc_url_raw($electronics_retailer_new_instance['linkedin']) : '';
        $electronics_retailer_instance['pinterest'] = (!empty($electronics_retailer_new_instance['pinterest']) ) ? esc_url_raw($electronics_retailer_new_instance['pinterest']) : '';
        $electronics_retailer_instance['tumblr'] = (!empty($electronics_retailer_new_instance['tumblr']) ) ? esc_url_raw($electronics_retailer_new_instance['tumblr']) : '';
     	
     	
		return $electronics_retailer_instance;
	}
}

function electronics_retailer_custom_load_widget() {
	register_widget( 'Electronics_Retailer_Social_Widget' );
}
add_action( 'widgets_init', 'electronics_retailer_custom_load_widget' );