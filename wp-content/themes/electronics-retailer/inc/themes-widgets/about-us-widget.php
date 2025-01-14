<?php
/**
 * Custom About us Widget
 */

class Electronics_Retailer_About_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Electronics_Retailer_About_Widget',
			__('VW About us', 'electronics-retailer'),
			array( 'description' => __( 'Widget for about us section in sidebar', 'electronics-retailer' ), ) 
		);
	}
	
	public function widget( $electronics_retailer_args, $electronics_retailer_instance ) {
		?>
		<aside class="widget">
			<?php
			$electronics_retailer_title = isset( $electronics_retailer_instance['title'] ) ? $electronics_retailer_instance['title'] : '';
			$electronics_retailer_author = isset( $electronics_retailer_instance['author'] ) ? $electronics_retailer_instance['author'] : '';
			$electronics_retailer_designation = isset( $electronics_retailer_instance['designation'] ) ? $electronics_retailer_instance['designation'] : '';
			$electronics_retailer_description = isset( $electronics_retailer_instance['description'] ) ? $electronics_retailer_instance['description'] : '';
			$electronics_retailer_read_more_url = isset( $electronics_retailer_instance['read_more_url'] ) ? $electronics_retailer_instance['read_more_url'] : '';
			$electronics_retailer_read_more_text = isset( $electronics_retailer_instance['read_more_text'] ) ? $electronics_retailer_instance['read_more_text'] : '';
			$electronics_retailer_upload_image = isset( $electronics_retailer_instance['upload_image'] ) ? $electronics_retailer_instance['upload_image'] : '';

	        echo '<div class="custom-about-us">';
	        if(!empty($electronics_retailer_title) ){ ?><h3 class="custom_title"><?php echo esc_html($electronics_retailer_title); ?></h3><?php } ?>
		        <?php if($electronics_retailer_upload_image): ?>
	      			<img src="<?php echo esc_url($electronics_retailer_upload_image); ?>" alt="">
				<?php endif; ?>
				<?php if(!empty($electronics_retailer_author) ){ ?><p class="custom_author"><?php echo esc_html($electronics_retailer_author); ?></p><?php } ?>
				<?php if(!empty($electronics_retailer_designation) ){ ?><p class="custom_designation"><?php echo esc_html($electronics_retailer_designation); ?></p><?php } ?>
		        <?php if(!empty($electronics_retailer_description) ){ ?><p class="custom_desc"><?php echo esc_html($electronics_retailer_description); ?></p><?php } ?>
		        <?php if(!empty($electronics_retailer_read_more_url) ){ ?><div class="more-button"><a class="custom_read_more" href="<?php echo esc_url($electronics_retailer_read_more_url); ?>"><?php if(!empty($electronics_retailer_read_more_text) ){ ?><?php echo esc_html($electronics_retailer_read_more_text); ?><?php } ?></a></div><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $electronics_retailer_instance ) {	

		$electronics_retailer_title= ''; $electronics_retailer_author = ''; $electronics_retailer_designation = ''; $electronics_retailer_description= ''; $electronics_retailer_read_more_text = ''; $electronics_retailer_read_more_url = ''; $electronics_retailer_upload_image = '';

		$electronics_retailer_title = isset( $electronics_retailer_instance['title'] ) ? $electronics_retailer_instance['title'] : '';
		$electronics_retailer_author = isset( $electronics_retailer_instance['author'] ) ? $electronics_retailer_instance['author'] : '';
		$electronics_retailer_designation = isset( $electronics_retailer_instance['designation'] ) ? $electronics_retailer_instance['designation'] : '';
		$electronics_retailer_description = isset( $electronics_retailer_instance['description'] ) ? $electronics_retailer_instance['description'] : '';
		$electronics_retailer_read_more_url = isset( $electronics_retailer_instance['read_more_url'] ) ? $electronics_retailer_instance['read_more_url'] : '';
		$electronics_retailer_read_more_text = isset( $electronics_retailer_instance['read_more_text'] ) ? $electronics_retailer_instance['read_more_text'] : '';
		$electronics_retailer_upload_image = isset( $electronics_retailer_instance['upload_image'] ) ? $electronics_retailer_instance['upload_image'] : '';
	?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','electronics-retailer'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_title); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('author')); ?>"><?php esc_html_e('Author Name:','electronics-retailer'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('author')); ?>" name="<?php echo esc_attr($this->get_field_name('author')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_author); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('designation')); ?>"><?php esc_html_e('Designation:','electronics-retailer'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('designation')); ?>" name="<?php echo esc_attr($this->get_field_name('designation')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_designation); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description:','electronics-retailer'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_description); ?>">
    	</p>
    	<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>"><?php esc_html_e('Button Text:','electronics-retailer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_text')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_read_more_text); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>"><?php esc_html_e('Button Url:','electronics-retailer'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_url')); ?>" type="text" value="<?php echo esc_attr($electronics_retailer_read_more_url); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'upload_image' )); ?>"><?php esc_html_e( 'Image Url:','electronics-retailer'); ?></label>
		<?php
			if ( $electronics_retailer_upload_image != '' ) :
			echo '<img class="custom_media_image" src="' . esc_url($electronics_retailer_upload_image) . '" style="margin:10px 0;padding:0;max-width:100%;float:left;display:inline-block" /><br />';
			endif;
		?>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'upload_image' ) ); ?>" name="<?php echo esc_attr($this->get_field_name( 'upload_image' )); ?>" type="text" value="<?php echo esc_url( $electronics_retailer_upload_image ); ?>" />
	   	</p>
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $electronics_retailer_new_instance, $electronics_retailer_old_instance ) {
		$electronics_retailer_instance = array();	
		$electronics_retailer_instance['title'] = (!empty($electronics_retailer_new_instance['title']) ) ? strip_tags($electronics_retailer_new_instance['title']) : '';
		$electronics_retailer_instance['author'] = ( ! empty( $electronics_retailer_new_instance['author'] ) ) ? strip_tags($electronics_retailer_new_instance['author']) : '';
		$electronics_retailer_instance['designation'] = ( ! empty( $electronics_retailer_new_instance['designation'] ) ) ? strip_tags($electronics_retailer_new_instance['designation']) : '';
		$electronics_retailer_instance['description'] = (!empty($electronics_retailer_new_instance['description']) ) ? strip_tags($electronics_retailer_new_instance['description']) : '';
        $electronics_retailer_instance['read_more_text'] = (!empty($electronics_retailer_new_instance['read_more_text']) ) ? strip_tags($electronics_retailer_new_instance['read_more_text']) : '';
        $electronics_retailer_instance['read_more_url'] = (!empty($electronics_retailer_new_instance['read_more_url']) ) ? esc_url_raw($electronics_retailer_new_instance['read_more_url']) : '';
        $electronics_retailer_instance['upload_image'] = ( ! empty( $electronics_retailer_new_instance['upload_image'] ) ) ? strip_tags($electronics_retailer_new_instance['upload_image']) : '';

		return $electronics_retailer_instance;
	}
}
// Register and load the widget
function electronics_retailer_about_custom_load_widget() {
	register_widget( 'Electronics_Retailer_About_Widget' );
}
add_action( 'widgets_init', 'electronics_retailer_about_custom_load_widget' );