<div class="page-wrapper">

	<header id="header">
	
		<?php if ( av_mobile_has_menu() ) { ?>
			<div id="menu-toggle" class="show-hide-toggle tappable" data-effect-target="menu" role="button">
				<span class="button-toggle"></span>
			</div>
		<?php } ?>
		
		<?php if ( av_mobile_show_search() ) { ?>
			<div id="search-toggle" class="search-toggle tappable" role="button">
				<svg version="1.1" id="search-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
				<g>
					<path d="M28.803,28.762c-0.269,0.256-0.531,0.256-0.786,0l-5.451-5.451c-1.305,1.142-2.83,1.712-4.578,1.712
						c-1.934,0-3.582-0.681-4.944-2.044S11,19.969,11,18.035c0-1.933,0.681-3.582,2.044-4.944s3.011-2.044,4.944-2.044
						c1.933,0,3.582,0.681,4.944,2.044s2.044,3.011,2.044,4.944c0,1.677-0.536,3.168-1.607,4.473l5.416,5.486
						C29.066,28.249,29.071,28.506,28.803,28.762z M23.894,18.035c0-1.63-0.577-3.017-1.73-4.158c-1.153-1.141-2.539-1.712-4.158-1.712
						c-1.619,0-3.005,0.571-4.158,1.712c-1.153,1.142-1.73,2.528-1.73,4.158c0,1.631,0.577,3.017,1.73,4.158
						c1.153,1.142,2.539,1.712,4.158,1.712c1.619,0,3.005-0.57,4.158-1.712C23.317,21.052,23.894,19.666,23.894,18.035z"/>
				</g>
				</svg>
			</div>
		<?php } ?>
		
		<?php if ( av_mobile_has_header_image() ) { ?>
			<div class="header-logo">
				<a href="<?php bloginfo( 'url' ); ?>" class="tappable">
					<img class="header-image" src="<?php echo av_mobile_get_header_image(); ?>" />
				</a>
			</div>
		<?php } else { ?>
			<h1 class="heading-font <?php if ( av_mobile_has_menu() ) { ?>has-menu<?php } ?>">
				<a href="<?php bloginfo( 'url' ); ?>" class="tappable"><?php bloginfo( 'site_title' ); ?></a>
			</h1>
		<?php } ?>

	</header><!-- #header -->
	
	<?php if( av_mobile_show_search() ) { ?>
	<div id="search-dropper">
		<div id="wptouch-search-inner">
			<form method="get" id="searchform" action="<?php echo home_url(); ?>">
				<input type="text" name="s" id="search-text" placeholder="<?php _e( 'Search this website', AVLANG ); ?>&hellip;" />
				<input name="submit" type="submit" id="search-submit" value="<?php _e( 'Search', AVLANG ); ?>" class="button-dark" />
			</form>
		</div>
	</div>
	<?php } ?>
	
	<div id="header-nav">
		<div id="menu" class="wptouch-menu show-hide-menu">		
			<?php if ( av_mobile_has_menu() ) { av_mobile_show_menu(); } ?>
		</div>
	</div><!-- #header-nav -->
	
	<?php if ( is_home() || is_front_page() ) { ?>
		<?php if ( function_exists( 'av_mobile_featured_slider' ) ) { ?>
			<?php av_mobile_featured_slider(600, 440); ?>
		<?php } ?>
	<?php } ?>
	
	
<?php if ( is_archive() ) { ?>
	<div class="post-page-head-area">
		<?php av_mobile_archive_title_text(); ?>
	</div>
<?php } ?>
