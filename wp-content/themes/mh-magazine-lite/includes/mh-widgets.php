<?php

/***** Register Widgets *****/

function mh_magazine_lite_register_widgets() {
	register_widget('mh_affiliate_widget');
	register_widget('mh_custom_posts_widget');
	register_widget('mh_slider_hp_widget');
	register_widget('mh_magazine_lite_tabbed');
	register_widget('mh_magazine_lite_posts_large');
}
add_action('widgets_init', 'mh_magazine_lite_register_widgets');

/***** Include Widgets *****/

require_once('widgets/mh-affiliate.php');
require_once('widgets/mh-custom-posts.php');
require_once('widgets/mh-slider.php');
require_once('widgets/mh-tabbed.php');
require_once('widgets/mh-posts-large.php');

?>