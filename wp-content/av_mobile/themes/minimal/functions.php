<?php

add_filter( 'av_mobile_body_classes', 'minimal_body_classes' );
function minimal_body_classes( $classes ) {
	
	$classes[] = 'circles';
	
	return $classes;
}

?>