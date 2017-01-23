<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( ' | ', true, 'right' ); ?></title>
		<?php wp_head(); ?>
	</head>
	
	<!-- Help speed up display of the page -->
	<?php flush(); ?>
	
	<body <?php body_class( av_mobile_get_body_classes() ); ?>>
		
		<?php get_template_part( 'header-bottom' ); ?>
		<?php if( ! is_singular() ) { 
				do_action( 'mobile_primary_banner' );
			  } ?>