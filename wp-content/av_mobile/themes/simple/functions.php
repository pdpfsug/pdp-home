<?php

add_filter( 'av_mobile_body_classes', 'simple_body_classes' );
function simple_body_classes( $classes ) {
	
	$classes[] = 'circles';
	
	return $classes;
}


?>