<?php

add_filter( 'av_mobile_body_classes', 'foody_body_classes' );
function foody_body_classes( $classes ) {
	
	$classes[] = 'circles';
	
	return $classes;
}


?>