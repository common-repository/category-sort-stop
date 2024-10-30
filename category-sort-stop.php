<?php
/*
Plugin Name: Category Sort Stop
Plugin URI: http://takakitakaki.wordpress.com/plugins/category-sort-stop/
Description: Stop the category sort of when posting an article.
Version: 1.0.1
Author: Kazuyuki Takaki
Author URI: http://takakitakaki.wordpress.com/
License: GPLv2 or later
*/

function refly_wp_terms_checklist_args_checked_ontop_false( $args, $post_id = null ) {
    $args['checked_ontop'] = false;
    return $args;
}
add_action( 'wp_terms_checklist_args', 'refly_wp_terms_checklist_args_checked_ontop_false' );


/* End of file */