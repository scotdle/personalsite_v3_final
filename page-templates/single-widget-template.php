<?php

/**
 * Template Name: Single Widget Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 *
 *
 * @package understrap
 */

 get_header();

while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content-single-widget' );
endwhile;

get_footer();
