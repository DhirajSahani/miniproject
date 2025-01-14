<?php

Class Electronics_Retailer_My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
  function widget($electronics_retailer_args, $electronics_retailer_instance) {
      if ( ! isset( $electronics_retailer_args['widget_id'] ) ) {
      $electronics_retailer_args['widget_id'] = $this->id;
    }
    $electronics_retailer_title = ( ! empty( $electronics_retailer_instance['title'] ) ) ? $electronics_retailer_instance['title'] : __( 'Recent Posts', 'electronics-retailer' );
    /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
    $electronics_retailer_title = apply_filters( 'widget_title', $electronics_retailer_title, $electronics_retailer_instance, $this->id_base );
    $electronics_retailer_number = ( ! empty( $electronics_retailer_instance['number'] ) ) ? absint( $electronics_retailer_instance['number'] ) : 5;
    if ( ! $electronics_retailer_number )
        $electronics_retailer_number = 5;
    $electronics_retailer_show_date = isset( $electronics_retailer_instance['show_date'] ) ? $electronics_retailer_instance['show_date'] : false;
    /**
     * Filter the arguments for the Recent Posts widget.
     *
     * @since 3.4.0
     *
     * @see WP_Query::get_posts()
     *
     * @param array $electronics_retailer_args An array of arguments used to retrieve the recent posts.
     */
    $electronics_retailer_r = new WP_Query( apply_filters( 'widget_posts_args', array(
        'posts_per_page'      => $electronics_retailer_number,
        'no_found_rows'       => true,
        'post_status'         => 'publish',
        'ignore_sticky_posts' => true
    ) ) );
    if ($electronics_retailer_r->have_posts()) :
    ?>
    <?php echo $electronics_retailer_args['before_widget']; ?>
    <?php if ( $electronics_retailer_title ) {
        echo $electronics_retailer_args['before_title'] . esc_html($electronics_retailer_title) . $electronics_retailer_args['after_title'];
    } ?>
    <ul>
      <?php while ( $electronics_retailer_r->have_posts() ) : $electronics_retailer_r->the_post(); ?>
      <li>
        <div class="recent-post-box">
          <div class="media post-thumb">
            <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
            <div class="media-body post-content">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <div class="d-flex date-comment">
               <?php if ( $electronics_retailer_show_date ) : ?>
                <p class="post-date"><?php the_date(); ?></p>
               <?php endif; ?>
               <div class="date-comment1"><?php comments_number( __('0 Comment', 'electronics-retailer'), __('0 Comments', 'electronics-retailer'), __('% Comments', 'electronics-retailer') ); ?></div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </ul>

    <?php echo $electronics_retailer_args['after_widget'];

    endif;
  }
}
function electronics_retailer_my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('Electronics_Retailer_My_Recent_Posts_Widget');
}
add_action('widgets_init', 'electronics_retailer_my_recent_widget_registration');
