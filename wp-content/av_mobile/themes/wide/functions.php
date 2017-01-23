<?php

add_filter( 'av_mobile_body_classes', 'wide_body_classes' );
function wide_body_classes( $classes ) {
	
	$classes[] = 'circles';
	
	return $classes;
}

?>