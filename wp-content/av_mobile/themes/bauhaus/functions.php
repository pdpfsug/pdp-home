<?php

add_filter( 'av_mobile_body_classes', 'bauhaus_body_classes' );
function bauhaus_body_classes( $classes ) {
	
	$classes[] = 'circles';
	
	return $classes;
}

?>