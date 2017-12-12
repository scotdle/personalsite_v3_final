<?php


function register_social_media_menu() {
	register_nav_menu('social_media_menu',__( 'Social Media Menu' ));
}
add_action( 'init', 'register_social_media_menu' ); ?>



