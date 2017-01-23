<?php

add_filter( 'av_mobile_body_classes', 'magazine_body_classes' );
function magazine_body_classes( $classes ) {
	
	$classes[] = 'circles';
	
	return $classes;
}


?>